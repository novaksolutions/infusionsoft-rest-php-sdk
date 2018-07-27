<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/23/18
 * Time: 7:30 PM
 */

namespace NovakSolutions\Infusionsoft\Service;
use NovakSolutions\Infusionsoft\Service\ContactService;
use PHPUnit\Framework\TestCase;

class ContactServiceTest extends TestCase
{
    public function setUp(){
        Registry::init();
    }
    public function testListWithOrderAndLimit(){
        $contacts = ContactService::find([], 'id', null, 1);

        var_dump($contacts);
        $this->assertArrayHasKey( 0, $contacts);
    }

    public function testListWithCriteria(){
        $contacts = ContactService::find(['email' => 'joey.novak@gmail.com'], 'id', null, 1);

        var_dump($contacts);
        $this->assertArrayHasKey(0, $contacts);
        $this->assertEquals(Contact::class, gettype($contacts[0]));
    }

    public function testCreate(){

    }
}