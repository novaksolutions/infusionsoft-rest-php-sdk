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
 * @property PhoneNumber[] phone_numbers
 * @property string family_name
 * @property string given_name
 * @property int id
 */
class Contact extends Model
{
    use Traits\SavableTrait;

    protected static $serviceClassName = ContactService::class;

    protected static $fields = [
        'addresses' => ['array', Address::class],
        "anniversary" => FieldTypes::DATETIME,
        "birthday" => FieldTypes::DATETIME,
        'company' => ContactCompany::class,
        "contact_type" => FieldTypes::STRING,
        'custom_fields' => ['array', CustomField::class],
        "date_created" => FieldTypes::DATETIME,
        'email_addresses' => ['array', EmailAddress::class],
        'family_name' => FieldTypes::STRING,
        'given_name' => FieldTypes::STRING,
        'fax_numbers' => ['array', FaxNumber::class],
        'id' => FieldTypes::INT,
        'phone_numbers' => ['array', PhoneNumber::class],
        'social_accounts' => ['array', SocialAccount::class],
    ];
}