<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/23/18
 * Time: 9:29 PM
 */

namespace NovakSolutions\Infusionsoft;


class SimpleConsoleLogger
{
    private $logLevelStaticClassName;
    public $logLevel = 2;

    const DEBUG = 5;
    const INFO = 4;
    const WARN = 3;
    const ERROR = 2;

    public function debug($message){
        if($this->logLevel >= self::DEBUG){
            echo $message . "\n";
        }
    }
}