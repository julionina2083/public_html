<?php
/* Smarty version 3.1.48, created on 2023-05-08 10:22:11
  from '/home/ecsdcdwc/public_html/modules/onepagecheckoutps/views/templates/front/review_product_line.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_645913a30e3ff7_61089380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0229d718ff2c3af023a44eb570618323e6bfc84' => 
    array (
      0 => '/home/ecsdcdwc/public_html/modules/onepagecheckoutps/views/templates/front/review_product_line.tpl',
      1 => 1683553280,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_645913a30e3ff7_61089380 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row <?php if ((isset($_smarty_tpl->tpl_vars['productLast']->value)) && $_smarty_tpl->tpl_vars['productLast']->value && (!(isset($_smarty_tpl->tpl_vars['ignoreProductLast']->value)) || !$_smarty_tpl->tpl_vars['ignoreProductLast']->value)) {?>last_item<?php } elseif ((isset($_smarty_tpl->tpl_vars['productFirst']->value)) && $_smarty_tpl->tpl_vars['productFirst']->value) {?>first_item<?php }?> <?php if ((isset($_smarty_tpl->tpl_vars['customizedDatas']->value[$_smarty_tpl->tpl_vars['productId']->value][$_smarty_tpl->tpl_vars['productAttributeId']->value])) && $_smarty_tpl->tpl_vars['quantityDisplayed']->value == 0) {?>alternate_item<?php }?> cart_item address_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']), ENT_QUOTES, 'UTF-8');?>
"
     id="product_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product']), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']), ENT_QUOTES, 'UTF-8');?>
_0_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']), ENT_QUOTES, 'UTF-8');
if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])) {?>_gift<?php }?>">
    <div class="col-md-1 col-xs-3 col-3 text-md-center image_product">
        <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['productmega']))) {?>
            <?php ob_start();
echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['mega']->value['id_megacart']), ENT_QUOTES, 'UTF-8');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('path_img', ((string)(defined('_PS_MODULE_DIR_') ? constant('_PS_MODULE_DIR_') : null))."/megaproduct/images/cart/".$_prefixVariable1.".jpg");?>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['productmega'])) && file_exists($_smarty_tpl->tpl_vars['path_img']->value)) {?>
            <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['url'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                <img class="img-fluid media-object" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (defined('_MODULE_DIR_') ? constant('_MODULE_DIR_') : null),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
megaproduct/images/cart/<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['mega']->value['id_megacart']), ENT_QUOTES, 'UTF-8');?>
.jpg" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
            </a>

            <?php if ($_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_SHOW_ZOOM_IMAGE_PRODUCT']) {?>
                <div class="image_zoom">
                    <img class="media-object" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (defined('_MODULE_DIR_') ? constant('_MODULE_DIR_') : null),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
megaproduct/images/cart/<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['mega']->value['id_megacart']), ENT_QUOTES, 'UTF-8');?>
.jpg" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"/>
                </div>
            <?php }?>
        <?php } else { ?>
            <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['url'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                <img class="img-fluid media-object" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['cover']['small']['url'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
            </a>

            <?php if ($_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_SHOW_ZOOM_IMAGE_PRODUCT']) {?>
                <div class="image_zoom">
                    <img class="media-object" src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['cover']['medium']['url'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
                </div>
            <?php }?>
        <?php }?>
    </div>
    <div class="col-md-<?php if ($_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_SHOW_UNIT_PRICE']) {?>4<?php } else { ?>6<?php }?> col-xs-9 col-9 cart_description">
        <p class="s_title_block">
            <?php if (!$_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_REMOVE_LINK_PRODUCTS']) {?>
                <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['url'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>
                <span><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['reference'] && $_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_SHOW_REFERENCE']) {?>
                    <span class="product_reference">
                        (<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ref.','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>
&nbsp;<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['reference'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
)
                    </span>
                <?php }?>
            <?php if (!$_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_REMOVE_LINK_PRODUCTS']) {?>
                </a>
            <?php }?>
        </p>
        <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['attributes'])) && $_smarty_tpl->tpl_vars['product']->value['attributes']) {?>
            <span class="product_attributes">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attributes'], 'value', false, 'attribute');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                    <div class="product-line-info">
                        <span class=""><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['attribute']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
:</span>
                        <span class=""><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </span>
        <?php }?>

        <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['customizations'])) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['customizations'], 'customization');
$_smarty_tpl->tpl_vars['customization']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['customization']->value) {
$_smarty_tpl->tpl_vars['customization']->do_else = false;
?>
                <a href="#" data-toggle="modal" data-target="#product-customizations-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                <div class="modal fade customization-modal" id="product-customizations-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            &times;
                        </button>
                        <h4 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h4>
                        </div>
                        <div class="modal-body">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customization']->value['fields'], 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
                            <div class="product-customization-line row">
                            <div class="col-sm-3 col-xs-4 label customization-label">
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>

                            </div>
                            <div class="col-sm-9 col-xs-8 value">
                                <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'text') {?>
                                <?php if ((int)$_smarty_tpl->tpl_vars['field']->value['id_module']) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['field']->value['text'];?>

                                <?php } else { ?>
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['text'], ENT_QUOTES, 'UTF-8');?>

                                <?php }?>
                                <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'image') {?>
                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'UTF-8');?>
">
                                <?php }?>
                            </div>
                            </div>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                    </div>
                </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['productmega']))) {?>
            <?php if ((isset($_smarty_tpl->tpl_vars['mega']->value['extraAttrLong']))) {
echo $_smarty_tpl->tpl_vars['mega']->value['extraAttrLong'];
}?>
            <br/>
            <strong><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mega']->value['measure'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</strong>
            <?php if ((isset($_smarty_tpl->tpl_vars['mega']->value['personalization'])) && $_smarty_tpl->tpl_vars['mega']->value['personalization'] != '') {?>
                <br/><div class="mp-personalization"><?php echo $_smarty_tpl->tpl_vars['mega']->value['personalization'];?>
</div>
            <?php }?>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0 && $_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_SHOW_WEIGHT']) {?>
            <span class="product_weight">
                <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Weight','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>
&nbsp;:&nbsp;</span>
                <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( floatval($_smarty_tpl->tpl_vars['product']->value['weight']),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['PS_WEIGHT_UNIT']->value, ENT_QUOTES, 'UTF-8');?>

            </span>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['ps_stock_management']->value && $_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_SHOW_AVAILABILITY']) {?>
            <div class="cart_avail">
                <span class="badge <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity_available'] <= 0 || $_smarty_tpl->tpl_vars['product']->value['cart_quantity'] > $_smarty_tpl->tpl_vars['product']->value['quantity_available']) {?>badge-danger product-unavailable<?php } else { ?>badge-success product-available<?php }?>"><?php if ($_smarty_tpl->tpl_vars['product']->value['quantity_available'] <= 0 || $_smarty_tpl->tpl_vars['product']->value['cart_quantity'] > $_smarty_tpl->tpl_vars['product']->value['quantity_available']) {
if (((isset($_smarty_tpl->tpl_vars['product']->value['available_later'])) && $_smarty_tpl->tpl_vars['product']->value['available_later']) || ((isset($_smarty_tpl->tpl_vars['PS_LABEL_OOS_PRODUCTS_BOA']->value)) && $_smarty_tpl->tpl_vars['PS_LABEL_OOS_PRODUCTS_BOA']->value)) {
if ((isset($_smarty_tpl->tpl_vars['product']->value['available_later'])) && $_smarty_tpl->tpl_vars['product']->value['available_later']) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['available_later'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['PS_LABEL_OOS_PRODUCTS_BOA']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['availability_message'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}
} else {
if ($_smarty_tpl->tpl_vars['product']->value['quantity'] > $_smarty_tpl->tpl_vars['product']->value['quantity_available']) {
if ((isset($_smarty_tpl->tpl_vars['product']->value['available_later'])) && $_smarty_tpl->tpl_vars['product']->value['available_later']) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['available_later'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['availability_message'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}
} else {
if ((isset($_smarty_tpl->tpl_vars['product']->value['available_now'])) && $_smarty_tpl->tpl_vars['product']->value['available_now']) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['available_now'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['availability_message'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}
}
}?></span>
            </div>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_SHOW_DELIVERY_TIME'] && !empty($_smarty_tpl->tpl_vars['product']->value['delivery_information_opc'])) {?>
            <span class="delivery-information"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['delivery_information_opc'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
            <br/>
            <?php if (!$_smarty_tpl->tpl_vars['product']->value['is_virtual']) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayProductDeliveryTime",'product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );
}?>
        <?php }?>
    </div>

    <div class="hidden-sm-up row clear"></div>

    <?php if ($_smarty_tpl->tpl_vars['CONFIGS']->value['OPC_SHOW_UNIT_PRICE']) {?>
                <div class="col-md-2 col-xs-3 col-3 col-lg-3 col-xl-3 text-md-center text-xs-left text-sm-left">
            <span class="" id="product_price_7_34_0">
                <?php if ($_smarty_tpl->tpl_vars['product']->value['price'] != $_smarty_tpl->tpl_vars['product']->value['regular_price']) {?>
                    <span class="old-price d-block text-right"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['regular_price'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                <?php }?>
                <span class="price special-price d-block text-right"><?php if ((isset($_smarty_tpl->tpl_vars['product']->value['productmega']))) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mega']->value['spricewt'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['price'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?></span>
                <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] == 'amount' && $_smarty_tpl->tpl_vars['product']->value['discount_amount'] != '') {?>
                    <span class="price-percent-reduction small d-block text-right">(<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['discount_amount'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
)</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] == 'percentage' && $_smarty_tpl->tpl_vars['product']->value['discount_percentage'] != '') {?>
                    <span class="price-percent-reduction small d-block text-right">(<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['discount_percentage'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
)</span>
                <?php }?>
            </span>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['unit_price_full']) {?>
                <div class="unit-price-cart text-right"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['unit_price_full'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div>
            <?php }?>
        </div>
    <?php }?>

    
        <div class="col-md-3 col-lg-2 col-xs-6 col-6 text-md-center quantity-content">
        <div class="input-group bootstrap-touchspin">
            <span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span>
                            <input
                    class="cart-line-product-quantity"
                    data-down-url="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['down_quantity_url'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['product']->value['productmega']))) {?>&id_megacart=<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mega']->value['id_megacart'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>"
                    data-up-url="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['up_quantity_url'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['product']->value['productmega']))) {?>&id_megacart=<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mega']->value['id_megacart'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>"
                    data-update-url="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['update_quantity_url'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['product']->value['productmega']))) {?>&id_megacart=<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mega']->value['id_megacart'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>"
                    data-product-id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                    <?php if ((isset($_smarty_tpl->tpl_vars['product']->value['productmega']))) {?>data-mega-id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mega']->value['id_megacart'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                    type="text"
                    value="<?php if ((isset($_smarty_tpl->tpl_vars['product']->value['productmega']))) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mega']->value['quantity'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['quantity'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>"
                    name="product-quantity-spin"
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity_available'] == 1 && !$_smarty_tpl->tpl_vars['product']->value['allow_oosp']) {?>disabled<?php }?>
                >
            <span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span>
                <span class="input-group-btn-vertical">
                    <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-up" type="button" <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity_available'] <= $_smarty_tpl->tpl_vars['product']->value['cart_quantity'] && !$_smarty_tpl->tpl_vars['product']->value['allow_oosp']) {?>disabled<?php }?>>
                        <i class="fa-pts fa-pts-chevron-up"></i>
                    </button>
                    <button class="btn btn-touchspin js-touchspin bootstrap-touchspin-down" type="button" <?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'] < $_smarty_tpl->tpl_vars['product']->value['cart_quantity'] || $_smarty_tpl->tpl_vars['product']->value['minimal_quantity'] <= 1) {
} else { ?>disabled<?php }?>>
                        <i class="fa-pts fa-pts-chevron-down"></i>
                    </button>
                </span>
            <a
                class                       = "remove-from-cart"
                rel                         = "nofollow"
                href                        = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['remove_from_cart_url'],'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['product']->value['productmega']))) {?>&id_megacart=<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mega']->value['id_megacart'],'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>"
                data-link-action            = "delete-from-cart"
                data-id-product             = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                data-id-product-attribute   = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'],'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                data-id-customization   	= "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_customization'],'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
            >
                <i class="fa-pts fa-pts-trash-o fa-pts-1x"></i>
            </a>
        </div>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCartExtraProductActions','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

    </div>

    
        <div class="col-md-2 col-xs-3 col-3 text-md-right text-xs-right text-sm-right">
    <span class="total-price-text d-block d-md-none text-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Total','mod'=>'onepagecheckoutps'),$_smarty_tpl ) );?>
</span>
        <span class="product-price d-block text-right"><?php if ((isset($_smarty_tpl->tpl_vars['product']->value['productmega']))) {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['mega']->value['stotalwt'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['total'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?></span>
    </div>
</div><?php }
}
