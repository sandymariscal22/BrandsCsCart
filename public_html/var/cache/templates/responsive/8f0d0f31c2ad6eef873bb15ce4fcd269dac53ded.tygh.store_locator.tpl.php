<?php /* Smarty version Smarty-3.1.18, created on 2014-10-23 21:48:57
         compiled from "/srv/www/server.com/public_html/design/themes/responsive/templates/addons/store_locator/blocks/store_locator.tpl" */ ?>
<?php /*%%SmartyHeaderCode:161127179154493f89e30006-46727871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f0d0f31c2ad6eef873bb15ce4fcd269dac53ded' => 
    array (
      0 => '/srv/www/server.com/public_html/design/themes/responsive/templates/addons/store_locator/blocks/store_locator.tpl',
      1 => 1413417024,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '161127179154493f89e30006-46727871',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'store_locator_search' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54493f89ec14f8_07302918',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54493f89ec14f8_07302918')) {function content_54493f89ec14f8_07302918($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/srv/www/server.com/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('search','search','search','search'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="get" name="store_locator_form">

<p><label for="store_locator_search<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="required-hidden"><?php echo $_smarty_tpl->__("search");?>
:</label></p>

<input type="text" size="20" class="ty-input-text" id="store_locator_search<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" name="q" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_locator_search']->value['q'], ENT_QUOTES, 'UTF-8');?>
" /><?php echo $_smarty_tpl->getSubTemplate ("buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"store_locator.search",'alt'=>__("search")), 0);?>


</form><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/store_locator/blocks/store_locator.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/store_locator/blocks/store_locator.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>

<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="get" name="store_locator_form">

<p><label for="store_locator_search<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="required-hidden"><?php echo $_smarty_tpl->__("search");?>
:</label></p>

<input type="text" size="20" class="ty-input-text" id="store_locator_search<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" name="q" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_locator_search']->value['q'], ENT_QUOTES, 'UTF-8');?>
" /><?php echo $_smarty_tpl->getSubTemplate ("buttons/go.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"store_locator.search",'alt'=>__("search")), 0);?>


</form><?php }?><?php }} ?>
