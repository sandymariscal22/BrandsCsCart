<?php /* Smarty version Smarty-3.1.18, created on 2014-10-16 03:56:47
         compiled from "/srv/www/server.com/public_html/design/themes/responsive/templates/addons/image_zoom/hooks/index/styles.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:993912008543f09bf1a78f9-79768664%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3023fdd498188a37ca40f286dc2fffd539a04a3' => 
    array (
      0 => '/srv/www/server.com/public_html/design/themes/responsive/templates/addons/image_zoom/hooks/index/styles.post.tpl',
      1 => 1413417021,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '993912008543f09bf1a78f9-79768664',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_543f09bf1d5985_77810098',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543f09bf1d5985_77810098')) {function content_543f09bf1d5985_77810098($_smarty_tpl) {?><?php if (!is_callable('smarty_function_style')) include '/srv/www/server.com/public_html/app/functions/smarty_plugins/function.style.php';
if (!is_callable('smarty_function_set_id')) include '/srv/www/server.com/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php echo smarty_function_style(array('src'=>"addons/image_zoom/styles.less"),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/image_zoom/hooks/index/styles.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/image_zoom/hooks/index/styles.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php echo smarty_function_style(array('src'=>"addons/image_zoom/styles.less"),$_smarty_tpl);?>
<?php }?><?php }} ?>
