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
class Contact extends Model
{
    protected static $fields = [
        'addresses' => ['array', Address::class],
        "anniversary" => Model::FIELD_TYPE_DATETIME,
        "birthday" => Model::FIELD_TYPE_DATETIME,
        'company' => [ContactCompany::class],
        "contact_type" => Model::FIELD_TYPE_STRING,
        'custom_fields' => ['array', CustomField::class],
        "date_created" => Model::FIELD_TYPE_DATETIME,
        'email_addresses' => ['array', EmailAddress::class],
        'fax_numbers' => ['array', FaxNumber::class],
        'phone_numbers' => ['array', PhoneNumber::class],
        'social_accounts' => ['array', SocialAccount::class],
    ];
}