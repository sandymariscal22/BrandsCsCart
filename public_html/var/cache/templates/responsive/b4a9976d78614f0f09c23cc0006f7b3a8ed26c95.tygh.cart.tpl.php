<?php /* Smarty version Smarty-3.1.18, created on 2014-10-23 21:50:20
         compiled from "/srv/www/server.com/public_html/design/themes/responsive/templates/views/checkout/cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:92385629054493fdc1f8ac3-45768173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4a9976d78614f0f09c23cc0006f7b3a8ed26c95' => 
    array (
      0 => '/srv/www/server.com/public_html/design/themes/responsive/templates/views/checkout/cart.tpl',
      1 => 1413417015,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '92385629054493fdc1f8ac3-45768173',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'cart' => 0,
    'continue_url' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54493fdc2aa2a7_19339403',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54493fdc2aa2a7_19339403')) {function content_54493fdc2aa2a7_19339403($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/srv/www/server.com/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/srv/www/server.com/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('text_cart_empty','text_cart_empty'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


<?php if (!fn_cart_is_empty($_smarty_tpl->tpl_vars['cart']->value)) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/cart_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
    <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_cart_empty");?>
</p>

    <div class="buttons-container wrap">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"submit"), 0);?>

    </div>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/checkout/cart.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/checkout/cart.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php echo smarty_function_script(array('src'=>"js/tygh/exceptions.js"),$_smarty_tpl);?>


<?php if (!fn_cart_is_empty($_smarty_tpl->tpl_vars['cart']->value)) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("views/checkout/components/cart_content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
    <p class="ty-no-items"><?php echo $_smarty_tpl->__("text_cart_empty");?>
</p>

    <div class="buttons-container wrap">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/continue_shopping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>fn_url($_smarty_tpl->tpl_vars['continue_url']->value),'but_role'=>"submit"), 0);?>

    </div>
<?php }?><?php }?><?php }} ?>
