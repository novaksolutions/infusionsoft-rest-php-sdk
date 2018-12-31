<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/24/18
 * Time: 8:22 PM
 */

namespace NovakSolutions\Infusionsoft\Exception;


use NovakSolutions\Infusionsoft\Exception\Exception;

class BadRequestException extends Exception
{

    /**
     * BadRequestException constructor.
     * @param string $string
     */
    public function __construct($string = null, $code = null, Throwable $previous = null)
    {
        parent::__construct($string, $code, $previous);
    }
}