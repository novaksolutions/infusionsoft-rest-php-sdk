<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/26/18
 * Time: 12:34 PM
 */

namespace NovakSolutions\Infusionsoft\Model;


use NovakSolutions\Infusionsoft\Exception\InvalidFieldException;
//use function PHPSTORM_META\type;

class Model
{
    const FIELD_TYPE_ARRAY = 'array';
    const FIELD_TYPE_DATETIME = 'datetime';
    const FIELD_TYPE_INT = 'int';
    const FIELD_TYPE_STRING = 'string';

    protected static $primaryKeyFieldName = 'id';
    protected static $serviceClassName = null;
    protected static $fields = [];
    protected $data = array();

    public function __construct(array $data = null, $authTokenKey = '')
    {
         if($data != null){
             $this->fromArray($data);
         }
    }

    /**
     * @param $fieldName
     * @param $value
     * @throws InvalidFieldException
     */
    public function __set($fieldName, $value)
    {
        if(in_array($fieldName, array_keys(static::$fields))){
            $this->data[$fieldName] = $value;
        }else{
            throw new InvalidFieldException("Invalid Field Name: " . $fieldName);
        }
    }

    /**
     * @param $fieldName
     * @return mixed|null
     * @throws InvalidFieldException
     */
    public function &__get($fieldName)
    {
        if(in_array($fieldName, array_keys(static::$fields))){
            if(isset($this->data[$fieldName])){
                return $this->data[$fieldName];
            }else{
                $dummy = null;
                return $dummy;
            }
        }else{
            throw new InvalidFieldException("Invalid Field Name: " . $fieldName);
        }
    }

    public function __isset($property)
    {
        return (isset($this->$property) || in_array($property, array_keys(static::$fields)));
    }

    public function isEmpty()
    {
        foreach(static::$fields as $fieldName){
            if($this->$fieldName != ''){
                return false;
            }
        }
        return true;
    }

    public function isValidField($name)
    {
        return in_array($name, array_keys(static::$fields));
    }

    public function fromArray($data){
        foreach($data as $key => $value){
            if(isset(static::$fields[$key])){
                $fieldDetails = static::$fields[$key];
                if(is_array($fieldDetails) && count($fieldDetails) > 1 && strpos($fieldDetails[1], "NovakSolutions\Infusionsoft\Model") === 0 && $fieldDetails[0] == self::FIELD_TYPE_ARRAY){
                    $this->$key = [];
                    foreach($value as $object){
                        $this->$key[] = new $fieldDetails[1]($object);
                    }
                } else {
                    $this->$key = $value;
                }
            }
        }
    }

    public function toArray()
    {
        $asArray = [];
        foreach($this->data as $key => $value){
            if(isset(static::$fields[$key])){
                $fieldDetails = static::$fields[$key];
                if(is_array($fieldDetails) && count($fieldDetails) > 1 && strpos($fieldDetails[1], "NovakSolutions\Infusionsoft\Model") === 0 && $fieldDetails[0] == self::FIELD_TYPE_ARRAY){
                    $asArray[$key] = [];
                    foreach($value as $object){
                      $asArray[$key][] = $object->toArray();
                    }
                } else {
                    if($value instanceof \DateTime){
                        $value = $value->format(\DateTime::ISO8601);
                    }
                    $asArray[$key] = $value;
                }
            }
        }
        return $asArray;
    }
}