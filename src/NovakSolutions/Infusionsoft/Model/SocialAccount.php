<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/26/18
 * Time: 2:39 PM
 */

namespace NovakSolutions\Infusionsoft\Model;


class SocialAccount extends Model
{
    protected static $fields = [
        "name" => Model::FIELD_TYPE_STRING,
        "type" =>  Model::FIELD_TYPE_STRING,
    ];
}