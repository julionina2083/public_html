<?php
/* Smarty version 3.1.48, created on 2023-05-07 22:40:43
  from '/home/ecsdcdwc/public_html/admin/themes/default/template/helpers/tree/tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6458612b294564_27317203',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a133fa887d09aae9f0490cd2579b58ccd0570bb3' => 
    array (
      0 => '/home/ecsdcdwc/public_html/admin/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1683513447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6458612b294564_27317203 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if ((isset($_smarty_tpl->tpl_vars['title']->value))) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['toolbar']->value))) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
