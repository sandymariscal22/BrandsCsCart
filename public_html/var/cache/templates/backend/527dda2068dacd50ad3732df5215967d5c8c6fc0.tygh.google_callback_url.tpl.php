<?php /* Smarty version Smarty-3.1.18, created on 2014-10-16 03:50:28
         compiled from "/srv/www/server.com/public_html/design/backend/templates/addons/hybrid_auth/components/google_callback_url.tpl" */ ?>
<?php /*%%SmartyHeaderCode:205755383543f08440d50b5-25894258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '527dda2068dacd50ad3732df5215967d5c8c6fc0' => 
    array (
      0 => '/srv/www/server.com/public_html/design/backend/templates/addons/hybrid_auth/components/google_callback_url.tpl',
      1 => 1409124627,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '205755383543f08440d50b5-25894258',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_543f084422ace8_59524444',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543f084422ace8_59524444')) {function content_543f084422ace8_59524444($_smarty_tpl) {?><div class="control-group setting-wide">
	<label class="control-label"><?php echo $_smarty_tpl->__('google_callback_url');?>
: </label>
	<div class="controls">
		<input type="text" readonly="readonly" value="<?php echo htmlspecialchars(fn_url("auth.process?hauth.done=Google","C"), ENT_QUOTES, 'UTF-8');?>
" onclick="this.select()">
	</div>
</div><?php }} ?>
