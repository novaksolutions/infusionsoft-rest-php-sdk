<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/23/18
 * Time: 9:12 PM
 */

namespace NovakSolutions\Infusionsoft\Service\Traits;

use NovakSolutions\Infusionsoft\Exception\FindException;
use NovakSolutions\Infusionsoft\Exception\BadRequestException;
use NovakSolutions\Infusionsoft\Exception\UnAuthorizedException;
use NovakSolutions\Infusionsoft\Exception\UnknownResponseException;
use NovakSolutions\Infusionsoft\Model\Model;
use NovakSolutions\Infusionsoft\Registry;
use NovakSolutions\Infusionsoft\WebRequestResult;

trait ListTraitNoModel
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
     */

    public static function find(array $criteria = [], $limit = null, $offset = null, $accessToken = null){
        //Build Request
        $parameters = [];

        //Replace question mark(s) in url with criteria if it's present
        $url = static::$endPoint;
        if(property_exists(static::class, 'parameterToReplaceQuestionMark') && isset($criteria[static::$parameterToReplaceQuestionMark])){
            $url = str_replace("?", $criteria[static::$parameterToReplaceQuestionMark], $url);
            unset($criteria[static::$parameterToReplaceQuestionMark]);
        }

        foreach($criteria as $criteriaFieldName => $criterion){
            if(!in_array($criteriaFieldName, static::$findByFields)){
                throw new FindException("Invalid field name: " . $criteriaFieldName . ' in service ' . (new \ReflectionClass(self))->getShortName());
            }
            $parameters[$criteriaFieldName] = $criterion;
        }

        if($limit != null){
            $parameters['limit'] = $limit;
        }

        if($offset != null){
            $parameters['offset'] = $offset;
        }

        //Make Call...
        /** @var WebRequestResult $result */
        $result = Registry::$WebRequester->request($url, 'GET', $parameters, null);

        static::throwExceptionIfError($result);
        $objects = null;

        //Interperet Response
        $results = json_decode($result->body, true);

        return $results;
    }
}