<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/23/18
 * Time: 9:10 PM
 */

namespace NovakSolutions\Infusionsoft\Service;


use NovakSolutions\Infusionsoft\Exception\BadRequestException;
use NovakSolutions\Infusionsoft\Exception\ServerErrorException;
use NovakSolutions\Infusionsoft\Exception\UnAuthorizedException;
use NovakSolutions\Infusionsoft\Exception\UnknownResponseException;

class Service
{
    public static $endPoint = null;
    public static $arrayKey = null;
    public static $class = null;

    /**
     * @param $result
     * @throws BadRequestException
     * @throws UnAuthorizedException
     * @throws UnknownResponseException
     */
    public static function throwExceptionIfError($result)
    {
        //See https://restfulapi.net/ for details of different return codes
        switch ($result->responseCode) {
            case 200:
            case 201:
            case 202:
            case 204:
                //Success!  Do nothing.
                break;
            case 500:
                throw new ServerErrorException("Infusionsoft may return a 500 if the requested record isn't found.");
            case 596:
                throw new BadRequestException("Unknown Service");
            case 401:
                throw new UnAuthorizedException("Got 401 response from Infusionsoft during call to " . static::$endPoint);
            case 400:
                throw new BadRequestException("Got Bad Request Exception");
                break;
            default:
                throw new UnknownResponseException("Got a response I don't know what to do with: " . $result->responseCode);
        }
    }

    public static function getReadOnlyFields(){
        $modelClassName = static::$class;
        return $modelClassName::$readOnlyFields;
    }
}