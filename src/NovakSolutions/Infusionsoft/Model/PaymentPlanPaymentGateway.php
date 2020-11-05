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
class PaymentPlanPaymentGateway extends Model
{
    protected static $fields = [
        'merchant_account_id' => FieldTypes::INT,
        'use_default' => FieldTypes::BOOL,
    ];
}