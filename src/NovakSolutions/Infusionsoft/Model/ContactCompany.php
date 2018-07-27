<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/26/18
 * Time: 2:44 PM
 */

namespace NovakSolutions\Infusionsoft\Model;


class ContactCompany extends Model
{
    protected static $fields = [
        "company_name" => Model::FIELD_TYPE_STRING,
        "id" =>  Model::FIELD_TYPE_INT,
    ];
}