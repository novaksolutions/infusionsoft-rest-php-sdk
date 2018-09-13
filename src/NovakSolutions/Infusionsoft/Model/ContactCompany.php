<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/26/18
 * Time: 2:44 PM
 */

namespace NovakSolutions\Infusionsoft\Model;


use NovakSolutions\Infusionsoft\Enum\FieldTypes;

class ContactCompany extends Model
{
    protected static $fields = [
        "company_name" => FieldTypes::STRING,
        "id" =>  FieldTypes::INT,
    ];
}