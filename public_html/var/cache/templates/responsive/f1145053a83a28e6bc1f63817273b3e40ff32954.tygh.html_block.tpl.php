<?php /* Smarty version Smarty-3.1.18, created on 2014-10-24 02:48:57
         compiled from "/srv/www/server.com/public_html/design/themes/responsive/templates/blocks/html_block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2008638681544985d99dfda4-96616962%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1145053a83a28e6bc1f63817273b3e40ff32954' => 
    array (
      0 => '/srv/www/server.com/public_html/design/themes/responsive/templates/blocks/html_block.tpl',
      1 => 1413417015,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2008638681544985d99dfda4-96616962',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'content' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_544985d9a473c4_85797060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544985d9a473c4_85797060')) {function content_544985d9a473c4_85797060($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/srv/www/server.com/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="ty-wysiwyg-content"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/html_block.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/html_block.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div class="ty-wysiwyg-content"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div><?php }?><?php }} ?>
