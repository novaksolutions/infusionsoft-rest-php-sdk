<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/23/18
 * Time: 9:30 PM
 */

namespace NovakSolutions\Infusionsoft;

use NovakSolutions\Infusionsoft\Exception\RestException;

class WebRequester
{
    public $tokenMethod = self::AUTHORIZATION_HEADER;
    /**
     * WebRequester constructor.
     */
    const AUTHORIZATION_HEADER = 'authorization_header';

    const GET_PARAMETER = 'get_parameter';

    public function __construct()
    {
    }

    private static function needsPostBody($requestVerb)
    {
        return in_array($requestVerb, ['POST', 'PUT', 'PATCH']);
    }

    public function request($endPoint, $requestVerb, $payload = null, $accessToken = null)
    {
        if($accessToken == null){
            $accessToken = Registry::$defaultAccessToken;
        }

        if(!in_array($requestVerb, ['GET', 'POST', 'PATCH', 'PUT', 'DELETE'])){
            throw new RestException('Invalid http verb - ' . $requestVerb);
        }

        $ch = curl_init();

        $url = 'https://api.infusionsoft.com/crm/rest/v1' . $endPoint;

        //Add Url Params
        $urlParams = [];

        if($this->tokenMethod == self::GET_PARAMETER){
            $urlParams['access_token'] = $accessToken;
        }

        if(!self::needsPostBody($requestVerb) && $payload != null){
            $urlParams = array_merge($urlParams, $payload);
        }

        if(count($urlParams) > 0) {
            $url .= '?' . http_build_query($urlParams);
        }

        //Setup CURLOPTs
        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $requestVerb);
        if(self::needsPostBody($requestVerb)){
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        }
        $headers = [
            'Accept: application/json, */*',
            'Content-Type: application/json'
        ];
        if($this->tokenMethod == '' . self::AUTHORIZATION_HEADER . ''){
            $headers[] = 'Authorization: Bearer ' . $accessToken;
        }

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        //Make Request
        $response = curl_exec($ch);

        //Process Response
        $result = new WebRequestResult();
        $result->body = $response;
        $result->responseCode = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
        Registry::$logger->debug($requestVerb . ': ' . $url);
        if(self::needsPostBody($requestVerb)) {
            Registry::$logger->debug("  REQUEST PAYLOAD: " . print_r($payload, true));
        } else {
            Registry::$logger->debug("  NO REQUEST PAYLOAD");
        }
        Registry::$logger->debug("  RESPONSE BODY: " . $result->body);
        Registry::$logger->debug("  RESPONSE CODE: " . $result->responseCode);

        curl_close($ch);

        return $result;
    }
}