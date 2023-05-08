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

function upgrade_module_4_0_11($object)
{
    $object = $object;
    
    $sql = 'UPDATE `'._DB_PREFIX_.'opc_field` SET `type` = "isCustomerName" WHERE `id_field` = 2';
    if (!Db::getInstance()->execute($sql)) {
        return false;
    }

    $sql = 'UPDATE `'._DB_PREFIX_.'opc_field` SET `type` = "isCustomerName" WHERE `id_field` = 3';
    if (!Db::getInstance()->execute($sql)) {
        return false;
    }
        
    return true;
}
