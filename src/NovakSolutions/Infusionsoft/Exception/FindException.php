<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/23/18
 * Time: 9:21 PM
 */

namespace NovakSolutions\Infusionsoft\Exception;


class FindException extends Exception
{

    /**
     * FindException constructor.
     * @param string $string
     */
    public function __construct($string)
    {
        parent::__construct($string);
    }
}