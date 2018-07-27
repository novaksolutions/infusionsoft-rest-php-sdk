<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/26/18
 * Time: 2:41 PM
 */

namespace NovakSolutions\Infusionsoft\Model;

/**
 * Class EmailAddress
 * @package NovakSolutions\Infusionsoft\Model
 * @property string email
 * @property string field
 */
class EmailAddress extends Model
{
    protected static $fields = [
        "email" => Model::FIELD_TYPE_STRING,
        "field" =>  Model::FIELD_TYPE_STRING
    ];
}