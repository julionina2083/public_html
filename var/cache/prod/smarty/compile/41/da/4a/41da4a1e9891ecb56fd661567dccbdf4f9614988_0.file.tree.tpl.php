<?php
/* Smarty version 3.1.48, created on 2023-05-07 22:40:43
  from '/home/ecsdcdwc/public_html/admin/themes/default/template/helpers/tree/tree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6458612b246f47_85924728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41da4a1e9891ecb56fd661567dccbdf4f9614988' => 
    array (
      0 => '/home/ecsdcdwc/public_html/admin/themes/default/template/helpers/tree/tree.tpl',
      1 => 1683513447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6458612b246f47_85924728 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel">
	<?php if ((isset($_smarty_tpl->tpl_vars['header']->value))) {
echo $_smarty_tpl->tpl_vars['header']->value;
}?>
	<?php if ((isset($_smarty_tpl->tpl_vars['nodes']->value))) {?>
	<ul id="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' ));?>
" class="tree">
		<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

	</ul>
	<?php }?>
</div>
<?php }
}
