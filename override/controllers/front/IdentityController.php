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
class IdentityController extends IdentityControllerCore
{
    /*
    * module: onepagecheckoutps
    * date: 2023-05-08 08:41:40
    * version: 4.0.12
    */
    public $onepagecheckoutps;
    /*
    * module: onepagecheckoutps
    * date: 2023-05-08 08:41:40
    * version: 4.0.12
    */
    public function init()
    {
        if (Module::isInstalled('onepagecheckoutps')) {
            $opc = Module::getInstanceByName('onepagecheckoutps');
            if (Validate::isLoadedObject($opc) && $opc->active) {
                if ($opc->core->isVisible()) {
                    if ($opc->config_vars['OPC_REPLACE_IDENTITY_CONTROLLER']) {
                        $this->onepagecheckoutps = $opc;
                    }
                }
            }
        }
        parent::init();
    }
    /*
    * module: onepagecheckoutps
    * date: 2023-05-08 08:41:40
    * version: 4.0.12
    */
    public function initContent()
    {
        parent::initContent();
        if (Validate::isLoadedObject($this->onepagecheckoutps)) {
            $this->onepagecheckoutps->initContentRegisterControllerOPC($this, $this->context->controller->php_self);
        }
    }
    /*
    * module: onepagecheckoutps
    * date: 2023-05-08 08:41:40
    * version: 4.0.12
    */
    public function setMedia()
    {
        parent::setMedia();
        if (Validate::isLoadedObject($this->onepagecheckoutps)) {
            $this->onepagecheckoutps->getMediaFront();
        }
    }
}
