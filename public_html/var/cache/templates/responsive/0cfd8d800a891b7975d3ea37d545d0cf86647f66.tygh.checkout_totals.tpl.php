<?php /* Smarty version Smarty-3.1.18, created on 2014-10-23 21:50:21
         compiled from "/srv/www/server.com/public_html/design/themes/responsive/templates/views/checkout/components/checkout_totals.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22022624854493fdd3858a3-62348588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cfd8d800a891b7975d3ea37d545d0cf86647f66' => 
    array (
      0 => '/srv/www/server.com/public_html/design/themes/responsive/templates/views/checkout/components/checkout_totals.tpl',
      1 => 1413417015,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '22022624854493fdd3858a3-62348588',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'location' => 0,
    'cart' => 0,
    'settings' => 0,
    'cart_products' => 0,
    '_total' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54493fdd493324_23629498',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54493fdd493324_23629498')) {function content_54493fdd493324_23629498($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/srv/www/server.com/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/srv/www/server.com/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('change','calculate','calculate_shipping_cost','total_cost','change','calculate','calculate_shipping_cost','total_cost'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['location']->value=="cart"&&$_smarty_tpl->tpl_vars['cart']->value['shipping_required']==true&&$_smarty_tpl->tpl_vars['settings']->value['General']['estimate_shipping_cost']=="Y") {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("shipping_estimation", null, null); ob_start(); ?>
        <i class="ty-cart-total__icon-estimation ty-icon-flight"></i><a id="opener_shipping_estimation_block" class="cm-dialog-opener cm-dialog-auto-size ty-cart-total__a-estimation" data-ca-target-id="shipping_estimation_block" href="<?php echo htmlspecialchars(fn_url("checkout.cart"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php if ($_smarty_tpl->tpl_vars['cart']->value['shipping']) {?><?php echo $_smarty_tpl->__("change");?>
<?php } else { ?><?php echo $_smarty_tpl->__("calculate");?>
<?php }?></a>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <div class="hidden" id="shipping_estimation_block" title="<?php echo $_smarty_tpl->__("calculate_shipping_cost");?>
">
        <div class="ty-cart-content__estimation">
            <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/shipping_estimation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('location'=>"popup",'result_ids'=>"shipping_estimation_link"), 0);?>

        </div>
    </div>
<?php }?>
<div class="ty-cart-total">
    <div class="ty-cart-total__wrapper clearfix" id="checkout_totals">
        <?php if ($_smarty_tpl->tpl_vars['cart_products']->value) {?>
            <div class="ty-coupons__container">
                <?php if ($_smarty_tpl->tpl_vars['cart']->value['has_coupons']) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/promotion_coupon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php }?>
                    
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:payment_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:payment_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:payment_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
        <?php }?>
        
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:payment_options")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:payment_options"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:payment_options"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/checkout_totals_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="clearfix"></div>
        <ul class="ty-cart-statistic__total-list">
            <li class="ty-cart-statistic__item ty-cart-statistic__total">
                <span class="ty-cart-statistic__total-title"><?php echo $_smarty_tpl->__("total_cost");?>
</span>
                <span class="ty-cart-statistic__total-value"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>(($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['_total']->value)===null||$tmp==='' ? Smarty::$_smarty_vars['capture']['_total'] : $tmp))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['cart']->value['total'] : $tmp),'span_id'=>"cart_total",'class'=>"ty-price"), 0);?>
</span>
            </li>
        </ul>
    <!--checkout_totals--></div>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/components/checkout_totals.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/components/checkout_totals.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['location']->value=="cart"&&$_smarty_tpl->tpl_vars['cart']->value['shipping_required']==true&&$_smarty_tpl->tpl_vars['settings']->value['General']['estimate_shipping_cost']=="Y") {?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("shipping_estimation", null, null); ob_start(); ?>
        <i class="ty-cart-total__icon-estimation ty-icon-flight"></i><a id="opener_shipping_estimation_block" class="cm-dialog-opener cm-dialog-auto-size ty-cart-total__a-estimation" data-ca-target-id="shipping_estimation_block" href="<?php echo htmlspecialchars(fn_url("checkout.cart"), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php if ($_smarty_tpl->tpl_vars['cart']->value['shipping']) {?><?php echo $_smarty_tpl->__("change");?>
<?php } else { ?><?php echo $_smarty_tpl->__("calculate");?>
<?php }?></a>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
    <div class="hidden" id="shipping_estimation_block" title="<?php echo $_smarty_tpl->__("calculate_shipping_cost");?>
">
        <div class="ty-cart-content__estimation">
            <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/shipping_estimation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('location'=>"popup",'result_ids'=>"shipping_estimation_link"), 0);?>

        </div>
    </div>
<?php }?>
<div class="ty-cart-total">
    <div class="ty-cart-total__wrapper clearfix" id="checkout_totals">
        <?php if ($_smarty_tpl->tpl_vars['cart_products']->value) {?>
            <div class="ty-coupons__container">
                <?php if ($_smarty_tpl->tpl_vars['cart']->value['has_coupons']) {?>
                    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/promotion_coupon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                <?php }?>
                    
                <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:payment_extra")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:payment_extra"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

                <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:payment_extra"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
        <?php }?>
        
        <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"checkout:payment_options")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"checkout:payment_options"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"checkout:payment_options"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/checkout_totals_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="clearfix"></div>
        <ul class="ty-cart-statistic__total-list">
            <li class="ty-cart-statistic__item ty-cart-statistic__total">
                <span class="ty-cart-statistic__total-title"><?php echo $_smarty_tpl->__("total_cost");?>
</span>
                <span class="ty-cart-statistic__total-value"><?php echo $_smarty_tpl->getSubTemplate ("common/price.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>(($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['_total']->value)===null||$tmp==='' ? Smarty::$_smarty_vars['capture']['_total'] : $tmp))===null||$tmp==='' ? $_smarty_tpl->tpl_vars['cart']->value['total'] : $tmp),'span_id'=>"cart_total",'class'=>"ty-price"), 0);?>
</span>
            </li>
        </ul>
    <!--checkout_totals--></div>
</div>
<?php }?><?php }} ?>
