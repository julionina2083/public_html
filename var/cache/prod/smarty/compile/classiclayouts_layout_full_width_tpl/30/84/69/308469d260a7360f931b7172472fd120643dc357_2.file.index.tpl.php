<?php
/* Smarty version 3.1.48, created on 2023-11-13 16:05:04
  from '/home/ecsdcdwc/public_html/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_65528f80779433_25658296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '308469d260a7360f931b7172472fd120643dc357' => 
    array (
      0 => '/home/ecsdcdwc/public_html/themes/classic/templates/index.tpl',
      1 => 1683585098,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65528f80779433_25658296 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_194584900765528f80771785_21638069', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_196911950965528f80771fb5_87848434 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_136265121365528f807732a8_69481872 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_82992443965528f80772d99_38110518 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136265121365528f807732a8_69481872', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_194584900765528f80771785_21638069 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_194584900765528f80771785_21638069',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_196911950965528f80771fb5_87848434',
  ),
  'page_content' => 
  array (
    0 => 'Block_82992443965528f80772d99_38110518',
  ),
  'hook_home' => 
  array (
    0 => 'Block_136265121365528f807732a8_69481872',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_196911950965528f80771fb5_87848434', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82992443965528f80772d99_38110518', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
