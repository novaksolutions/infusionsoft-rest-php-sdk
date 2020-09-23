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
        $orders = OrderService::find([], 'id', null, 1);
        $this->assertArrayHasKey( 0, $orders);
    }

    /**
     * @throws \NovakSolutions\Infusionsoft\Exception\FindException
     * @throws \ReflectionException
     */
    public function testListWithCriteria(){
        $orders = OrderService::find(['paid' => true], 'id', null, 1);
        $this->assertArrayHasKey(0, $orders);
        $this->assertTrue($orders[0] instanceof Order);
    }
}