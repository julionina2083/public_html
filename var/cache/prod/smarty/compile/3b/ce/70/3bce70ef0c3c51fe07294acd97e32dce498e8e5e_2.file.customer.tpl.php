<?php
/* Smarty version 3.1.48, created on 2024-03-11 13:34:59
  from '/home/ecsdcdwc/public_html/modules/onepagecheckoutps/views/templates/front/steps/customer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_65ef4ed3e722e0_05896066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3bce70ef0c3c51fe07294acd97e32dce498e8e5e' => 
    array (
      0 => '/home/ecsdcdwc/public_html/modules/onepagecheckoutps/views/templates/front/steps/customer.tpl',
      1 => 1683553280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./../address.tpl' => 1,
  ),
),false)) {
function content_65ef4ed3e722e0_05896066 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="onepagecheckoutps_step_one_container" class="<?php if (!$_smarty_tpl->tpl_vars['register_customer']->value) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['classes']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>col-xs-12 col-12<?php }?>">
    <div id="onepagecheckoutps_step_one">
        <?php $_smarty_tpl->_subTemplateRender("file:./../address.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div><?php }
}
