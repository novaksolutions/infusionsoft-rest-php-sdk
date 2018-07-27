<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/26/18
 * Time: 12:39 PM
 */

namespace NovakSolutions\Infusionsoft\Exception;


class InvalidFieldException extends Exception
{

    /**
     * InvalidFieldException constructor.
     * @param string $string
     */
    public function __construct($string)
    {
    }
}