<?php /* Smarty version Smarty-3.1.18, created on 2014-10-24 03:34:11
         compiled from "/srv/www/server.com/public_html/design/backend/templates/addons/discussion/views/discussion_manager/components/allow_discussion.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10580473335449907316ba96-37752197%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e16734bfe7464eca4f74aa3445ca8c4ca8877ac' => 
    array (
      0 => '/srv/www/server.com/public_html/design/backend/templates/addons/discussion/views/discussion_manager/components/allow_discussion.tpl',
      1 => 1409124627,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '10580473335449907316ba96-37752197',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'no_hide_input' => 0,
    'title' => 0,
    'object_id' => 0,
    'object_type' => 0,
    'prefix' => 0,
    'discussion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_544990731e9811_25308834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544990731e9811_25308834')) {function content_544990731e9811_25308834($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('communication','and','rating','communication','rating','disabled','communication','and','rating','communication','rating','disabled'));
?>
<div class="control-group <?php if ($_smarty_tpl->tpl_vars['no_hide_input']->value) {?>cm-no-hide-input<?php }?>">
    <label class="control-label" for="discussion_type"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8');?>
:</label>
    <div class="controls">
        <?php $_smarty_tpl->tpl_vars["discussion"] = new Smarty_variable(fn_get_discussion($_smarty_tpl->tpl_vars['object_id']->value,$_smarty_tpl->tpl_vars['object_type']->value), null, 0);?>

        <?php if (fn_check_view_permissions("discussion.add")) {?>
            <select name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['prefix']->value, ENT_QUOTES, 'UTF-8');?>
[discussion_type]" id="discussion_type">
                <option <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="B") {?>selected="selected"<?php }?> value="B"><?php echo $_smarty_tpl->__("communication");?>
 <?php echo $_smarty_tpl->__("and");?>
 <?php echo $_smarty_tpl->__("rating");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="C") {?>selected="selected"<?php }?> value="C"><?php echo $_smarty_tpl->__("communication");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="R") {?>selected="selected"<?php }?> value="R"><?php echo $_smarty_tpl->__("rating");?>
</option>
                <option <?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="D"||!$_smarty_tpl->tpl_vars['discussion']->value) {?>selected="selected"<?php }?> value="D"><?php echo $_smarty_tpl->__("disabled");?>
</option>
            </select>
        <?php } else { ?>
            <span class="shift-input"><?php if ($_smarty_tpl->tpl_vars['discussion']->value['type']=="B") {?><?php echo $_smarty_tpl->__("communication");?>
 <?php echo $_smarty_tpl->__("and");?>
 <?php echo $_smarty_tpl->__("rating");?>
<?php } elseif ($_smarty_tpl->tpl_vars['discussion']->value['type']=="C") {?><?php echo $_smarty_tpl->__("communication");?>
<?php } elseif ($_smarty_tpl->tpl_vars['discussion']->value['type']=="R") {?><?php echo $_smarty_tpl->__("rating");?>
<?php } else { ?><?php echo $_smarty_tpl->__("disabled");?>
<?php }?></span>
        <?php }?>

    </div>
</div><?php }} ?>
