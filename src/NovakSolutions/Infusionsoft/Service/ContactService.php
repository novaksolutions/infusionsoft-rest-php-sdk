<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/23/18
 * Time: 7:31 PM
 */

namespace NovakSolutions\Infusionsoft\Service;

use NovakSolutions\Infusionsoft\Model\Contact;

class ContactService extends Service
{
    use Traits\ListTraitWithOrderBy;
    use Traits\CreateTrait;
    use Traits\RetrieveTrait;

    public static $endPoint = '/contacts';
    public static $arrayKey = 'contacts';
    public static $class = Contact::class;

    protected static $findByFields = array(
        'given_name',
        'family_name',
        'email'
    );

    public static function findEmailsForContact($contactId, $email, $limit, $offset){
        return ContactEmailService::find([], $limit, $offset);
    }
}