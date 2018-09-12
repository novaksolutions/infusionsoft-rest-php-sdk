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
    public static $defaultAccessToken = 'r3wcnwxqfbbxndyehzjesb8f';
    public static function init(){
        static::$WebRequester = new WebRequester();
        static::$logger = new SimpleConsoleLogger();
    }
}