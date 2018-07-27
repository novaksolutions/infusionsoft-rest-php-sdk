<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/23/18
 * Time: 9:29 PM
 */

namespace NovakSolutions\Infusionsoft;


class Registry
{
    /** @var WebRequester $WebRequester */
    public static $WebRequester = null;
    public static $defaultAccessToken = 'a6y3286y5uwz2g2etjc9uteg';
    public static function init(){
        static::$WebRequester = new WebRequester();
    }
}