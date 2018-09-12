<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/26/18
 * Time: 12:33 PM
 */

namespace NovakSolutions\Infusionsoft\Model;


use NovakSolutions\Infusionsoft\Enum\FieldTypes;

class Address extends Model
{

    protected static $fields = [
        "country_code" => FieldTypes::STRING,
          "line1" =>  FieldTypes::STRING,
          "line2" =>  FieldTypes::STRING,
          "locality" =>  FieldTypes::STRING,
          "region" =>  FieldTypes::STRING,
          "zip_code" =>  FieldTypes::STRING,
          "zip_four" =>  FieldTypes::STRING
    ];
}