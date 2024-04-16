<?php
/* Smarty version 3.1.48, created on 2024-04-15 22:19:49
  from '/home/ecsdcdwc/public_html/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_661dee55e52ea3_56687601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb11d1e6bf8e426c7591c764c82fd052295f0512' => 
    array (
      0 => '/home/ecsdcdwc/public_html/themes/classic/templates/page.tpl',
      1 => 1699801459,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661dee55e52ea3_56687601 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_295997700661dee55e4a120_82575074', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_2006314248661dee55e4b8f2_27493310 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_851758314661dee55e4acc0_31153628 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2006314248661dee55e4b8f2_27493310', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1938227320661dee55e4eb50_59546175 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_1704043677661dee55e4f8c5_67409436 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_993969387661dee55e4e094_92473274 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1938227320661dee55e4eb50_59546175', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1704043677661dee55e4f8c5_67409436', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_182748101661dee55e51523_31155668 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_1248541402661dee55e50cd2_28618080 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182748101661dee55e51523_31155668', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_295997700661dee55e4a120_82575074 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_295997700661dee55e4a120_82575074',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_851758314661dee55e4acc0_31153628',
  ),
  'page_title' => 
  array (
    0 => 'Block_2006314248661dee55e4b8f2_27493310',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_993969387661dee55e4e094_92473274',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1938227320661dee55e4eb50_59546175',
  ),
  'page_content' => 
  array (
    0 => 'Block_1704043677661dee55e4f8c5_67409436',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_1248541402661dee55e50cd2_28618080',
  ),
  'page_footer' => 
  array (
    0 => 'Block_182748101661dee55e51523_31155668',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_851758314661dee55e4acc0_31153628', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_993969387661dee55e4e094_92473274', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1248541402661dee55e50cd2_28618080', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
