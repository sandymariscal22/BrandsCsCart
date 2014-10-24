<?php /* Smarty version Smarty-3.1.18, created on 2014-10-24 03:34:11
         compiled from "/srv/www/server.com/public_html/design/backend/templates/views/products/components/products_update_features.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203616893254499073013670-93601463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2977aab0fd2e1e4d268a829dc51453d56ab14a1c' => 
    array (
      0 => '/srv/www/server.com/public_html/design/backend/templates/views/products/components/products_update_features.tpl',
      1 => 1409124628,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '203616893254499073013670-93601463',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54499073030331_17312686',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54499073030331_17312686')) {function content_54499073030331_17312686($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('no_items'));
?>
<div id="content_features" class="hidden">

<?php if ($_smarty_tpl->tpl_vars['product_data']->value['product_features']) {?>
<fieldset>
    <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/product_assign_features.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_features'=>$_smarty_tpl->tpl_vars['product_data']->value['product_features']), 0);?>

</fieldset>
<?php } else { ?>
<p class="no-items"><?php echo $_smarty_tpl->__("no_items");?>
</p>
<?php }?>
</div><?php }} ?>
