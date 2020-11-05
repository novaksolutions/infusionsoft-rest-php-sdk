<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/23/18
 * Time: 7:20 PM
 */

namespace NovakSolutions\Infusionsoft\Model;
use NovakSolutions\Infusionsoft\Enum\FieldTypes;
use NovakSolutions\Infusionsoft\Service\OrderService;

/**
 * Class Order
 * @package NovakSolutions\Infusionsoft\Model
 * @property int id
 * @property bool allow_payment
 * @property Contact contact
 * @property \DateTime creation_date
 * @property int lead_affiliate_id
 * @property \DateTime modification_date
 * @property string notes
 * @property \DateTime order_date
 * @property OrderItem[] order_items
 * @property PaymentPlan payment_plan
 * @property bool recurring
 * @property int refund_total
 * @property int sales_affiliate_id
 * @property OrderShipping shipping_information
 * @property string status
 * @property string terms
 * @property string title
 * @property float total
 * @property float total_due
 * @property float total_paid

 */
class Order extends Model
{

    protected static $serviceClassName = OrderService::class;

    protected static $fields = [
        'allow_payment' => FieldTypes::BOOL,
        'contact' => OrderContact::class,
        'creation_date' => FieldTypes::DATETIME,
        'id' => FieldTypes::INT,
        'lead_affiliate_id' => FieldTypes::INT,
        'modification_date' => FieldTypes::STRING,
        'notes' => FieldTypes::STRING,
        'order_date' => FieldTypes::DATETIME,
        'order_items' => ['array', OrderItem::class],
        'payment_plan' => PaymentPlan::class,
        'recurring' => FieldTypes::BOOL,
        'refund_total' => FieldTypes::INT,
        'sales_affiliate_id' => FieldTypes::INT,
        'shipping_information' => OrderShipping::class,
        'status' => FieldTypes::STRING,
        'terms' => FieldTypes::STRING,
        'title' => FieldTypes::STRING,
        'total' => FieldTypes::FLOAT,
        'total_due' => FieldTypes::FLOAT,
        'total_paid' => FieldTypes::FLOAT,
    ];
}