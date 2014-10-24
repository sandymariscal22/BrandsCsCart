<?php /* Smarty version Smarty-3.1.18, created on 2014-10-16 03:50:34
         compiled from "/srv/www/server.com/public_html/design/backend/templates/common/loading_box.tpl" */ ?>
<?php /*%%SmartyHeaderCode:930117658543f084a200b70-70407913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fd5a6bc284a158e4a9f3bb38235179cb80b36be' => 
    array (
      0 => '/srv/www/server.com/public_html/design/backend/templates/common/loading_box.tpl',
      1 => 1409124627,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '930117658543f084a200b70-70407913',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_543f084a205e93_23230670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543f084a205e93_23230670')) {function content_543f084a205e93_23230670($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('loading'));
?>
<div id="ajax_overlay" class="ajax-overlay"></div>
<div id="ajax_loading_box" class="hidden ajax-loading-box">
    <strong><?php echo $_smarty_tpl->__("loading");?>
</strong>
</div>
<?php }} ?>
