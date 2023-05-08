<?php
/* Smarty version 3.1.48, created on 2023-05-08 09:46:27
  from '/home/ecsdcdwc/public_html/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64590b43d11523_83132418',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '308469d260a7360f931b7172472fd120643dc357' => 
    array (
      0 => '/home/ecsdcdwc/public_html/themes/classic/templates/index.tpl',
      1 => 1683513448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64590b43d11523_83132418 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_99503844964590b43d0a447_95527145', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_139517542564590b43d0b3f9_71301656 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_55692588964590b43d0dae5_04967833 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_183404215264590b43d0ccb2_34395952 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55692588964590b43d0dae5_04967833', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_99503844964590b43d0a447_95527145 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_99503844964590b43d0a447_95527145',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_139517542564590b43d0b3f9_71301656',
  ),
  'page_content' => 
  array (
    0 => 'Block_183404215264590b43d0ccb2_34395952',
  ),
  'hook_home' => 
  array (
    0 => 'Block_55692588964590b43d0dae5_04967833',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139517542564590b43d0b3f9_71301656', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183404215264590b43d0ccb2_34395952', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
