<?php /* Smarty version Smarty-3.1.18, created on 2014-10-23 22:59:10
         compiled from "/srv/www/server.com/public_html/design/themes/responsive/templates/views/checkout/checkout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16611849554494ffece1934-93522699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c93997096298d0858b89dddf38da154f9d88d056' => 
    array (
      0 => '/srv/www/server.com/public_html/design/themes/responsive/templates/views/checkout/checkout.tpl',
      1 => 1413417015,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '16611849554494ffece1934-93522699',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'settings' => 0,
    'cart_products' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54494ffeddcef5_28526635',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54494ffeddcef5_28526635')) {function content_54494ffeddcef5_28526635($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/srv/www/server.com/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/srv/www/server.com/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('secure_checkout','secure_checkout','secure_checkout','secure_checkout'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


<script type="text/javascript">
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var elm = context.find('.ty-step__title-active');
        if (elm.length) {
            $.scrollToElm(elm);
        }
    });
}(Tygh, Tygh.$));
</script>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['checkout_style']=="multi_page") {?>
    <?php if ($_smarty_tpl->tpl_vars['cart_products']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/progressbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/checkout_steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><span class="ty-checkout__title ty-classic-checkout__title"><?php echo $_smarty_tpl->__("secure_checkout");?>
&nbsp;<i class="ty-checkout__title-icon ty-icon-lock"></i></span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php } else { ?>
    <?php echo Smarty::$_smarty_vars['capture']['checkout_error_content'];?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/checkout_steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><span class="ty-checkout__title"><?php echo $_smarty_tpl->__("secure_checkout");?>
&nbsp;<i class="ty-checkout__title-icon ty-icon-lock"></i></span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/checkout.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/checkout.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


<script type="text/javascript">
(function(_, $) {
    $.ceEvent('on', 'ce.commoninit', function(context) {
        var elm = context.find('.ty-step__title-active');
        if (elm.length) {
            $.scrollToElm(elm);
        }
    });
}(Tygh, Tygh.$));
</script>

<?php if ($_smarty_tpl->tpl_vars['settings']->value['General']['checkout_style']=="multi_page") {?>
    <?php if ($_smarty_tpl->tpl_vars['cart_products']->value) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/progressbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/checkout_steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><span class="ty-checkout__title ty-classic-checkout__title"><?php echo $_smarty_tpl->__("secure_checkout");?>
&nbsp;<i class="ty-checkout__title-icon ty-icon-lock"></i></span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php } else { ?>
    <?php echo Smarty::$_smarty_vars['capture']['checkout_error_content'];?>

    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/checkout_steps.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><span class="ty-checkout__title"><?php echo $_smarty_tpl->__("secure_checkout");?>
&nbsp;<i class="ty-checkout__title-icon ty-icon-lock"></i></span><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php }?>
<?php }?><?php }} ?>
