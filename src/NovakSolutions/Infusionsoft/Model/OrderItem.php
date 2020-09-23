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
class OrderItem extends Model
{
    protected static $fields = [
        'cost' => FieldTypes::FLOAT,
        'description' => FieldTypes::STRING,
        'discount' => FieldTypes::FLOAT,
        'id' => FieldTypes::INT,
        'name' => FieldTypes::STRING,
        'notes' => FieldTypes::STRING,
        'price' => FieldTypes::FLOAT,
        'product' => OrderItemProduct::class,
        'quantity' => FieldTypes::INT,
        'type' => FieldTypes::STRING,
    ];
}