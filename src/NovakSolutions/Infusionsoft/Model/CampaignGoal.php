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
 * Class CampaignGoal
 * @package NovakSolutions\Infusionsoft\Model
 * @property int id
 * @property array historical_contact_counts
 * @property string name
 * @property array next_sequence_ids
 * @property array previous_sequence_ids
 * @property string type
 */
class CampaignGoal extends Model
{
    protected static $fields = [
        'id' => FieldTypes::INT,
        'historical_contact_counts' => FieldTypes::AN_ARRAY,
        'name' => FieldTypes::STRING,
        'next_sequence_ids' => FieldTypes::AN_ARRAY,
        'previous_sequence_ids' => FieldTypes::AN_ARRAY,
        'type' => FieldTypes::STRING,
    ];
}