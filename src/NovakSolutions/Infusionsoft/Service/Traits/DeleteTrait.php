<?php
/**
 * Created by PhpStorm.
 * User: joeynovak1
 * Date: 9/12/2018 AD
 * Time: 4:17 PM
 */

namespace NovakSolutions\Infusionsoft\Service\Traits;


trait DeleteTrait
{
    /**
     * @return bool
     * @throws \ReflectionException
     * @throws \NovakSolutions\Infusionsoft\Exception\RestException
     */

    public static function delete($id, $accessToken = ''){
        //Replace question mark(s) in url with criteria if it's present
        $className = static::$class;
        $url = static::$endPoint . '/' . $id;

        //Make Call...
        /** @var WebRequestResult $result */
        $result = Registry::$WebRequester->request($url, 'DELETE', [], $accessToken);

        self::throwExceptionIfError($result);

        return true;
    }
}