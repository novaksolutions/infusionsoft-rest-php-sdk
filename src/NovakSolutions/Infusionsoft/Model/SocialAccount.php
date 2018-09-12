<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/26/18
 * Time: 2:39 PM
 */

namespace NovakSolutions\Infusionsoft\Model;


use NovakSolutions\Infusionsoft\Enum\FieldTypes;

class SocialAccount extends Model
{
    protected static $fields = [
        "name" => FieldTypes::STRING,
        "type" =>  FieldTypes::STRING,
    ];
}