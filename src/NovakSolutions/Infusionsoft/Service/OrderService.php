<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/23/18
 * Time: 7:31 PM
 */

namespace NovakSolutions\Infusionsoft\Service;

use NovakSolutions\Infusionsoft\Model\Order;
use NovakSolutions\Infusionsoft\Model\PaymentPlan;
use NovakSolutions\Infusionsoft\Registry;
use NovakSolutions\Infusionsoft\WebRequestResult;

class OrderService extends Service
{
    use Traits\ListTraitWithOrderBy;
//    use Traits\CreateTrait; -- not setup to use Create yet, but the Model should work with Create with a few adjustments to only include certain fields when Creating

    public static $endPoint = '/orders';
    public static $arrayKey = 'orders';
    public static $class = Order::class;

    protected static $findByFields = array(
        'paid',
        'contact_id',
        'product_id',
    );

    public static function replaceOrderPayPlan($orderId, PaymentPlan $paymentPlan, $accessToken = null){
        $url = static::$endPoint . '/' . $orderId . '/paymentPlan';

        //Make Call...
        /** @var WebRequestResult $result */
        $result = Registry::$WebRequester->request($url, 'PUT', json_encode($paymentPlan), $accessToken);
        static::throwExceptionIfError($result);

        return true;
    }
}