<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/23/18
 * Time: 9:10 PM
 */

namespace NovakSolutions\Infusionsoft\Service;


use NovakSolutions\Infusionsoft\Exception\BadRequestException;
use NovakSolutions\Infusionsoft\Exception\UnAuthorizedException;
use NovakSolutions\Infusionsoft\Exception\UnknownResponseException;

class Service
{
    /**
     * @param $result
     * @throws BadRequestException
     * @throws UnAuthorizedException
     * @throws UnknownResponseException
     */
    public static function throwExceptionIfError($result)
    {
        switch ($result->responseCode) {
            case 596:
                throw new BadRequestException("Unknown Service");
            case 401:
                throw new UnAuthorizedException("Got 401 response from Infusionsoft during call to " . static::$endPoint);
            case 400:
                throw new BadRequestException("Got Bad Request Exception");
                break;
            case 200:
            case 201:
                break;
            default:
                throw new UnknownResponseException("Got a response I don't know what to do with: " . $result->responseCode);
        }
    }
}