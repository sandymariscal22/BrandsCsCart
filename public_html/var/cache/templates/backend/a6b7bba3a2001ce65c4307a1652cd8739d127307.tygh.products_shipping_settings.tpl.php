<?php /* Smarty version Smarty-3.1.18, created on 2014-10-24 03:34:10
         compiled from "/srv/www/server.com/public_html/design/backend/templates/views/products/components/products_shipping_settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28343020954499072c553c4-39980400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6b7bba3a2001ce65c4307a1652cd8739d127307' => 
    array (
      0 => '/srv/www/server.com/public_html/design/backend/templates/views/products/components/products_shipping_settings.tpl',
      1 => 1409124628,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '28343020954499072c553c4-39980400',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
    'product_data' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'box_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54499072d12d98_28343491',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54499072d12d98_28343491')) {function content_54499072d12d98_28343491($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('general','weight','tt_views_products_components_products_shipping_settings_weight','free_shipping','shipping_freight','items_in_box','tt_views_products_components_products_shipping_settings_items_in_box','box_length','box_width','box_height'));
?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("general")), 0);?>


<div class="control-group">
    <label class="control-label" for="product_weight"><?php echo $_smarty_tpl->__("weight");?>
 (<?php echo $_smarty_tpl->tpl_vars['settings']->value['General']['weight_symbol'];?>
)<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>__("tt_views_products_components_products_shipping_settings_weight")), 0);?>
:</label>
    <div class="controls">
        <input type="text" name="product_data[weight]" id="product_weight" size="10" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['weight'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-long" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="product_free_shipping"><?php echo $_smarty_tpl->__("free_shipping");?>
:</label>
    <div class="controls">
        <input type="hidden" name="product_data[free_shipping]" value="N" />
        <input type="checkbox" name="product_data[free_shipping]" id="product_free_shipping" value="Y" <?php if ($_smarty_tpl->tpl_vars['product_data']->value['free_shipping']=="Y") {?>checked="checked"<?php }?> />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="product_shipping_freight"><?php echo $_smarty_tpl->__("shipping_freight");?>
 (<?php echo $_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['symbol'];?>
):</label>
    <div class="controls">
        <input type="text" name="product_data[shipping_freight]" id="product_shipping_freight" size="10" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['shipping_freight'])===null||$tmp==='' ? "0.00" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-long" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="product_items_in_box"><?php echo $_smarty_tpl->__("items_in_box");?>
<?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>__("tt_views_products_components_products_shipping_settings_items_in_box")), 0);?>
:</label>
    <div class="controls">
        <input type="text" name="product_data[min_items_in_box]" id="product_items_in_box" size="5" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['min_items_in_box'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-micro" onkeyup="fn_product_shipping_settings(this);" />
        &nbsp;-&nbsp;
        <input type="text" name="product_data[max_items_in_box]" size="5" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['max_items_in_box'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-micro" onkeyup="fn_product_shipping_settings(this);" />
    </div>
    
    <?php if ($_smarty_tpl->tpl_vars['product_data']->value['min_items_in_box']>0||$_smarty_tpl->tpl_vars['product_data']->value['max_items_in_box']) {?>
        <?php $_smarty_tpl->tpl_vars["box_settings"] = new Smarty_variable(true, null, 0);?>
    <?php }?>
</div>

<div class="control-group">
    <label class="control-label" for="product_box_length"><?php echo $_smarty_tpl->__("box_length");?>
:</label>
    <div class="controls">
        <input type="text" name="product_data[box_length]" id="product_box_length" size="10" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['box_length'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-long shipping-dependence" <?php if (!$_smarty_tpl->tpl_vars['box_settings']->value) {?>disabled="disabled"<?php }?> />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="product_box_width"><?php echo $_smarty_tpl->__("box_width");?>
:</label>
    <div class="controls">
        <input type="text" name="product_data[box_width]" id="product_box_width" size="10" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['box_width'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-long shipping-dependence" <?php if (!$_smarty_tpl->tpl_vars['box_settings']->value) {?>disabled="disabled"<?php }?> />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="product_box_height"><?php echo $_smarty_tpl->__("box_height");?>
:</label>
    <div class="controls">
        <input type="text" name="product_data[box_height]" id="product_box_height" size="10" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['product_data']->value['box_height'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" class="input-long shipping-dependence" <?php if (!$_smarty_tpl->tpl_vars['box_settings']->value) {?>disabled="disabled"<?php }?> />
    </div>
</div>

<script type="text/javascript">

function fn_product_shipping_settings(elm)
{
    var jelm = Tygh.$(elm);
    var available = false;
    
    Tygh.$('input', jelm.parent()).each(function() {
        if (parseInt(Tygh.$(this).val()) > 0) {
            available = true;
        }
    });
    
    Tygh.$('input.shipping-dependence').prop('disabled', (available ? false : true));
    
}


</script>
<?php }} ?>
