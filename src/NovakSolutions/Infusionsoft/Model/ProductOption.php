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
class ProductOption extends Model
{
    protected static $fields = [
        'id' => FieldTypes::INT,
        'allow_spaces' => FieldTypes::BOOL,
        'can_contain_character' => FieldTypes::BOOL,
        'can_contain_number' => FieldTypes::BOOL,
        'can_end_with_character' => FieldTypes::BOOL,
        'can_end_with_number' => FieldTypes::BOOL,
        'can_start_with_character' => FieldTypes::BOOL,
        'can_start_with_number' => FieldTypes::BOOL,
        'display_index' => FieldTypes::INT,
        'label' => FieldTypes::STRING,
        'max_chars' => FieldTypes::INT,
        'min_chars' => FieldTypes::INT,
        'name' => FieldTypes::STRING,
        'required' => FieldTypes::BOOL,
        'text_message' => FieldTypes::STRING,
        'type' => FieldTypes::STRING,
        'values' => ['array', ProductOptionValue::class],
    ];
}