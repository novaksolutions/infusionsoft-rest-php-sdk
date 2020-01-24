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
class ProductOptionValue extends Model
{
    protected static $fields = [
        'id' => FieldTypes::INT,
        'index' => FieldTypes::INT,
        'is_default' => FieldTypes::BOOL,
        'label' => FieldTypes::STRING,
        'price_adjustment' => FieldTypes::FLOAT,
        'sku' => FieldTypes::STRING,
    ];
}