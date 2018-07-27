<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/26/18
 * Time: 2:42 PM
 */

namespace NovakSolutions\Infusionsoft\Model;


class CustomField extends Model
{
    protected static $fields = [
        "content" => Model::FIELD_TYPE_STRING,
        "id" =>  Model::FIELD_TYPE_INT,
    ];
}