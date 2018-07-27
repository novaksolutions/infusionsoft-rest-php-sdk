<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 7/23/18
 * Time: 7:31 PM
 */

namespace NovakSolutions\Infusionsoft\Service;

use NovakSolutions\Infusionsoft\Model\Contact;

class ContactEmailService extends Service
{
    use Traits\ListTrait;

    public static $endPoint = '/contacts/?/emails';
    public static $parameterToReplaceQuestionMark = 'contactId';
    public static $arrayKey = 'emails';
    public static $class = Email::class;

    //Yes, both contactId and contact_id...  Silly Infusionsoft
    protected static $findByFields = array(
        'contactId',
        'contact_id',
        'email'
    );
}