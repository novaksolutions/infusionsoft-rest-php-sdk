<?php
/**
 * Created by PhpStorm.
 * User: joeynovak1
 * Date: 9/12/2018 AD
 * Time: 4:17 PM
 */

namespace NovakSolutions\Infusionsoft\Service\Traits;


use NovakSolutions\Infusionsoft\Registry;
use NovakSolutions\Infusionsoft\Service\Service;
use NovakSolutions\Infusionsoft\WebRequestResult;

/**
 * Trait UpdateTrait
 * @package NovakSolutions\Infusionsoft\Service\Traits
 */
trait UpdateTrait
{
    /**
     * @return bool
     * @throws \ReflectionException
     * @throws \NovakSolutions\Infusionsoft\Exception\RestException
     */

    public static function update(array $data, $accessToken = null){
        //Replace question mark(s) in url with criteria if it's present
        $className = static::$class;
        $url = static::$endPoint . '/' . $data[$className::$primaryKeyFieldName];

        foreach(static::getReadOnlyFields() as $field){
            if(isset($data[$field])){
                unset($data[$field]);
            }
        }
        //Make Call...
        /** @var WebRequestResult $result */
        $result = Registry::$WebRequester->request($url, 'PUT', json_encode($data), $accessToken);
        static::throwExceptionIfError($result);

        return true;
    }
}