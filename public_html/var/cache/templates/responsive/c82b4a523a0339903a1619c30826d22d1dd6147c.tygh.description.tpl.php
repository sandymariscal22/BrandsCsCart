<?php /* Smarty version Smarty-3.1.18, created on 2014-10-23 21:49:38
         compiled from "/srv/www/server.com/public_html/design/themes/responsive/templates/blocks/product_tabs/description.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108085743554493fb2f075d0-59213029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c82b4a523a0339903a1619c30826d22d1dd6147c' => 
    array (
      0 => '/srv/www/server.com/public_html/design/themes/responsive/templates/blocks/product_tabs/description.tpl',
      1 => 1413417015,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '108085743554493fb2f075d0-59213029',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54493fb2f3d384_64937477',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54493fb2f3d384_64937477')) {function content_54493fb2f3d384_64937477($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/srv/www/server.com/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['product']->value['full_description'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['short_description'] : $tmp);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/product_tabs/description.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/product_tabs/description.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>

<?php echo (($tmp = @$_smarty_tpl->tpl_vars['product']->value['full_description'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['product']->value['short_description'] : $tmp);?>
<?php }?><?php }} ?>
