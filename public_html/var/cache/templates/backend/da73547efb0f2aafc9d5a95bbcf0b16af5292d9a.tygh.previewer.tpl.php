<?php /* Smarty version Smarty-3.1.18, created on 2014-10-23 19:18:37
         compiled from "/srv/www/server.com/public_html/design/backend/templates/common/previewer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125959361154491c4dccb323-81120746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da73547efb0f2aafc9d5a95bbcf0b16af5292d9a' => 
    array (
      0 => '/srv/www/server.com/public_html/design/backend/templates/common/previewer.tpl',
      1 => 1409124627,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '125959361154491c4dccb323-81120746',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54491c4dcfce48_61508270',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54491c4dcfce48_61508270')) {function content_54491c4dcfce48_61508270($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/srv/www/server.com/public_html/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);?>
<?php }} ?>
