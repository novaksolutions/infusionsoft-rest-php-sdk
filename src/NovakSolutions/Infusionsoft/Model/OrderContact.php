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
class OrderContact extends Model
{
    protected static $fields = [
        'company_name' => FieldTypes::STRING,
        'email' => FieldTypes::STRING,
        'first_name' => FieldTypes::STRING,
        'id' => FieldTypes::INT,
        'job_title' => FieldTypes::STRING,
        'last_name' => FieldTypes::STRING,
    ];
}