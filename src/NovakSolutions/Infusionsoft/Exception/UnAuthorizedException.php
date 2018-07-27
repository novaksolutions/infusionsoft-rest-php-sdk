<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/24/18
 * Time: 8:06 PM
 */

namespace NovakSolutions\Infusionsoft\Exception;


class UnAuthorizedException extends Exception
{

    /**
     * UnAuthorizedException constructor.
     * @param string $string
     */
    public function __construct($string)
    {
    }
}