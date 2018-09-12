<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/23/18
 * Time: 7:31 PM
 */

namespace NovakSolutions\Infusionsoft\Service;

use NovakSolutions\Infusionsoft\Model\Contact;

class HookEventTypesService extends Service
{
    use Traits\ListTraitNoModel;

    public static $endPoint = '/hooks/event_keys';
}