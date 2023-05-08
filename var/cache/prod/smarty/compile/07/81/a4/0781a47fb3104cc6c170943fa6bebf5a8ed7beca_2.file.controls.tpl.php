<?php
/* Smarty version 3.1.48, created on 2023-05-08 10:22:07
  from '/home/ecsdcdwc/public_html/modules/onepagecheckoutps/views/templates/front/controls.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6459139faaa100_17693394',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0781a47fb3104cc6c170943fa6bebf5a8ed7beca' => 
    array (
      0 => '/home/ecsdcdwc/public_html/modules/onepagecheckoutps/views/templates/front/controls.tpl',
      1 => 1683553280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6459139faaa100_17693394 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/home/ecsdcdwc/public_html/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),));
?>

<?php echo smarty_function_math(array('assign'=>'num_col','equation'=>'12/a','a'=>$_smarty_tpl->tpl_vars['cant_fields']->value),$_smarty_tpl);?>


<div id="field_<?php if ($_smarty_tpl->tpl_vars['field']->value->object != '') {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value->object,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
_<?php }
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value->name,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
     class="form-group col-xs-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['num_col']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 col-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['num_col']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['field']->value->required) {?>required<?php }?> <?php if ($_smarty_tpl->tpl_vars['cant_fields']->value == 1) {?>clear clearfix<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['field']->value->type_control == $_smarty_tpl->tpl_vars['OPC_GLOBALS']->value->type_control->textbox) {?>
        <label for="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value->name_control,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
            <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value->description,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
:
            <sup><?php if ($_smarty_tpl->tpl_vars['field']->value->required) {?>*<?php }?></sup>
        </label>
        <input
            id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value->id_control,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
            name="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value->name_control,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
            type="<?php if ($_smarty_tpl->tpl_vars['OPC_GLOBALS']->value->type->{$_smarty_tpl->tpl_vars['field']->value->type} == 'password' || $_smarty_tpl->tpl_vars['field']->value->name == 'conf_passwd') {?>password<?php } elseif ($_smarty_tpl->tpl_vars['OPC_GLOBALS']->value->type->{$_smarty_tpl->tpl_vars['field']->value->type} == 'email' || $_smarty_tpl->tpl_vars['field']->value->name_control == 'email') {?>email<?php } else { ?>text<?php }?>"
            class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value->classes,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 form-control input-sm not_unifrom not_uniform <?php if ($_smarty_tpl->tpl_vars['field']->value->is_custom) {?>custom_field<?php }?> <?php if ($_smarty_tpl->tpl_vars['field']->value->capitalize) {?>capitalize<?php }?>"
            data-field-name="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value->name,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
            data-validation="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value->type,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['field']->value->size != 0 && $_smarty_tpl->tpl_vars['OPC_GLOBALS']->value->type->{$_smarty_tpl->tpl_vars['field']->value->type} == 'string') {?>,length<?php }?> <?php if ($_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_VALIDATE_DNI'] && $_smarty_tpl->tpl_vars['field']->value->name == 'dni') {?>isValidIdByCountry<?php }?>"
            data-default-value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value->default_value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
            data-required="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['field']->value->required), ENT_QUOTES, 'UTF-8');?>
"
            data-active="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['field']->value->active), ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['field']->value->name == 'address' && $_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_AUTOCOMPLETE_GOOGLE_ADDRESS']) {?>
                autocomplete="off"
            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value->name == 'conf_passwd' || $_smarty_tpl->tpl_vars['field']->value->name == 'passwd') {?>
                autocomplete="new-password"
            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value->name == 'current_passwd') {?>
                autocomplete="current-password"
            <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['field']->value->required) {?>data-validation-optional="true"<?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['field']->value->error_message)) && $_smarty_tpl->tpl_vars['field']->value->error_message != '') {?>data-validation-error-msg="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value->error_message,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            <?php if (in_array($_smarty_tpl->tpl_vars['OPC_GLOBALS']->value->type->{$_smarty_tpl->tpl_vars['field']->value->type},array('string','integer','text'))) {?>data-validation-length="max<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['field']->value->size), ENT_QUOTES, 'UTF-8');?>
" maxlength="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['field']->value->size), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['field']->value->value)) {?>value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
        />
        <?php if ($_smarty_tpl->tpl_vars['field']->value->label != '') {?>
            <em><?php echo $_smarty_tpl->tpl_vars['field']->value->label;?>
</em>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value->type_control == $_smarty_tpl->tpl_vars['OPC_GLOBALS']->value->type_control->select) {?>
        <label for="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value->name_control,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
            <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value->description,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
:
            <sup><?php if ($_smarty_tpl->tpl_vars['field']->value->required) {?>*<?php }?></sup>
        </label>
        <select
            id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value->id_control,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
            name="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value->name_control,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
            class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value->classes,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 form-control input-sm not_unifrom not_uniform <?php if ($_smarty_tpl->tpl_vars['field']->value->is_custom) {?>custom_field<?php }?>"
            data-field-name="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value->name,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
            data-default-value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value->default_value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
            data-required="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['field']->value->required), ENT_QUOTES, 'UTF-8');?>
"
            <?php if ($_smarty_tpl->tpl_vars['field']->value->required) {?>data-validation="required"<?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['field']->value->error_message)) && $_smarty_tpl->tpl_vars['field']->value->error_message != '') {?>data-validation-error-msg="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value->error_message,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
            <?php if ((isset($_smarty_tpl->tpl_vars['field']->value->options['empty_option'])) && $_smarty_tpl->tpl_vars['field']->value->options['empty_option']) {?>
                <option value="" data-text="" <?php if ($_smarty_tpl->tpl_vars['field']->value->default_value == '' || (!(isset($_smarty_tpl->tpl_vars['field']->value->options['data'])) && count($_smarty_tpl->tpl_vars['field']->value->options['data']))) {?>selected<?php }?>>
                    <?php if ($_smarty_tpl->tpl_vars['field']->value->name_control == 'delivery_id' || $_smarty_tpl->tpl_vars['field']->value->name_control == 'invoice_id') {?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Create a new address','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>
....
                    <?php } else { ?>
                        --
                    <?php }?>
                </option>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['field']->value->options['data']))) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value->options['data'], 'item', false, NULL, 'f_options', array (
  'total' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <option
                        value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['field']->value->options['value']],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                        data-text="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['field']->value->options['description']],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                        <?php if ($_smarty_tpl->tpl_vars['field']->value->name == 'id_country') {?>data-iso-code="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value['iso_code'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['field']->value->default_value == $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['field']->value->options['value']]) {?>selected<?php }?>>
                            <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['field']->value->options['description']],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                    </option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        </select>
        <?php if ($_smarty_tpl->tpl_vars['field']->value->label != '') {?>
            <em><?php echo $_smarty_tpl->tpl_vars['field']->value->label;?>
</em>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value->type_control == $_smarty_tpl->tpl_vars['OPC_GLOBALS']->value->type_control->checkbox) {?>
        <label for="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value->name_control,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
            <input
                id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value->id_control,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                name="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value->name_control,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                type="checkbox"
                class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value->classes,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 not_unifrom not_uniform <?php if ($_smarty_tpl->tpl_vars['field']->value->is_custom) {?>custom_field<?php }?>"
                <?php if ($_smarty_tpl->tpl_vars['field']->value->default_value) {?>checked<?php }?>
                data-field-name="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value->name,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                data-default-value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value->default_value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                data-required="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['field']->value->required), ENT_QUOTES, 'UTF-8');?>
"
                <?php if (!$_smarty_tpl->tpl_vars['field']->value->required) {?>data-validation-optional="true"<?php } else { ?>data-validation="required"<?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['field']->value->error_message)) && $_smarty_tpl->tpl_vars['field']->value->error_message != '') {?>data-validation-error-msg="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value->error_message,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            />
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value->description, ENT_QUOTES, 'UTF-8');?>

            <sup><?php if ($_smarty_tpl->tpl_vars['field']->value->required) {?>*<?php }?></sup>
        </label>
        <?php if ($_smarty_tpl->tpl_vars['field']->value->label != '') {?>
            <em><?php echo $_smarty_tpl->tpl_vars['field']->value->label;?>
</em>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value->type_control == $_smarty_tpl->tpl_vars['OPC_GLOBALS']->value->type_control->radio) {?>
        <label class="label-for-radio">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value->description, ENT_QUOTES, 'UTF-8');?>
:
            <sup><?php if ($_smarty_tpl->tpl_vars['field']->value->required) {?>*<?php }?></sup>
        </label>
        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value->options['data'], 'item', false, NULL, 'f_options', array (
  'total' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                <?php echo smarty_function_math(array('assign'=>'num_col_option','equation'=>'12/a','a'=>(isset($_smarty_tpl->tpl_vars['__smarty_foreach_f_options']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_f_options']->value['total'] : null)),$_smarty_tpl);?>

                <div class="col-xs-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num_col_option']->value, ENT_QUOTES, 'UTF-8');?>
 col-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['num_col_option']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value->name_control, ENT_QUOTES, 'UTF-8');?>
">
                        <input
                            id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value->id_control, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['field']->value->options['value']], ENT_QUOTES, 'UTF-8');?>
"
                            name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value->name, ENT_QUOTES, 'UTF-8');?>
"
                            type="radio"
                            class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value->classes, ENT_QUOTES, 'UTF-8');?>
 not_unifrom not_uniform <?php if ($_smarty_tpl->tpl_vars['field']->value->is_custom) {?>custom_field<?php }?>"
                            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['field']->value->options['value']], ENT_QUOTES, 'UTF-8');?>
"
                            <?php if ($_smarty_tpl->tpl_vars['field']->value->default_value == $_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['field']->value->options['value']]) {?>checked<?php }?>
                            data-field-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value->name, ENT_QUOTES, 'UTF-8');?>
"
                            data-required="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['field']->value->required), ENT_QUOTES, 'UTF-8');?>
"
                        />
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value[$_smarty_tpl->tpl_vars['field']->value->options['description']], ENT_QUOTES, 'UTF-8');?>

                    </label>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['field']->value->label != '') {?>
            <em><?php echo $_smarty_tpl->tpl_vars['field']->value->label;?>
</em>
        <?php }?>
    <?php } elseif ($_smarty_tpl->tpl_vars['field']->value->type_control == $_smarty_tpl->tpl_vars['OPC_GLOBALS']->value->type_control->textarea) {?>
        <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value->name_control, ENT_QUOTES, 'UTF-8');?>
">
            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value->description, ENT_QUOTES, 'UTF-8');?>
:
            <sup><?php if ($_smarty_tpl->tpl_vars['field']->value->required) {?>*<?php }?></sup>
        </label>
        <textarea
            id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value->id_control, ENT_QUOTES, 'UTF-8');?>
"
            name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value->name_control, ENT_QUOTES, 'UTF-8');?>
"
            class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value->classes, ENT_QUOTES, 'UTF-8');?>
 form-control input-sm not_unifrom not_uniform <?php if ($_smarty_tpl->tpl_vars['field']->value->is_custom) {?>custom_field<?php }?>"
            data-field-name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value->name, ENT_QUOTES, 'UTF-8');?>
"
            data-validation="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value->type, ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['field']->value->size != 0) {?>,length<?php }?>"
            data-default-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value->default_value, ENT_QUOTES, 'UTF-8');?>
"
            data-required="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['field']->value->required), ENT_QUOTES, 'UTF-8');?>
"
            <?php if (!$_smarty_tpl->tpl_vars['field']->value->required) {?>data-validation-optional="true"<?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['field']->value->error_message)) && $_smarty_tpl->tpl_vars['field']->value->error_message != '') {?>data-validation-error-msg="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value->error_message, ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            <?php if (in_array($_smarty_tpl->tpl_vars['OPC_GLOBALS']->value->type->{$_smarty_tpl->tpl_vars['field']->value->type},array('string','integer','text'))) {?>data-validation-length="max<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['field']->value->size), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
            ></textarea>
        <?php if ($_smarty_tpl->tpl_vars['field']->value->label != '') {?>
            <em><?php echo $_smarty_tpl->tpl_vars['field']->value->label;?>
</em>
        <?php }?>
    <?php }?>
</div>

<?php }
}
