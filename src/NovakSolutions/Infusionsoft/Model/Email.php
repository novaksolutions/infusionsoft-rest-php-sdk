<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/23/18
 * Time: 7:20 PM
 */

namespace NovakSolutions\Infusionsoft\Model;

use NovakSolutions\Infusionsoft\Enum\FieldTypes;

/**
 * Class Contact
 * @package NovakSolutions\Infusionsoft\Model
 * @property String email
 * @property Address[] addresses
 */
class Email extends Model
{
    protected static $fields = [
        'contact_id' => FieldTypes::INT,
        'headers' => FieldTypes::STRING,
        'id' => FieldTypes::INT,
        'opened_date' => FieldTypes::STRING,
        'received_date' => FieldTypes::STRING,
        'sent_date' => FieldTypes::STRING,
        'sent_from_address' => FieldTypes::STRING,
        'sent_from_reply_address' => FieldTypes::STRING,
        'sent_to_address' => FieldTypes::STRING,
        'sent_to_bcc_addresses' => FieldTypes::STRING,
        'sent_to_cc_addresses' => FieldTypes::STRING,
        'subject' => FieldTypes::STRING,
    ];
}