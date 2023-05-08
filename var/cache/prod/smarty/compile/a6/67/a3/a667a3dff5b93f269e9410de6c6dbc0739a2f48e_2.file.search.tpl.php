<?php
/* Smarty version 3.1.48, created on 2023-05-07 22:46:07
  from '/home/ecsdcdwc/public_html/themes/classic/templates/catalog/listing/search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6458626f2b7929_98580371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a667a3dff5b93f269e9410de6c6dbc0739a2f48e' => 
    array (
      0 => '/home/ecsdcdwc/public_html/themes/classic/templates/catalog/listing/search.tpl',
      1 => 1683513448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products.tpl' => 1,
  ),
),false)) {
function content_6458626f2b7929_98580371 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13006775596458626f2b51f5_63077785', "error_content");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2032772826458626f2b6726_81367136', 'product_list');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block "error_content"} */
class Block_13006775596458626f2b51f5_63077785 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'error_content' => 
  array (
    0 => 'Block_13006775596458626f2b51f5_63077785',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No matches were found for your search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h4>
  <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please try other keywords to describe what you are looking for.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
<?php
}
}
/* {/block "error_content"} */
/* {block 'product_list'} */
class Block_2032772826458626f2b6726_81367136 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list' => 
  array (
    0 => 'Block_2032772826458626f2b6726_81367136',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'productClass'=>"col-xs-12 col-sm-6 col-xl-3"), 0, false);
}
}
/* {/block 'product_list'} */
}
