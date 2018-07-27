<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/26/18
 * Time: 2:37 PM
 */

namespace NovakSolutions\Infusionsoft\Model;


class FaxNumber extends Model
{
    protected static $fields = [
        "field" => Model::FIELD_TYPE_STRING,
        "number" => Model::FIELD_TYPE_STRING,
        "type" => Model::FIELD_TYPE_STRING
    ];
}