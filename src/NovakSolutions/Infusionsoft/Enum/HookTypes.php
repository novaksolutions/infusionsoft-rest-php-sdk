<?php
/**
 * Created by PhpStorm.
 * User: joey
 * Date: 9/12/18
 * Time: 12:08 AM
 */

namespace NovakSolutions\Infusionsoft\Enum;


class HookTypes
{
    const APPOINTMENT_ADD =         'appointment.add';
    const APPOINTMENT_DELETE =      'appointment.delete';
    const APPOINTMENT_EDIT =        'appointment.edit';
    const COMPANY_ADD =             'company.add';
    const COMPANY_DELETE =          'company.delete';
    const COMPANY_EDIT =            'company.edit';
    const CONTACT_ADD =             'contact.add';
    const CONTACT_DELETE =          'contact.delete';
    const CONTACT_EDIT =            'contact.edit';
    const CONTACT_REDACT =          'contact.redact';
    const CONTACTGROUP_ADD =        'contactGroup.add';
    const CONTACTGROUP_APPLIED =    'contactGroup.applied';
    const CONTACTGROUP_DELETE =     'contactGroup.delete';
    const CONTACTGROUP_EDIT =       'contactGroup.edit';
    const CONTACTGROUP_REMOVED =    'contactGroup.removed';
    const INVOICE_ADD =             'invoice.add';
    const INVOICE_DELETE =          'invoice.delete';
    const INVOICE_EDIT =            'invoice.edit';
    const INVOICE_PAYMENT_ADD =     'invoice.payment.add';
    const INVOICE_PAYMENT_DELETE =  'invoice.payment.delete';
    const INVOICE_PAYMENT_EDIT =    'invoice.payment.edit';
    const LEADSOURCE_ADD =          'leadsource.add';
    const LEADSOURCE_DELETE =       'leadsource.delete';
    const LEADSOURCE_EDIT =         'leadsource.edit';
    const NOTE_ADD =                'note.add';
    const NOTE_DELETE =             'note.delete';
    const NOTE_EDIT =               'note.edit';
    const OPPORTUNITY_ADD =         'opportunity.add';
    const OPPORTUNITY_DELETE =      'opportunity.delete';
    const OPPORTUNITY_EDIT =        'opportunity.edit';
    const OPPORTUNITY_STAGE_MOVE =  'opportunity.stage_move';
    const ORDER_ADD =               'order.add';
    const ORDER_DELETE =            'order.delete';
    const ORDER_EDIT =              'order.edit';
    const PRODUCT_ADD =             'product.add';
    const PRODUCT_DELETE =          'product.delete';
    const PRODUCT_EDIT =            'product.edit';
    const SUBSCRIPTION_ADD =        'subscription.add';
    const SUBSCRIPTION_DELETE =     'subscription.delete';
    const SUBSCRIPTION_EDIT =       'subscription.edit';
    const TASK_ADD =                'task.add';
    const TASK_DELETE =             'task.delete';
    const TASK_EDIT =               'task.edit';
    const USER_ACTIVATE =           'user.activate';
    const USER_ADD =                'user.add';
    const USER_EDIT =               'user.edit';
}