<?php
/* Smarty version 3.1.48, created on 2024-04-15 22:01:43
  from '/home/ecsdcdwc/public_html/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_661dea177e0fc8_80763825',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1dd26455515588fd28b076e09d458b8c2366e43c' => 
    array (
      0 => '/home/ecsdcdwc/public_html/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1683513448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661dea177e0fc8_80763825 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info js-product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
