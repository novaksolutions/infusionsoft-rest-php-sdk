<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/23/18
 * Time: 7:30 PM
 */

namespace NovakSolutions\Infusionsoft\Service;
use NovakSolutions\Infusionsoft\Registry;
use PHPUnit\Framework\TestCase;

class ContactEmailServiceTest extends TestCase
{
    public function setUp(){
        Registry::init();
    }
    public function testList(){
        $emails = ContactEmailService::find(['contactId' => '91918']);

        var_dump($emails);
    }
}