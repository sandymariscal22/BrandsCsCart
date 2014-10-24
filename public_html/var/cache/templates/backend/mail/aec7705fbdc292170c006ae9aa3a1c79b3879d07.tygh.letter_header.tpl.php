<?php /* Smarty version Smarty-3.1.18, created on 2014-10-16 04:06:25
         compiled from "/srv/www/server.com/public_html/design/backend/mail/templates/common/letter_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2090933090543f0c01a48b60-67471068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aec7705fbdc292170c006ae9aa3a1c79b3879d07' => 
    array (
      0 => '/srv/www/server.com/public_html/design/backend/mail/templates/common/letter_header.tpl',
      1 => 1409124627,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2090933090543f0c01a48b60-67471068',
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
  'unifunc' => 'content_543f0c01a7ab78_04306771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543f0c01a7ab78_04306771')) {function content_543f0c01a7ab78_04306771($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/srv/www/server.com/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><html>
<head>

<style>

.form-title    {
    background-color: #ffffff;
    color: #141414;
    font-weight: bold;
}

.form-field-caption {
    font-style:italic;
}

.table-row {
    background-color: #f1f3f7;
}

.table-head {
    background-color: #bbbbbb;
}

</style>
</head>
<body><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/letter_header.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/letter_header.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><html>
<head>

<style>

.form-title    {
    background-color: #ffffff;
    color: #141414;
    font-weight: bold;
}

.form-field-caption {
    font-style:italic;
}

.table-row {
    background-color: #f1f3f7;
}

.table-head {
    background-color: #bbbbbb;
}

</style>
</head>
<body><?php }?><?php }} ?>
