<?php /* Smarty version Smarty-3.1.18, created on 2014-10-23 19:17:35
         compiled from "/srv/www/server.com/public_html/design/backend/templates/views/sitemap/manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:115234107154491c0fe8ae89-73599299%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76e774dca3ed00b1d1f3687af896aaa6098ab021' => 
    array (
      0 => '/srv/www/server.com/public_html/design/backend/templates/views/sitemap/manage.tpl',
      1 => 1409124628,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '115234107154491c0fe8ae89-73599299',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sitemap_sections' => 0,
    'section' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54491c100db153_46323777',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54491c100db153_46323777')) {function content_54491c100db153_46323777($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/srv/www/server.com/public_html/app/functions/smarty_plugins/function.script.php';
?><?php
fn_preload_lang_vars(array('editing_sitemap_section','no_items','new_site_map_section','add_site_map_section','sitemap'));
?>
<?php echo smarty_function_script(array('src'=>"js/tygh/tabs.js"),$_smarty_tpl);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
<form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="post" name="sitemap_form">

<div class="items-container cm-sortable" data-ca-sortable-table="sitemap_sections" data-ca-sortable-id-name="section_id" id="manage_sitemap_list">
<?php if ($_smarty_tpl->tpl_vars['sitemap_sections']->value) {?>
<table class="table table-middle table-objects table-striped">
<?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sitemap_sections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value) {
$_smarty_tpl->tpl_vars['section']->_loop = true;
?>
    <?php ob_start();?><?php echo $_smarty_tpl->__("editing_sitemap_section");?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/object_group.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>$_smarty_tpl->tpl_vars['section']->value['section_id'],'text'=>$_smarty_tpl->tpl_vars['section']->value['section'],'href'=>"sitemap.update?section_id=".((string)$_smarty_tpl->tpl_vars['section']->value['section_id']),'href_delete'=>"sitemap.delete_section?section_id=".((string)$_smarty_tpl->tpl_vars['section']->value['section_id']),'table'=>"sitemap_sections",'object_id_name'=>"section_id",'delete_target_id'=>"manage_sitemap_list",'status'=>$_smarty_tpl->tpl_vars['section']->value['status'],'additional_class'=>"cm-sortable-row cm-sortable-id-".((string)$_smarty_tpl->tpl_vars['section']->value['section_id']),'no_table'=>true,'is_view_link'=>false,'header_text'=>$_tmp1.": ".((string)$_smarty_tpl->tpl_vars['section']->value['section']),'draggable'=>true), 0);?>

<?php } ?>
</table>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
<?php }?>
<!--manage_sitemap_list--></div>
</form>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php $_smarty_tpl->_capture_stack[0][] = array("adv_buttons", null, null); ob_start(); ?>
    <?php $_smarty_tpl->_capture_stack[0][] = array("add_new_picker", null, null); ob_start(); ?>
        <?php echo $_smarty_tpl->getSubTemplate ("views/sitemap/update.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('section'=>array()), 0);?>

    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php echo $_smarty_tpl->getSubTemplate ("common/popupbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"add_new_site_map_section",'text'=>__("new_site_map_section"),'content'=>Smarty::$_smarty_vars['capture']['add_new_picker'],'title'=>__("add_site_map_section"),'act'=>"general",'icon'=>"icon-plus"), 0);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("sitemap"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'adv_buttons'=>Smarty::$_smarty_vars['capture']['adv_buttons'],'select_languages'=>true), 0);?>
<?php }} ?>
