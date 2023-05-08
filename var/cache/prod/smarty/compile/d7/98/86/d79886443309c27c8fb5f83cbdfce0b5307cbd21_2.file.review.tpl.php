<?php
/* Smarty version 3.1.48, created on 2023-05-08 10:22:07
  from '/home/ecsdcdwc/public_html/modules/onepagecheckoutps/views/templates/front/steps/review.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6459139fb09d27_36633766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd79886443309c27c8fb5f83cbdfce0b5307cbd21' => 
    array (
      0 => '/home/ecsdcdwc/public_html/modules/onepagecheckoutps/views/templates/front/steps/review.tpl',
      1 => 1683553280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6459139fb09d27_36633766 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['register_customer']->value) {?>
    <div id="onepagecheckoutps_step_review_container" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['classes']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
        <h5 class="onepagecheckoutps_p_step onepagecheckoutps_p_step_four">
            <i class="fa-pts fa-pts-check fa-pts-2x"></i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order Summary','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>

        </h5>
        <div id="onepagecheckoutps_step_review"></div>
    </div>
<?php }
}
}
