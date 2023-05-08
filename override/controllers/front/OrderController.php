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
use PrestaShop\PrestaShop\Core\Foundation\Templating\RenderableProxy;
use PrestaShop\PrestaShop\Adapter\Product\PriceFormatter;
use PrestaShop\PrestaShop\Adapter\Cart\CartPresenter;
class OrderController extends OrderControllerCore
{
    /*
    * module: onepagecheckoutps
    * date: 2023-05-08 08:41:39
    * version: 4.0.12
    */
    public $checkoutDeliveryStep;
    /*
    * module: onepagecheckoutps
    * date: 2023-05-08 08:41:39
    * version: 4.0.12
    */
    public $opc;
    /*
    * module: onepagecheckoutps
    * date: 2023-05-08 08:41:39
    * version: 4.0.12
    */
    public $is_active_module;
    /*
    * module: onepagecheckoutps
    * date: 2023-05-08 08:41:39
    * version: 4.0.12
    */
    public function init()
    {
        
        $this->opc = Module::getInstanceByName('onepagecheckoutps');
        $this->opc->initBeforeControllerOPC($this);
        parent::init();
        if (Validate::isLoadedObject($this->opc)
            && $this->opc->core->isModuleActive($this->opc->name)
        ) {
            $this->is_active_module = true;
        } else {
            $this->is_active_module = false;
        }
        if (!$this->opc->core->checkModulePTS()) {
            $this->is_active_module = false;
        }
        if (!$this->opc->core->isVisible()) {
            $this->is_active_module = false;
        }
        if (!$this->is_active_module) {
            return;
        }
        $this->opc->initAfterControllerOPC($this);
        $this->assignGeneralPurposeVariables();
    }
    /*
    * module: onepagecheckoutps
    * date: 2023-05-08 08:41:39
    * version: 4.0.12
    */
    public function initContent()
    {
        parent::initContent();
        if (!$this->is_active_module) {
            return;
        }
        $this->opc->initContentControllerOPC($this);
    }
    /*
    * module: onepagecheckoutps
    * date: 2023-05-08 08:41:39
    * version: 4.0.12
    */
    public function getCheckoutSession()
    {
        $deliveryOptionsFinder = new DeliveryOptionsFinder(
            $this->context,
            $this->getTranslator(),
            $this->objectPresenter,
            new PriceFormatter()
        );
        $session = new CheckoutSession(
            $this->context,
            $deliveryOptionsFinder
        );
        return $session;
    }
    /*
    * module: onepagecheckoutps
    * date: 2023-05-08 08:41:39
    * version: 4.0.12
    */
    protected function bootstrap()
    {
        $translator = $this->getTranslator();
        $session = $this->getCheckoutSession();
        $this->checkoutProcess = new CheckoutProcess(
            $this->context,
            $session
        );
        $this->checkoutDeliveryStep = new CheckoutDeliveryStep(
            $this->context,
            $translator
        );
        $this->checkoutDeliveryStep
            ->setRecyclablePackAllowed((bool) Configuration::get('PS_RECYCLABLE_PACK'))
            ->setGiftAllowed((bool) Configuration::get('PS_GIFT_WRAPPING'))
            ->setIncludeTaxes(
                !Product::getTaxCalculationMethod((int) $this->context->cart->id_customer)
                && (int) Configuration::get('PS_TAX')
            )
            ->setDisplayTaxesLabel((Configuration::get('PS_TAX') && !Configuration::get('AEUC_LABEL_TAX_INC_EXC')))
            ->setGiftCost(
                $this->context->cart->getGiftWrappingPrice(
                    $this->checkoutDeliveryStep->getIncludeTaxes()
                )
            );
        $this->checkoutProcess
            ->addStep(new CheckoutPersonalInformationStep(
                $this->context,
                $translator,
                $this->makeLoginForm(),
                $this->makeCustomerForm()
            ))
            ->addStep(new CheckoutAddressesStep(
                $this->context,
                $translator,
                $this->makeAddressForm()
            ))
            ->addStep($this->checkoutDeliveryStep)
            ->addStep(new CheckoutPaymentStep(
                $this->context,
                $translator,
                new PaymentOptionsFinder(),
                new ConditionsToApproveFinder(
                    $this->context,
                    $translator
                )
            ));
        if ($this->is_active_module) {
            foreach ($this->checkoutProcess->getSteps() as $step) {
                $step->setReachable(true)->setComplete(true)->setCurrent(true);
            }
        }
        if (Module::isEnabled('quantitydiscountpro') && Tools::getValue('action') == 'updateCarrier') {
            include_once(_PS_MODULE_DIR_.'quantitydiscountpro/quantitydiscountpro.php');
            $quantityDiscount = new QuantityDiscountRule();
            $quantityDiscount->createAndRemoveRules();
        }
    }
    /*
    * module: onepagecheckoutps
    * date: 2023-05-08 08:41:39
    * version: 4.0.12
    */
    public function updateCarrier()
    {
        $this->opc->updateCarrierBeforeControllerOPC($this);
        $this->checkoutDeliveryStep->handleRequest(Tools::getAllValues());
        $this->opc->updateCarrierControllerOPC($this);
    }
    /*
    * module: onepagecheckoutps
    * date: 2023-05-08 08:41:39
    * version: 4.0.12
    */
    public function postProcess()
    {
        if (Tools::isSubmit('submitCreate') &&
            Module::isInstalled('recaptcha') &&
            Module::isEnabled('recaptcha') &&
            Configuration::get('CAPTCHA_ENABLE_ACCOUNT')) {
            require_once(_PS_ROOT_DIR_.'/modules/recaptcha/recaptcha.php');
            $recaptcha = new Recaptcha();
            $recaptcha->validateCaptcha();
            if (!empty($this->errors)) {
                unset($_POST['password']);
            }
        }
        parent::postProcess();
        $this->bootstrap();
        if (!$this->is_active_module) {
            return;
        }
        $this->opc->postProcessControllerOPC($this);
    }
}
