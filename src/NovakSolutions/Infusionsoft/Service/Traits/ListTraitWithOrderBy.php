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

trait ListTraitWithOrderBy
{
    /**
     * @param array $criteria
     * @param null $orderBy
     * @param null $ascendingOrDescending
     * @param null $limit
     * @param null $offset
     * @return \NovakSolutions\Infusionsoft\Model\Campaign[]
     * @throws \NovakSolutions\Infusionsoft\Exception\FindException
     * @throws \ReflectionException
     */

    public static function find(array $criteria = [], $orderBy = null, $ascendingOrDescending = null, $limit = null, $offset = null, $accessToken = null){
        //Build Request
        $parameters = [];
        foreach($criteria as $criteriaFieldName => $criterion){
            if(!in_array($criteriaFieldName, static::$findByFields)){
                throw new FindException("Invalid field name: " . $criteriaFieldName . ' in service ' . (new \ReflectionClass(self::class))->getShortName());
            }

            $parameters[$criteriaFieldName] = $criterion;
        }

        if($orderBy != null){
            $parameters['order'] = $orderBy;
            if($ascendingOrDescending == null) {
                $ascendingOrDescending = 'ascending';
            }
            if(!in_array($ascendingOrDescending, ['ascending', 'descending'])){
                throw new FindException("Invalid ascendingOrDescending value: " . $ascendingOrDescending . ' valid values are (ascending, descending)');
            }
            $parameters['order_direction'] = $ascendingOrDescending;
        }

        if($limit != null){
            $parameters['limit'] = $limit;
        }

        if($offset != null){
            $parameters['offset'] = $offset;
        }

        //Make Call...
        /** @var WebRequestResult $result */
        $result = Registry::$WebRequester->request(static::$endPoint, 'GET', $parameters, null);
        static::throwExceptionIfError($result);

        $objects = null;


        //Interperet Response
        $objects = json_decode($result->body, true);
        $results = [];

        foreach($objects[static::$arrayKey] as $objectAsArray){
            $results[] = new static::$class($objectAsArray);
        }

        return $results;
    }
}