<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/23/18
 * Time: 7:30 PM
 */

namespace NovakSolutions\Infusionsoft\Service;
use NovakSolutions\Infusionsoft\Model\Contact;
use NovakSolutions\Infusionsoft\Model\EmailAddress;
use NovakSolutions\Infusionsoft\Registry;
use PHPUnit\Framework\TestCase;

class ContactServiceTest extends TestCase
{
    public function setUp(){
        Registry::init();
    }

    /**
     * @throws \NovakSolutions\Infusionsoft\Exception\FindException
     * @throws \ReflectionException
     */
    public function testListWithOrderAndLimit(){
        $contacts = ContactService::find([], 'id', null, 1);
        $this->assertArrayHasKey( 0, $contacts);
    }

    /**
     * @throws \NovakSolutions\Infusionsoft\Exception\FindException
     * @throws \ReflectionException
     */
    public function testListWithCriteria(){
        $contacts = ContactService::find(['email' => 'joey.novak@gmail.com'], 'id', null, 1);
        $this->assertArrayHasKey(0, $contacts);
        $this->assertTrue($contacts[0] instanceof Contact);
    }

    public function testCreate(){
        $contact = new Contact();
        $contact->email_addresses = [new EmailAddress(['email' => 'joey.novak@gmail.com', 'field' => 'EMAIL1'])];
        $contact->birthday = new \DateTime();
        $contact->save();

        $this->assertTrue($contact->id >= 0);
    }
}