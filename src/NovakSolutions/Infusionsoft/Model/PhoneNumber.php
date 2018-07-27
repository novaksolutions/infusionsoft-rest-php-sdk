<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/26/18
 * Time: 2:37 PM
 */

namespace NovakSolutions\Infusionsoft\Model;


class PhoneNumber extends Model
{
    protected static $fields = [
        "extension" => Model::FIELD_TYPE_STRING,
        "field" => Model::FIELD_TYPE_STRING,
        "number" => Model::FIELD_TYPE_STRING,
        "type" => Model::FIELD_TYPE_STRING
    ];
}