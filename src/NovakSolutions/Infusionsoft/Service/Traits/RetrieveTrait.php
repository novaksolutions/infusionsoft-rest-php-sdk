<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/23/18
 * Time: 9:12 PM
 */

namespace NovakSolutions\Infusionsoft\Service\Traits;

use NovakSolutions\Infusionsoft\Exception\BadRequestException;
use NovakSolutions\Infusionsoft\Exception\UnAuthorizedException;
use NovakSolutions\Infusionsoft\Exception\UnknownResponseException;
use NovakSolutions\Infusionsoft\Model\Model;
use NovakSolutions\Infusionsoft\Registry;
use NovakSolutions\Infusionsoft\Service\Service;
use NovakSolutions\Infusionsoft\WebRequestResult;

trait RetrieveTrait
{
    /**
     * @param array $criteria
     * @param null $orderBy
     * @param null $ascendingOrDescending
     * @param null $limit
     * @param null $offset
     * @return Model
     * @throws \NovakSolutions\Infusionsoft\Exception\FindException
     * @throws \ReflectionException
     * @throws \NovakSolutions\Infusionsoft\Exception\RestException
     */

    public static function get($id){
        //Build Request
        $parameters = [];

        //Replace question mark(s) in url with criteria if it's present
        $url = static::$endPoint . '/' . $id;

        //Make Call...
        /** @var WebRequestResult $result */
        $result = Registry::$WebRequester->request($url, 'GET', $parameters, null);
        static::throwExceptionIfError($result);

        //Interperet Response
        $objects = json_decode($result->body, true);

        $result = new static::$class($objects);

        return $result;
    }
}