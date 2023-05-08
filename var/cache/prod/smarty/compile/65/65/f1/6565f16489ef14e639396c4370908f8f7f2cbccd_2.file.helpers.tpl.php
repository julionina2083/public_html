<?php
/* Smarty version 3.1.48, created on 2023-05-07 22:46:06
  from '/home/ecsdcdwc/public_html/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6458626edf7fd8_88987191',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6565f16489ef14e639396c4370908f8f7f2cbccd' => 
    array (
      0 => '/home/ecsdcdwc/public_html/themes/classic/templates/_partials/helpers.tpl',
      1 => 1683513448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6458626edf7fd8_88987191 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/home/ecsdcdwc/public_html/var/cache/prod/smarty/compile/65/65/f1/6565f16489ef14e639396c4370908f8f7f2cbccd_2.file.helpers.tpl.php',
    'uid' => '6565f16489ef14e639396c4370908f8f7f2cbccd',
    'call_name' => 'smarty_template_function_renderLogo_17953858936458626edef197_11969845',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_17953858936458626edef197_11969845 */
if (!function_exists('smarty_template_function_renderLogo_17953858936458626edef197_11969845')) {
function smarty_template_function_renderLogo_17953858936458626edef197_11969845(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_17953858936458626edef197_11969845 */
}
