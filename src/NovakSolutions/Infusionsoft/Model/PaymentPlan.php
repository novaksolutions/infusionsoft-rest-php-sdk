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
class PaymentPlan extends Model
{
    protected static $fields = [
        'auto_charge' => FieldTypes::BOOL,
        'credit_card_id' => FieldTypes::INT,
        'days_between_payments' => FieldTypes::INT,
        'initial_payment_amount' => FieldTypes::FLOAT,
        'initial_payment_date' => FieldTypes::DATE,
        'number_of_payments' => FieldTypes::INT,
        'payment_gateway' => PaymentPlanPaymentGateway::class,
        'plan_start_date' => FieldTypes::DATE,
    ];
}