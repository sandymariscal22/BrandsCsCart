<?php /* Smarty version Smarty-3.1.18, created on 2014-10-24 03:34:10
         compiled from "/srv/www/server.com/public_html/design/backend/templates/addons/seo/hooks/products/update_seo.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53197051254499072a6dac5-60208748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d1db754b6e8255d3573d4baa65b40dc90ce5b69' => 
    array (
      0 => '/srv/www/server.com/public_html/design/backend/templates/addons/seo/hooks/products/update_seo.pre.tpl',
      1 => 1409124627,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '53197051254499072a6dac5-60208748',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54499072aac367_09826209',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54499072aac367_09826209')) {function content_54499072aac367_09826209($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/seo/common/seo_name_field.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_data'=>$_smarty_tpl->tpl_vars['product_data']->value,'object_name'=>"product_data",'object_id'=>$_smarty_tpl->tpl_vars['product_data']->value['product_id'],'object_type'=>"p",'share_dont_hide'=>true), 0);?>

<?php }?>
<?php }} ?>
