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
 * @property Address[] addresses
 * @property \DateTime birthday
 * @property EmailAddress[] email_addresses
 * @property int id
 */
class OrderItemProduct extends Model
{
    protected static $fields = [
        'id' => FieldTypes::INT,
        'product_desc' => FieldTypes::STRING,
        'product_name' => FieldTypes::STRING,
        'product_options' => ['array', ProductOption::class],
        'product_price' => FieldTypes::FLOAT,
        'product_short_desc' => FieldTypes::STRING,
        'sku' => FieldTypes::STRING,
        'status' => FieldTypes::INT,
        'sub_category_id' => FieldTypes::INT,
        'subscription_only' => FieldTypes::BOOL,
        'subscription_plans' => ['array', SubscriptionPlan::class],
        'url' => FieldTypes::STRING,
    ];
}