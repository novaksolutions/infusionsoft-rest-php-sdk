<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/26/18
 * Time: 2:41 PM
 */

namespace NovakSolutions\Infusionsoft\Model;

use NovakSolutions\Infusionsoft\Enum\FieldTypes;

/**
 * Class EmailAddress
 * @package NovakSolutions\Infusionsoft\Model
 * @property string email
 * @property string field
 * @property string email_opt_status
 * @property string is_opt_in
 * @property string opt_in_reason
 */
class EmailAddress extends Model
{
    protected static $fields = [
        "email" => FieldTypes::STRING,
        "field" =>  FieldTypes::STRING,
        "email_opt_status" => FieldTypes::STRING,
        "is_opt_in" => FieldTypes::BOOL,
        "opt_in_reason" => FieldTypes::STRING
    ];
}