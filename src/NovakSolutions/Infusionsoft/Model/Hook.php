<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/26/18
 * Time: 2:37 PM
 */

namespace NovakSolutions\Infusionsoft\Model;


use NovakSolutions\Infusionsoft\Service\HookService;

class Hook extends Model
{
    use Traits\SavableTrait;

    protected static $primaryKeyFieldName = 'key';
    protected static $serviceClassName = HookService::class;

    protected static $fields = [
        "eventKey" => Model::FIELD_TYPE_STRING,
        "hookUrl" => Model::FIELD_TYPE_STRING,
        "key" => Model::FIELD_TYPE_STRING,
        "status" => Model::FIELD_TYPE_STRING
    ];
}