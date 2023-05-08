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
class AddressController extends AddressControllerCore
{
    /*
    * module: onepagecheckoutps
    * date: 2023-05-08 08:41:39
    * version: 4.0.12
    */
    public function init()
    {
        if (Module::isInstalled('onepagecheckoutps')) {
            $opc = Module::getInstanceByName('onepagecheckoutps');
            if (Validate::isLoadedObject($opc) && $opc->active) {
                if ($opc->core->isVisible()) {
                    if ($opc->config_vars['OPC_REPLACE_ADDRESSES_CONTROLLER']) {
                        $addresses = $this->context->link->getPageLink('addresses');
                        Tools::redirect($addresses);
                    }
                }
            }
        }
        parent::init();
    }
}
