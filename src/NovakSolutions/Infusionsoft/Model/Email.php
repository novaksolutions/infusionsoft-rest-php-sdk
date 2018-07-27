<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/23/18
 * Time: 7:20 PM
 */

namespace NovakSolutions\Infusionsoft\Model;

/**
 * Class Contact
 * @package NovakSolutions\Infusionsoft\Model
 * @property String email
 * @property Address[] addresses
 */
class Email extends Model
{
    protected static $fields = [
        'contact_id' => Model::FIELD_TYPE_INT,
        'headers' => Model::FIELD_TYPE_STRING,
        'id' => Model::FIELD_TYPE_INT,
        'opened_date' => Model::FIELD_TYPE_STRING,
        'received_date' => Model::FIELD_TYPE_STRING,
        'sent_date' => Model::FIELD_TYPE_STRING,
        'sent_from_address' => Model::FIELD_TYPE_STRING,
        'sent_from_reply_address' => Model::FIELD_TYPE_STRING,
        'sent_to_address' => Model::FIELD_TYPE_STRING,
        'sent_to_bcc_addresses' => Model::FIELD_TYPE_STRING,
        'sent_to_cc_addresses' => Model::FIELD_TYPE_STRING,
        'subject' => Model::FIELD_TYPE_STRING,
    ];
}