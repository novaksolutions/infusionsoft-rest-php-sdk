<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/26/18
 * Time: 12:53 PM
 */

class ModelTest extends \PHPUnit\Framework\TestCase
{
    public function testToArray(){
        $contact = new \NovakSolutions\Infusionsoft\Model\Contact();
        $contact->addresses = [];
        $address1 = new \NovakSolutions\Infusionsoft\Model\Address();
        $address1->street = "123";

        $contact->addresses[] = $address1;

        $address2 = new \NovakSolutions\Infusionsoft\Model\Address();
        $address2->street = "456";
        $contact->addresses[] = $address2;

        $array = $contact->toArray();
        $this->assertTrue(is_array($array));
        $this->assertCount(2, $array['addresses']);
    }

    public function testFromArray(){
        $data = [
            'addresses' => [
                [
                    'street' => '3_123'
                ]
            ]
        ];

        $contact = new \NovakSolutions\Infusionsoft\Model\Contact($data);

        $toArray = $contact->toArray();
        $this->assertEquals(json_encode($data), json_encode($toArray));
    }
}