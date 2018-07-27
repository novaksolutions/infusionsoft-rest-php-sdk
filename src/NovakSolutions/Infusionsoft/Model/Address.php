<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/26/18
 * Time: 12:33 PM
 */

namespace NovakSolutions\Infusionsoft\Model;


class Address extends Model
{

    protected static $fields = [
        "country_code" => Model::FIELD_TYPE_STRING,
          "line1" =>  Model::FIELD_TYPE_STRING,
          "line2" =>  Model::FIELD_TYPE_STRING,
          "locality" =>  Model::FIELD_TYPE_STRING,
          "region" =>  Model::FIELD_TYPE_STRING,
          "zip_code" =>  Model::FIELD_TYPE_STRING,
          "zip_four" =>  Model::FIELD_TYPE_STRING
    ];
}