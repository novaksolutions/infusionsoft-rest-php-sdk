<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/23/18
 * Time: 9:12 PM
 */

namespace NovakSolutions\Infusionsoft\Service\Traits;

use NovakSolutions\Infusionsoft\AssociativeArrayToApiModel;
use NovakSolutions\Infusionsoft\Exception\FindException;
use NovakSolutions\Infusionsoft\Exception\BadRequestException;
use NovakSolutions\Infusionsoft\Exception\UnAuthorizedException;
use NovakSolutions\Infusionsoft\Exception\UnknownResponseException;
use NovakSolutions\Infusionsoft\Model\Model;
use NovakSolutions\Infusionsoft\Registry;
use NovakSolutions\Infusionsoft\WebRequestResult;

trait CreateTrait
{
    /**
     * @param array $criteria
     * @param null $orderBy
     * @param null $ascendingOrDescending
     * @param null $limit
     * @param null $offset
     * @return Model[]
     * @throws \NovakSolutions\Infusionsoft\Exception\FindException
     * @throws \ReflectionException
     * @throws \NovakSolutions\Infusionsoft\Exception\RestException
     */

    public static function create(array $data, $accessToken = null){
        //Replace question mark(s) in url with criteria if it's present
        $url = static::$endPoint;

        //Make Call...
        /** @var WebRequestResult $result */
        $result = Registry::$WebRequester->request($url, 'POST', json_encode($data), $accessToken);

        self::throwExceptionIfError($result);

        //Interperet Response
        $data = json_decode($result->body, true);

        $object = new static::$class($data);

        return $object;
    }
}