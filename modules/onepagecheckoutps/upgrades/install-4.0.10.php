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

function upgrade_module_4_0_10($module)
{
    $sql = 'DELETE FROM `'._DB_PREFIX_.'configuration` WHERE name = "'.$module->prefix_module.'_VERSION" AND id_shop IS NOT NULL AND id_shop_group IS NOT NULL';
    if (!Db::getInstance()->execute($sql)) {
        return false;
    }
    return true;
}
