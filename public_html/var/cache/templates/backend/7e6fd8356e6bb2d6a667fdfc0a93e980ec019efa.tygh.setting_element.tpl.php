<?php /* Smarty version Smarty-3.1.18, created on 2014-10-23 19:50:40
         compiled from "/srv/www/server.com/public_html/design/backend/templates/views/block_manager/components/setting_element.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1171491528544923d0ae88e3-71946466%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e6fd8356e6bb2d6a667fdfc0a93e980ec019efa' => 
    array (
      0 => '/srv/www/server.com/public_html/design/backend/templates/views/block_manager/components/setting_element.tpl',
      1 => 1409124627,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1171491528544923d0ae88e3-71946466',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'option' => 0,
    'set_id' => 0,
    'html_id' => 0,
    'name' => 0,
    'editable' => 0,
    'html_name' => 0,
    'value' => 0,
    'k' => 0,
    'v' => 0,
    'values_settings' => 0,
    'setting_data' => 0,
    'setting_name' => 0,
    'block' => 0,
    'picker_param_key' => 0,
    'picker_param_value' => 0,
    'item' => 0,
    'filling' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_544923d0d85b88_76002163',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544923d0d85b88_76002163')) {function content_544923d0d85b88_76002163($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_checkboxes')) include '/srv/www/server.com/public_html/app/lib/other/smarty/plugins/function.html_checkboxes.php';
if (!is_callable('smarty_function_include_ext')) include '/srv/www/server.com/public_html/app/functions/smarty_plugins/function.include_ext.php';
?><?php
fn_preload_lang_vars(array('filling'));
?>
<?php if ($_smarty_tpl->tpl_vars['option']->value['force_open']) {?>
<script type="text/javascript">
Tygh.$(document).ready(function() {
    Tygh.$('#additional_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['set_id']->value, ENT_QUOTES, 'UTF-8');?>
').show();
});
</script>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['option']->value['remove_indent']) {?>
<div class="control-group">
<?php if (!$_smarty_tpl->tpl_vars['option']->value['hide_label']) {?>
    <label for="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="control-label <?php if ($_smarty_tpl->tpl_vars['option']->value['required']) {?> cm-required<?php }?>"><?php if ($_smarty_tpl->tpl_vars['option']->value['option_name']) {?><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['option']->value['option_name']);?>
<?php } else { ?><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['name']->value);?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['option']->value['tooltip']) {?><?php echo $_smarty_tpl->getSubTemplate ("common/tooltip.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('tooltip'=>$_smarty_tpl->tpl_vars['option']->value['tooltip']), 0);?>
<?php }?></label>
<?php }?>
<div class="controls <?php if ($_smarty_tpl->tpl_vars['editable']->value) {?>cm-no-hide-input<?php }?>">
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['option']->value['type']=="checkbox") {?>
    <input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="N" />
    <input type="checkbox" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="Y" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value&&$_smarty_tpl->tpl_vars['value']->value=="Y"||!$_smarty_tpl->tpl_vars['value']->value&&$_smarty_tpl->tpl_vars['option']->value['default_value']=="Y") {?>checked="checked"<?php }?> />

<?php } elseif ($_smarty_tpl->tpl_vars['option']->value['type']=="selectbox") {?>
    <?php $_smarty_tpl->tpl_vars["value"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['value']->value)===null||$tmp==='' ? $_smarty_tpl->tpl_vars['option']->value['default_value'] : $tmp), null, 0);?>

    <select id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['option']->value['values_settings']) {?>class="cm-reload-form"<?php }?>>
    <?php  $_smarty_tpl->tpl_vars["v"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["v"]->_loop = false;
 $_smarty_tpl->tpl_vars["k"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['option']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["v"]->key => $_smarty_tpl->tpl_vars["v"]->value) {
$_smarty_tpl->tpl_vars["v"]->_loop = true;
 $_smarty_tpl->tpl_vars["k"]->value = $_smarty_tpl->tpl_vars["v"]->key;
?>
        <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['k']->value) {?>selected="selected"<?php }?>><?php if ($_smarty_tpl->tpl_vars['option']->value['no_lang']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['v']->value);?>
<?php }?></option>
    <?php } ?>
    </select>

    <?php $_smarty_tpl->tpl_vars["values_settings"] = new Smarty_variable($_smarty_tpl->tpl_vars['option']->value['values_settings'][$_smarty_tpl->tpl_vars['value']->value], null, 0);?>

    <?php if ($_smarty_tpl->tpl_vars['values_settings']->value) {?>
        <?php  $_smarty_tpl->tpl_vars['setting_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['setting_data']->_loop = false;
 $_smarty_tpl->tpl_vars['setting_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['values_settings']->value['settings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['setting_data']->key => $_smarty_tpl->tpl_vars['setting_data']->value) {
$_smarty_tpl->tpl_vars['setting_data']->_loop = true;
 $_smarty_tpl->tpl_vars['setting_name']->value = $_smarty_tpl->tpl_vars['setting_data']->key;
?>
            <?php echo $_smarty_tpl->getSubTemplate ("views/block_manager/components/setting_element.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('option'=>$_smarty_tpl->tpl_vars['setting_data']->value,'name'=>$_smarty_tpl->tpl_vars['setting_name']->value,'block'=>$_smarty_tpl->tpl_vars['block']->value,'html_id'=>"block_".((string)$_smarty_tpl->tpl_vars['html_id']->value)."_properties_".((string)$_smarty_tpl->tpl_vars['name']->value)."_".((string)$_smarty_tpl->tpl_vars['setting_name']->value),'html_name'=>"block_data[properties][".((string)$_smarty_tpl->tpl_vars['name']->value)."][".((string)$_smarty_tpl->tpl_vars['value']->value)."][".((string)$_smarty_tpl->tpl_vars['setting_name']->value)."]",'editable'=>$_smarty_tpl->tpl_vars['editable']->value,'value'=>$_smarty_tpl->tpl_vars['block']->value['properties'][$_smarty_tpl->tpl_vars['name']->value][$_smarty_tpl->tpl_vars['value']->value][$_smarty_tpl->tpl_vars['setting_name']->value]), 0);?>

        <?php } ?>
    <?php }?>
<?php } elseif ($_smarty_tpl->tpl_vars['option']->value['type']=="input"||$_smarty_tpl->tpl_vars['option']->value['type']=="input_long") {?>
    <input type="text" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="input-medium" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['value']->value) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['option']->value['default_value'], ENT_QUOTES, 'UTF-8');?>
<?php }?>" />

<?php } elseif ($_smarty_tpl->tpl_vars['option']->value['type']=="multiple_checkboxes") {?>

    <?php echo smarty_function_html_checkboxes(array('name'=>$_smarty_tpl->tpl_vars['html_name']->value,'options'=>$_smarty_tpl->tpl_vars['option']->value['values'],'columns'=>4,'selected'=>$_smarty_tpl->tpl_vars['value']->value),$_smarty_tpl);?>

<?php } elseif ($_smarty_tpl->tpl_vars['option']->value['type']=="text"||$_smarty_tpl->tpl_vars['option']->value['type']=="simple_text") {?>
    <textarea id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_name']->value, ENT_QUOTES, 'UTF-8');?>
" cols="55" rows="8" class="<?php if ($_smarty_tpl->tpl_vars['option']->value['type']=="text") {?>cm-wysiwyg<?php }?> span9"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</textarea>
    <?php if ($_smarty_tpl->tpl_vars['option']->value['type']=="text") {?>
        
        <!--processForm-->
    <?php }?>
<?php } elseif ($_smarty_tpl->tpl_vars['option']->value['type']=="picker") {?> 
    <?php  $_smarty_tpl->tpl_vars["picker_param_value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["picker_param_value"]->_loop = false;
 $_smarty_tpl->tpl_vars["picker_param_key"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['option']->value['picker_params']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["picker_param_value"]->key => $_smarty_tpl->tpl_vars["picker_param_value"]->value) {
$_smarty_tpl->tpl_vars["picker_param_value"]->_loop = true;
 $_smarty_tpl->tpl_vars["picker_param_key"]->value = $_smarty_tpl->tpl_vars["picker_param_value"]->key;
?>
        <?php $_smarty_tpl->tpl_vars[$_smarty_tpl->tpl_vars['picker_param_key']->value] = new Smarty_variable($_smarty_tpl->tpl_vars['picker_param_value']->value, null, 0);?>
    <?php } ?>

    <?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['option']->value['picker'],'checkbox_name'=>"block_items",'data_id'=>"objects_".((string)$_smarty_tpl->tpl_vars['item']->value['chain_id'])."_",'input_name'=>((string)$_smarty_tpl->tpl_vars['html_name']->value),'item_ids'=>$_smarty_tpl->tpl_vars['value']->value,'params_array'=>$_smarty_tpl->tpl_vars['option']->value['picker_params']),$_smarty_tpl);?>

<?php } elseif ($_smarty_tpl->tpl_vars['option']->value['type']=="enum") {?>
    <?php if ($_smarty_tpl->tpl_vars['option']->value['fillings']) {?>
        <div class="control-group <?php if ($_smarty_tpl->tpl_vars['editable']->value) {?>cm-no-hide-input<?php }?>">
            <label class="control-label" for="block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_filling"><?php echo $_smarty_tpl->__("filling");?>
</label>
            <div class="controls">
            <select id="block_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['html_id']->value, ENT_QUOTES, 'UTF-8');?>
_filling" name="block_data[content][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
][filling]" class="cm-reload-form">
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['option']->value['fillings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['k']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['block']->value['content'][$_smarty_tpl->tpl_vars['name']->value]['filling']==$_smarty_tpl->tpl_vars['k']->value) {?>selected="selected"<?php }?>><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['k']->value);?>
</option>
                <?php } ?>
            </select>
            <?php $_smarty_tpl->tpl_vars["filling"] = new Smarty_variable($_smarty_tpl->tpl_vars['block']->value['content'][$_smarty_tpl->tpl_vars['name']->value]['filling'], null, 0);?>
            </div>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['filling']->value=='manually') {?>
            <div class="control-group <?php if ($_smarty_tpl->tpl_vars['editable']->value) {?>cm-no-hide-input<?php }?>">
                <?php echo smarty_function_include_ext(array('file'=>$_smarty_tpl->tpl_vars['option']->value['fillings']['manually']['picker'],'checkbox_name'=>"block_items",'data_id'=>"objects_".((string)$_smarty_tpl->tpl_vars['item']->value['chain_id'])."_",'input_name'=>((string)$_smarty_tpl->tpl_vars['html_name']->value)."[item_ids]",'item_ids'=>$_smarty_tpl->tpl_vars['block']->value['content'][$_smarty_tpl->tpl_vars['name']->value]['item_ids'],'params_array'=>$_smarty_tpl->tpl_vars['option']->value['fillings']['manually']['picker_params'],'placement'=>"right"),$_smarty_tpl);?>

            </div>
        <?php }?>
        <?php if (is_array($_smarty_tpl->tpl_vars['option']->value['fillings'][$_smarty_tpl->tpl_vars['filling']->value]['settings'])) {?>        
            <?php  $_smarty_tpl->tpl_vars['setting_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['setting_data']->_loop = false;
 $_smarty_tpl->tpl_vars['setting_name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['option']->value['fillings'][$_smarty_tpl->tpl_vars['filling']->value]['settings']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['setting_data']->key => $_smarty_tpl->tpl_vars['setting_data']->value) {
$_smarty_tpl->tpl_vars['setting_data']->_loop = true;
 $_smarty_tpl->tpl_vars['setting_name']->value = $_smarty_tpl->tpl_vars['setting_data']->key;
?>
                <?php echo $_smarty_tpl->getSubTemplate ("views/block_manager/components/setting_element.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('option'=>$_smarty_tpl->tpl_vars['setting_data']->value,'name'=>$_smarty_tpl->tpl_vars['setting_name']->value,'block'=>$_smarty_tpl->tpl_vars['block']->value,'html_id'=>"block_".((string)$_smarty_tpl->tpl_vars['html_id']->value)."_properties_".((string)$_smarty_tpl->tpl_vars['name']->value)."_".((string)$_smarty_tpl->tpl_vars['setting_name']->value),'html_name'=>"block_data[content][".((string)$_smarty_tpl->tpl_vars['name']->value)."][".((string)$_smarty_tpl->tpl_vars['setting_name']->value)."]",'editable'=>$_smarty_tpl->tpl_vars['editable']->value,'value'=>$_smarty_tpl->tpl_vars['block']->value['content'][$_smarty_tpl->tpl_vars['name']->value][$_smarty_tpl->tpl_vars['setting_name']->value]), 0);?>

            <?php } ?>
        <?php }?>
    <?php }?>
<?php } elseif ($_smarty_tpl->tpl_vars['option']->value['type']=="template") {?> 
    <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['option']->value['template'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('value'=>$_smarty_tpl->tpl_vars['value']->value), 0);?>

<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['option']->value['remove_indent']) {?>
</div></div>
<?php }?><?php }} ?>
