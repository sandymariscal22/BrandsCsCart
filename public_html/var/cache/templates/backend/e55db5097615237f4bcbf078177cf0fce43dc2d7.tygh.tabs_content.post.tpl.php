<?php /* Smarty version Smarty-3.1.18, created on 2014-10-24 03:34:11
         compiled from "/srv/www/server.com/public_html/design/backend/templates/addons/reward_points/hooks/products/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174928995054499073256be5-21070415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e55db5097615237f4bcbf078177cf0fce43dc2d7' => 
    array (
      0 => '/srv/www/server.com/public_html/design/backend/templates/addons/reward_points/hooks/products/tabs_content.post.tpl',
      1 => 1409124627,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '174928995054499073256be5-21070415',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product_data' => 0,
    'addons' => 0,
    'data' => 0,
    'runtime' => 0,
    'is_auto' => 0,
    'rate_pip' => 0,
    'object_type' => 0,
    'reward_usergroups' => 0,
    'm' => 0,
    'reward_points' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5449907338ecb0_35226279',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5449907338ecb0_35226279')) {function content_5449907338ecb0_35226279($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/srv/www/server.com/public_html/app/lib/other/smarty/plugins/function.math.php';
?><?php
fn_preload_lang_vars(array('price_in_points','pay_by_points','override_per','price_in_points','earned_points','override_gc_points','usergroup','amount','amount_type','absolute','points_lower','percent'));
?>
<?php $_smarty_tpl->tpl_vars["data"] = new Smarty_variable($_smarty_tpl->tpl_vars['product_data']->value, null, 0);?>

<div id="content_reward_points" class="hidden">
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("price_in_points"),'target'=>"#reward_points_products_hook"), 0);?>

    <div id="reward_points_products_hook" class="in collapse">
        <fieldset>
        <?php $_smarty_tpl->tpl_vars["is_auto"] = new Smarty_variable($_smarty_tpl->tpl_vars['addons']->value['reward_points']['auto_price_in_points'], null, 0);?>
            <div class="control-group">
                <label class="control-label" for="pd_is_pbp"><?php echo $_smarty_tpl->__("pay_by_points");?>
</label>
                <div class="controls">
                    <input type="hidden" name="product_data[is_pbp]" value="N" />
                    <input type="checkbox" name="product_data[is_pbp]" id="pd_is_pbp" value="Y" <?php if ($_smarty_tpl->tpl_vars['data']->value['is_pbp']=="Y"||$_smarty_tpl->tpl_vars['runtime']->value['mode']=="add") {?>checked="checked"<?php }?> onclick="<?php if ($_smarty_tpl->tpl_vars['is_auto']->value!='Y') {?>Tygh.$.disable_elms(['price_in_points'], !this.checked);<?php } else { ?>Tygh.$.disable_elms(['is_oper'], !this.checked); Tygh.$.disable_elms(['price_in_points'], !this.checked || !Tygh.$('#is_oper').prop('checked'));<?php }?>">
                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['is_auto']->value=="Y") {?>
            <div class="control-group">
                <label class="control-label" for="is_oper"><?php echo $_smarty_tpl->__("override_per");?>
</label>
                <div class="controls">
                    <?php echo smarty_function_math(array('equation'=>"x*y",'x'=>(($tmp = @$_smarty_tpl->tpl_vars['data']->value['price'])===null||$tmp==='' ? "0" : $tmp),'y'=>$_smarty_tpl->tpl_vars['addons']->value['reward_points']['point_rate'],'assign'=>"rate_pip"),$_smarty_tpl);?>

                    <input type="hidden" id="price_in_points_exchange" value="<?php echo htmlspecialchars(ceil($_smarty_tpl->tpl_vars['rate_pip']->value), ENT_QUOTES, 'UTF-8');?>
" />
                    <input type="hidden" name="product_data[is_oper]" value="N" />
                    <input type="checkbox" id="is_oper" name="product_data[is_oper]" value="Y" <?php if ($_smarty_tpl->tpl_vars['data']->value['is_oper']=="Y") {?>checked="checked"<?php }?> onclick="Tygh.$.disable_elms(['price_in_points'], !this.checked);" <?php if ($_smarty_tpl->tpl_vars['data']->value['is_pbp']!="Y") {?> disabled="disabled"<?php }?>>
                </div>
            </div>
            <?php }?>

            <div class="control-group">
                <label class="control-label" for="price_in_points"><?php echo $_smarty_tpl->__("price_in_points");?>
</label>
                <div class="controls">
                    <input type="text" id="price_in_points" name="product_data[point_price]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['data']->value['point_price'])===null||$tmp==='' ? 0 : $tmp), ENT_QUOTES, 'UTF-8');?>
" size="10"  <?php if ($_smarty_tpl->tpl_vars['data']->value['is_pbp']!="Y"||($_smarty_tpl->tpl_vars['is_auto']->value=="Y"&&$_smarty_tpl->tpl_vars['data']->value['is_oper']!="Y")) {?>disabled="disabled"<?php }?>>
                </div>
            </div>
        </fieldset>
    </div>

    <input type="hidden" name="object_type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
">
            
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("earned_points"),'target'=>"#reward_points_products_earned_hook"), 0);?>

    <div id="reward_points_products_earned_hook" class="in collapse">
        <fieldset>
            <input type="hidden" name="product_data[is_op]" value="N">
            <label for="rp_is_op" class="checkbox">
                <input type="checkbox" name="product_data[is_op]" id="rp_is_op" value="Y" <?php if ($_smarty_tpl->tpl_vars['data']->value['is_op']=="Y") {?>checked="checked"<?php }?> onclick="Tygh.$.disable_elms([<?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reward_usergroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>'earned_points_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
',<?php } ?><?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reward_usergroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>'points_type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
',<?php } ?>], !this.checked);">
                <?php echo $_smarty_tpl->__("override_gc_points");?>

            </label>
            

            <table class="table table-middle">
            <thead class="cm-first-sibling">
                <tr>
                    <th width="20%"><?php echo $_smarty_tpl->__("usergroup");?>
</th>
                    <th width="40%"><?php echo $_smarty_tpl->__("amount");?>
</th>
                    <th width="40%"><?php echo $_smarty_tpl->__("amount_type");?>
</th>
                </tr>
            </thead>
            <tbody>
            <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['reward_usergroups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value) {
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
                <tr>
                    <td>
                        <input type="hidden" name="product_data[reward_points][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
][usergroup_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value['usergroup'], ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <input type="text" id="earned_points_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
" name="product_data[reward_points][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
][amount]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['reward_points']->value[$_smarty_tpl->tpl_vars['m']->value['usergroup_id']]['amount'])===null||$tmp==='' ? "0" : $tmp), ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['data']->value['is_op']!="Y") {?>disabled="disabled"<?php }?>></td>
                    <td>
                        <select id="points_type_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['object_type']->value, ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
" name="product_data[reward_points][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['m']->value['usergroup_id'], ENT_QUOTES, 'UTF-8');?>
][amount_type]" <?php if ($_smarty_tpl->tpl_vars['object_type']->value==@constant('PRODUCT_REWARD_POINTS')&&$_smarty_tpl->tpl_vars['data']->value['is_op']!='Y') {?>disabled="disabled"<?php }?>>
                            <option value="A" <?php if ($_smarty_tpl->tpl_vars['reward_points']->value[$_smarty_tpl->tpl_vars['m']->value['usergroup_id']]['amount_type']=="A") {?>selected<?php }?>><?php echo $_smarty_tpl->__("absolute");?>
 (<?php echo $_smarty_tpl->__("points_lower");?>
)</option>
                            <option value="P" <?php if ($_smarty_tpl->tpl_vars['reward_points']->value[$_smarty_tpl->tpl_vars['m']->value['usergroup_id']]['amount_type']=="P") {?>selected<?php }?>><?php echo $_smarty_tpl->__("percent");?>
 (%)</option>
                        </select>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
            </table>
        </fieldset>
    </div>
</div><?php }} ?>
