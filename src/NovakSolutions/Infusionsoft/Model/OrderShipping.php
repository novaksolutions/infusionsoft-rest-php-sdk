<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/23/18
 * Time: 7:20 PM
 */

namespace NovakSolutions\Infusionsoft\Model;
use NovakSolutions\Infusionsoft\Enum\FieldTypes;
use NovakSolutions\Infusionsoft\Service\ContactService;

/**
 * Class Contact
 * @package NovakSolutions\Infusionsoft\Model
 * @property Address[] addresses
 * @property \DateTime birthday
 * @property EmailAddress[] email_addresses
 * @property int id
 */
class OrderShipping extends Model
{
    protected static $fields = [
        'company' => FieldTypes::STRING,
        'country_code' => FieldTypes::STRING,
        'first_name' => FieldTypes::STRING,
        'last_name' => FieldTypes::STRING,
        'line1' => FieldTypes::STRING,
        'line2' => FieldTypes::STRING,
        'locality' => FieldTypes::STRING,
        'middle_name' => FieldTypes::STRING,
        'phone' => FieldTypes::STRING,
        'region' => FieldTypes::STRING,
        'zip_code' => FieldTypes::STRING,
        'zip_four' => FieldTypes::STRING,
    ];
}