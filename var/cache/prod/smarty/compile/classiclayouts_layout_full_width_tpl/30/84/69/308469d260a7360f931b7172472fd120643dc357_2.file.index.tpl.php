<?php
/* Smarty version 3.1.48, created on 2024-04-15 22:19:47
  from '/home/ecsdcdwc/public_html/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_661dee53679d54_91874687',
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
function content_661dee53679d54_91874687 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1846485161661dee536741c5_62621564', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_1641837943661dee53674b79_95652936 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1637047434661dee536764f5_94303222 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_229910805661dee53675dc5_67864522 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1637047434661dee536764f5_94303222', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1846485161661dee536741c5_62621564 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1846485161661dee536741c5_62621564',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1641837943661dee53674b79_95652936',
  ),
  'page_content' => 
  array (
    0 => 'Block_229910805661dee53675dc5_67864522',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1637047434661dee536764f5_94303222',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1641837943661dee53674b79_95652936', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_229910805661dee53675dc5_67864522', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
