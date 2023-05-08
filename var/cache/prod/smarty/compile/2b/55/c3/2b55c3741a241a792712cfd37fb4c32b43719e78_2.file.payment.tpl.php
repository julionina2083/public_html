<?php
/* Smarty version 3.1.48, created on 2023-05-08 10:22:10
  from '/home/ecsdcdwc/public_html/modules/onepagecheckoutps/views/templates/front/payment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_645913a2779536_71888023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b55c3741a241a792712cfd37fb4c32b43719e78' => 
    array (
      0 => '/home/ecsdcdwc/public_html/modules/onepagecheckoutps/views/templates/front/payment.tpl',
      1 => 1683553280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645913a2779536_71888023 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1734856184645913a273d265_24460544', 'step_payment');
}
/* {block 'step_payment'} */
class Block_1734856184645913a273d265_24460544 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'step_payment' => 
  array (
    0 => 'Block_1734856184645913a273d265_24460544',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['total_order']->value <= 0) {?>
        <span id="free_order" class="alert alert-warning col-xs-12 col-12 text-md-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Free Order.','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>
</span>
    <?php } else { ?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayPaymentTop'),$_smarty_tpl ) );?>


                <?php if ((isset($_smarty_tpl->tpl_vars['amazonpay_session_opc']->value))) {?>
            <?php echo $_smarty_tpl->tpl_vars['onepagecheckoutps']->value->includeTpl('modules/amazonpay.tpl',array());?>

        <?php }?>
        
        <div id="payment_method_container" class="payment-options">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['payment_options']->value, 'module_options', false, 'name_module');
$_smarty_tpl->tpl_vars['module_options']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name_module']->value => $_smarty_tpl->tpl_vars['module_options']->value) {
$_smarty_tpl->tpl_vars['module_options']->do_else = false;
?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['module_options']->value, 'option');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
                    <div class="module_payment_container">
                        <div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['id'], ENT_QUOTES, 'UTF-8');?>
-container" class="payment-option" for="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['action'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                            <div class="payment_input">
                                <input type="radio" id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['id'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" name="payment-option" class="payment_radio not_unifrom not_uniform" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name_module']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-module-name="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['module_name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-force-display="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['force_display'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                <input type="hidden" id="url_module_payment_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['id_module_payment'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['action'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                            </div>
                            <?php if (!empty($_smarty_tpl->tpl_vars['option']->value['logo']) && $_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_SHOW_IMAGE_PAYMENT']) {?>
                                <div class="payment_image">
                                    <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['logo'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['call_to_action_text'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="img-thumbnail <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name_module']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                </div>
                            <?php }?>
                            <div class="payment_content">
                                <span>
                                    <?php if ((isset($_smarty_tpl->tpl_vars['option']->value['title_opc']))) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['option']->value['title_opc'];?>

                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->tpl_vars['option']->value['call_to_action_text'];?>

                                    <?php }?>
                                </span>
                                <?php if ((isset($_smarty_tpl->tpl_vars['option']->value['description_opc']))) {?>
                                    <p>
                                        <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['description_opc'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                    </p>
                                <?php }?>
                            </div>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['option']->value['force_display'] == 0) {?>
                            <?php if ($_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_SHOW_DETAIL_PAYMENT'] || $_smarty_tpl->tpl_vars['name_module']->value == 'ps_checkout') {?>
                                <?php if ($_smarty_tpl->tpl_vars['option']->value['additionalInformation']) {?>
                                    <div id="payment_content_html_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['id'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="payment_content_html hidden">
                                        <?php echo $_smarty_tpl->tpl_vars['option']->value['additionalInformation'];?>

                                    </div>
                                <?php }?>
                            <?php }?>
                            <div
                                id="pay-with-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['id'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
-form"
                                class="js-payment-option-form <?php if ($_smarty_tpl->tpl_vars['option']->value['id'] != $_smarty_tpl->tpl_vars['selected_payment_option']->value) {?> ps-hidden <?php }?>"
                            >
                                <?php if ($_smarty_tpl->tpl_vars['option']->value['form']) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['option']->value['form'];?>

                                <?php } else { ?>
                                    <form id="payment-form" method="POST" action="<?php echo $_smarty_tpl->tpl_vars['option']->value['action'];?>
">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['option']->value['inputs'], 'input');
$_smarty_tpl->tpl_vars['input']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['input']->value) {
$_smarty_tpl->tpl_vars['input']->do_else = false;
?>
                                            <input type="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['type'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input']->value['value'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        <button style="display:none" id="pay-with-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['option']->value['id'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" type="submit"></button>
                                    </form>
                                <?php }?>
                            </div>
                        <?php }?>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
}
if ($_smarty_tpl->tpl_vars['module_options']->do_else) {
?>
                <p class="alert alert-danger">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Unfortunately, there are no payment method available.','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>

                </p>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayPaymentByBinaries'),$_smarty_tpl ) );?>

    <?php }
}
}
/* {/block 'step_payment'} */
}
