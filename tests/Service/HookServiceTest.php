<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/23/18
 * Time: 7:30 PM
 */

namespace NovakSolutions\Infusionsoft\Service;
use NovakSolutions\Infusionsoft\Enum\HookTypes;
use NovakSolutions\Infusionsoft\Model\Hook;
use NovakSolutions\Infusionsoft\Registry;
use PHPUnit\Framework\TestCase;

class HookServiceTest extends TestCase
{
    public function setUp(){
        Registry::init();
    }
    public function testCreate(){
        $hook = new Hook();
        $hook->eventKey = HookTypes::APPOINTMENT_ADD;
        $hook->hookUrl = "https://www.google.com";
        $hook->save();

       //var_dump($hooks);
    }

    public function testList(){
        $hooks = HookService::find();
        var_dump($hooks);
    }
}