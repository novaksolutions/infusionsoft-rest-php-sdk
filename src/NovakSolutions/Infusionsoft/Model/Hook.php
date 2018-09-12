<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/26/18
 * Time: 2:37 PM
 */

namespace NovakSolutions\Infusionsoft\Model;


use NovakSolutions\Infusionsoft\Enum\FieldTypes;
use NovakSolutions\Infusionsoft\Service\HookService;

/**
 * Class Hook
 * @package NovakSolutions\Infusionsoft\Model
 * @property string eventKey
 * @property string hookUrl
 * @property string key
 * @property string status
 */

class Hook extends Model
{
    use Traits\SavableTrait;

    public static $primaryKeyFieldName = 'key';
    protected static $serviceClassName = HookService::class;

    protected static $fields = [
        "eventKey" => FieldTypes::STRING,
        "hookUrl" => FieldTypes::STRING,
        "key" => FieldTypes::STRING,
        "status" => FieldTypes::STRING
    ];
}