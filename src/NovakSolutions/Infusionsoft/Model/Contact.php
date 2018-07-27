<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/23/18
 * Time: 7:20 PM
 */

namespace NovakSolutions\Infusionsoft\Model;
use NovakSolutions\Infusionsoft\Service\ContactService;

/**
 * Class Contact
 * @package NovakSolutions\Infusionsoft\Model
 * @property Address[] addresses
 * @property \DateTime birthday
 * @property EmailAddress[] email_addresses
 * @property int id
 */
class Contact extends Model
{
    use Traits\SavableTrait;

    protected static $serviceClassName = ContactService::class;

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
        'id' => Model::FIELD_TYPE_INT,
        'phone_numbers' => ['array', PhoneNumber::class],
        'social_accounts' => ['array', SocialAccount::class],
    ];
}