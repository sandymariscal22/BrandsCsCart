<?php /* Smarty version Smarty-3.1.18, created on 2014-10-23 19:49:45
         compiled from "/srv/www/server.com/public_html/design/backend/templates/views/block_manager/components/new_blocks_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125881557154492399e464b9-15975415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a18b93026cd6547677ed988c54bafe1df8bd185f' => 
    array (
      0 => '/srv/www/server.com/public_html/design/backend/templates/views/block_manager/components/new_blocks_list.tpl',
      1 => 1409124627,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '125881557154492399e464b9-15975415',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'block_types' => 0,
    'manage' => 0,
    'type' => 0,
    'grid_id' => 0,
    'block' => 0,
    'block_description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54492399e7ac29_75566587',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54492399e7ac29_75566587')) {function content_54492399e7ac29_75566587($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/srv/www/server.com/public_html/app/lib/other/smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_truncate')) include '/srv/www/server.com/public_html/app/functions/smarty_plugins/modifier.truncate.php';
?><?php  $_smarty_tpl->tpl_vars["block"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["block"]->_loop = false;
 $_smarty_tpl->tpl_vars["type"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['block_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["block"]->key => $_smarty_tpl->tpl_vars["block"]->value) {
$_smarty_tpl->tpl_vars["block"]->_loop = true;
 $_smarty_tpl->tpl_vars["type"]->value = $_smarty_tpl->tpl_vars["block"]->key;
?>
    <div class="select-block cm-add-block bm-action-new-block <?php if ($_smarty_tpl->tpl_vars['manage']->value=="Y") {?>bm-manage<?php }?>">
        <input type="hidden" name="block_data[type]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="block_data[grid_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        
        <div class="select-block-box">
            <div class="bmicon-<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['block']->value['type'],"_","-"), ENT_QUOTES, 'UTF-8');?>
"></div>
        </div>
                
        <div class="select-block-description">
            <strong title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['block']->value['name'],25,"&hellip;",true);?>
</strong>
            <?php $_smarty_tpl->tpl_vars["block_description"] = new Smarty_variable("block_".((string)$_smarty_tpl->tpl_vars['block']->value['type'])."_description", null, 0);?>
            <p><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['block_description']->value);?>
</p>
        </div>
    </div>
<?php } ?><?php }} ?>
