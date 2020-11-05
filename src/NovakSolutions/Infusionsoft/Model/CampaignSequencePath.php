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
 * Class CampaignSequencePath
 * @package NovakSolutions\Infusionsoft\Model
 * @property int id
 * @property CampaignSequencePathItem[] items
 */
class CampaignSequencePath extends Model
{
    protected static $fields = [
        'id' => FieldTypes::INT,
        'items' => ['array', CampaignSequencePathItem::class]
    ];
}