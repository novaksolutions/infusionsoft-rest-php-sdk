<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/26/18
 * Time: 2:37 PM
 */

namespace NovakSolutions\Infusionsoft\Model;


use NovakSolutions\Infusionsoft\Enum\FieldTypes;

/**
 * Class PhoneNumber
 * @package NovakSolutions\Infusionsoft\Model
 * @property string extension;
 * @property string field;
 * @property string number;
 * @property string type;
 */
class PhoneNumber extends Model
{
    protected static $fields = [
        "extension" => FieldTypes::STRING,
        "field" => FieldTypes::STRING,
        "number" => FieldTypes::STRING,
        "type" => FieldTypes::STRING
    ];
}