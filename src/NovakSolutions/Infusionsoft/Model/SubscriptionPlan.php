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
class SubscriptionPlan extends Model
{
    protected static $fields = [
        'id' => FieldTypes::INT,
        'active' => FieldTypes::BOOL,
        'cycle' => FieldTypes::INT,
        'frequency' => FieldTypes::INT,
        'number_of_cycles' => FieldTypes::INT,
        'plan_price' => FieldTypes::FLOAT,
        'subscription_plan_index' => FieldTypes::INT,
        'subscription_plan_name' => FieldTypes::STRING,
        'url' => FieldTypes::STRING,
    ];
}