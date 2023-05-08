<?php
/**
 * We offer the best and most useful modules PrestaShop and modifications for your online store.
 *
 * We are experts and professionals in PrestaShop
 *
 * @author    PresTeamShop.com <support@presteamshop.com>
 * @copyright 2011-2020 PresTeamShop
 * @license   see file: LICENSE.txt
 * @category  PrestaShop
 * @category  Module
 */

function upgrade_module_4_0_7($object)
{
    $object->registerHook('actionObjectCartUpdateAfter');
    $object->registerHook('actionObjectCustomerAddressAddAfter');
    $object->registerHook('actionObjectCustomerAddressUpdateAfter');
    $object->registerHook('actionObjectCustomerAddressDeleteAfter');

    $object->unregisterHook('actionObjectAddressAddAfter');
    $object->unregisterHook('actionObjectAddressUpdateAfter');
    $object->unregisterHook('actionObjectAddressDeleteAfter');
        
    return true;
}
