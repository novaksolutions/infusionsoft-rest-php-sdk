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

    /** @var SimpleConsoleLogger  $logger */
    public static $logger = null;
    public static $defaultAccessToken = 'ta9e4fuj6bfq36nfx64h7wyx';
    public static function init(){
        static::$WebRequester = new WebRequester();
        static::$logger = new SimpleConsoleLogger();
    }
}