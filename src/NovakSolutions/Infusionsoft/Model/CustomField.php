<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/26/18
 * Time: 2:42 PM
 */

namespace NovakSolutions\Infusionsoft\Model;


use NovakSolutions\Infusionsoft\Enum\FieldTypes;

class CustomField extends Model
{
    protected static $fields = [
        "content" => FieldTypes::STRING,
        "id" =>  FieldTypes::INT,
    ];
}