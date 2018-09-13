<?php
/**
 * Created by PhpStorm.
 * User: joeynovak1
 * Date: 9/12/2018 AD
 * Time: 4:29 PM
 */

namespace NovakSolutions\Infusionsoft\Model;


use NovakSolutions\Infusionsoft\Enum\HookTypes;
use NovakSolutions\Infusionsoft\Registry;
use NovakSolutions\Infusionsoft\Service\HookService;
use NovakSolutions\Infusionsoft\SimpleConsoleLogger;
use PHPUnit\Framework\TestCase;

class HookTest extends TestCase
{
    public function setUp()
    {
        Registry::init();
        Registry::$logger->logLevel = SimpleConsoleLogger::DEBUG;
    }

    public function testUpdate(){
        $hook = new Hook();
        $hook->eventKey = HookTypes::APPOINTMENT_ADD;
        $hook->hookUrl = 'https://www.google.com';
        $hook->save();

        $retrievedHook = HookService::get($hook->key);

        $hook->hookUrl = 'https://www.altavista.com';
        $hook->save();

        $retrievedHook = HookService::get($hook->key);
        $this->assertEquals('https://www.altavista.com', $retrievedHook->hookUrl);

        $retrievedHook->delete();
    }

    public function testDelete(){
        $hook = new Hook();
        $hook->eventKey = HookTypes::APPOINTMENT_ADD;
        $hook->hookUrl = 'https://www.google.com';
        $hook->save();

        $retrievedHook = HookService::get($hook->key);
        $this->assertEquals($hook->key, $retrievedHook->key);

        $hooks = HookService::find();
        $hookCount = count($hooks);

        $retrievedHook->delete();

        $hooks = HookService::find();
        $this->assertEquals($hookCount - 1, count($hooks));

        //This should return null, but currently throws a 500 exception...
        $retrievedHook = HookService::get($hook->key);
    }

}