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
 */
class Order extends Model
{

    protected static $serviceClassName = OrderService::class;

    protected static $fields = [
        'allow_payment' => FieldTypes::BOOL,
        'contact' => OrderContact::class,
        'creation_date' => FieldTypes::STRING,
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