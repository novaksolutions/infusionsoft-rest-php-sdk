<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/23/18
 * Time: 7:31 PM
 */

namespace NovakSolutions\Infusionsoft\Service;

use NovakSolutions\Infusionsoft\Model\Campaign;
use NovakSolutions\Infusionsoft\Registry;
use NovakSolutions\Infusionsoft\Service\Traits\RetrieveTrait;
use NovakSolutions\Infusionsoft\WebRequestResult;

class CampaignService extends Service
{
    use Traits\ListTraitWithOrderBy;
    use Traits\RetrieveTrait;
//    use Traits\CreateTrait; -- not setup to use Create yet, but the Model should work with Create with a few adjustments to only include certain fields when Creating

    public static $endPoint = '/campaigns';
    public static $arrayKey = 'campaigns';
    public static $class = Campaign::class;

    protected static $findByFields = array(
        'name',
        'published_date',
        'id',
        'completed_contact_count',
        'active_contact_count',
        'date_created',
    );

    public static function achieveApiGoal($integration, $callName, $contactId, $accessToken = null){
        $url = static::$endPoint . '/goals/' . $integration . '/' . $callName;
        $body = [
            'contact_id' => $contactId,
        ];
        //Make Call...
        /** @var WebRequestResult $result */
        $result = Registry::$WebRequester->request($url, 'POST', json_encode($body), $accessToken);
        static::throwExceptionIfError($result);

        return $result;
    }

}