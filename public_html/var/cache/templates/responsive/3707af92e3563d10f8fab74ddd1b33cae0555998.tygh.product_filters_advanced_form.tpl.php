<?php /* Smarty version Smarty-3.1.18, created on 2014-10-23 23:19:06
         compiled from "/srv/www/server.com/public_html/design/themes/responsive/templates/views/products/components/product_filters_advanced_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1816483543544954aa8b0b45-18427165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3707af92e3563d10f8fab74ddd1b33cae0555998' => 
    array (
      0 => '/srv/www/server.com/public_html/design/themes/responsive/templates/views/products/components/product_filters_advanced_form.tpl',
      1 => 1413417015,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1816483543544954aa8b0b45-18427165',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'filter_features' => 0,
    'splitted_filter' => 0,
    'filters_row' => 0,
    'filter' => 0,
    'range' => 0,
    'search' => 0,
    'el_id' => 0,
    '_type' => 0,
    'date_extra' => 0,
    'settings' => 0,
    'secondary_currency' => 0,
    'from_value' => 0,
    'to_value' => 0,
    'cur' => 0,
    'orig_from' => 0,
    'orig_to' => 0,
    'orig_cur' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'separate_form' => 0,
    '_collapse' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_544954ab0cda29_38204864',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544954ab0cda29_38204864')) {function content_544954ab0cda29_38204864($_smarty_tpl) {?><?php if (!is_callable('smarty_function_split')) include '/srv/www/server.com/public_html/app/functions/smarty_plugins/function.split.php';
if (!is_callable('smarty_modifier_in_array')) include '/srv/www/server.com/public_html/app/functions/smarty_plugins/modifier.in_array.php';
if (!is_callable('smarty_function_set_id')) include '/srv/www/server.com/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('none','your_range','none','yes','no','any','submit','or','reset_filter','advanced_filter','advanced_filter','none','your_range','none','yes','no','any','submit','or','reset_filter','advanced_filter','advanced_filter'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if ($_smarty_tpl->tpl_vars['filter_features']->value) {?>

<?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['filter_features']->value,'size'=>"3",'assign'=>"splitted_filter",'preverse_keys'=>true),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("filtering", null, null); ob_start(); ?>
<input type="hidden" name="advanced_filter" value="Y" />
<?php if ($_REQUEST['category_id']) {?>
<input type="hidden" name="category_id" value="<?php echo htmlspecialchars($_REQUEST['category_id'], ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="subcats" value="Y" />
<?php }?>

<?php if ($_REQUEST['variant_id']) {?>
<input type="hidden" name="variant_id" value="<?php echo htmlspecialchars($_REQUEST['variant_id'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<div class="ty-filters-search">
<?php  $_smarty_tpl->tpl_vars["filters_row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["filters_row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_filter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["filters_row"]->key => $_smarty_tpl->tpl_vars["filters_row"]->value) {
$_smarty_tpl->tpl_vars["filters_row"]->_loop = true;
?>

    <?php  $_smarty_tpl->tpl_vars["filter"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["filter"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters_row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["filter"]->key => $_smarty_tpl->tpl_vars["filter"]->value) {
$_smarty_tpl->tpl_vars["filter"]->_loop = true;
?>

        <?php if (!isset($_smarty_tpl->tpl_vars['filter']->value['feature_type'])&&!isset($_smarty_tpl->tpl_vars['filter']->value['condition_type'])) {?>
            <?php continue 1?>
        <?php }?>

        <div class="ty-column4">
            <div class="ty-filters-search__item">

                <div class="ty-filters-search__title"><?php echo htmlspecialchars((($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['filter']->value['filter'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['filter']->value['description'] : $tmp))===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</div>

                <?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_type']=="S"||$_smarty_tpl->tpl_vars['filter']->value['feature_type']=="E"||$_smarty_tpl->tpl_vars['filter']->value['feature_type']=="M") {?>
                <div class="ty-filters-search__scroll">
                    <?php  $_smarty_tpl->tpl_vars["range"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["range"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter']->value['ranges']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["range"]->key => $_smarty_tpl->tpl_vars["range"]->value) {
$_smarty_tpl->tpl_vars["range"]->_loop = true;
?>
                        <div class="ty-select-field"><input type="checkbox" class="ty-select-field__checkbox" name="<?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_type']=="M") {?>multiple_<?php }?>variants[]" id="variants_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range']->value['range_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_type']=="M") {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range']->value['range_id'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>[V<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range']->value['range_id'], ENT_QUOTES, 'UTF-8');?>
]<?php }?>" <?php if (smarty_modifier_in_array("[V".((string)$_smarty_tpl->tpl_vars['range']->value['range_id'])."]",$_smarty_tpl->tpl_vars['search']->value['variants'])||smarty_modifier_in_array($_smarty_tpl->tpl_vars['range']->value['range_id'],$_smarty_tpl->tpl_vars['search']->value['multiple_variants'])) {?>checked="checked"<?php }?> /><label class="ty-select-field__title" for="variants_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range']->value['range_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range']->value['range_name'], ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</label></div>
                    <?php } ?>
                </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['feature_type']=="O"||$_smarty_tpl->tpl_vars['filter']->value['feature_type']=="N"||$_smarty_tpl->tpl_vars['filter']->value['feature_type']=="D"||$_smarty_tpl->tpl_vars['filter']->value['condition_type']=="D"||$_smarty_tpl->tpl_vars['filter']->value['condition_type']=="F") {?>
                    <?php if (!$_smarty_tpl->tpl_vars['filter']->value['slider']) {?>
                    <div class="ty-filters-search__scroll">
                    <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['filter']->value['condition_type']) {?>
                            <?php $_smarty_tpl->tpl_vars["el_id"] = new Smarty_variable("field_".((string)$_smarty_tpl->tpl_vars['filter']->value['filter_id']), null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars["el_id"] = new Smarty_variable("feature_".((string)$_smarty_tpl->tpl_vars['filter']->value['feature_id']), null, 0);?>
                        <?php }?>
                        <p<?php if (!$_smarty_tpl->tpl_vars['filter']->value['slider']) {?> class="ty-select-field"<?php }?>><input type="radio" name="variants[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
]" id="no_ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="" checked="checked" class="radio ty-select-field__checkbox" /><label class="ty-select-field__title" for="no_ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("none");?>
</label></p>
                        <?php if (!$_smarty_tpl->tpl_vars['filter']->value['slider']) {?>
                            <?php  $_smarty_tpl->tpl_vars["range"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["range"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter']->value['ranges']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["range"]->key => $_smarty_tpl->tpl_vars["range"]->value) {
$_smarty_tpl->tpl_vars["range"]->_loop = true;
?>
                                <?php $_smarty_tpl->tpl_vars["_type"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['filter']->value['field_type'])===null||$tmp==='' ? "R" : $tmp), null, 0);?>
                                <div class="ty-select-field"><input type="radio" class="ty-select-field__checkbox" name="variants[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
]" id="ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range']->value['range_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_type']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range']->value['range_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['variants'][$_smarty_tpl->tpl_vars['el_id']->value]==((string)$_smarty_tpl->tpl_vars['_type']->value).((string)$_smarty_tpl->tpl_vars['range']->value['range_id'])) {?>checked="checked"<?php }?> /><label class="ty-select-field__title" for="ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range']->value['range_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(fn_text_placeholders($_smarty_tpl->tpl_vars['range']->value['range_name']), ENT_QUOTES, 'UTF-8');?>
</label></div>
                            <?php } ?>
                        <?php }?>
                    <?php if (!$_smarty_tpl->tpl_vars['filter']->value['slider']) {?>
                    </div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['filter']->value['condition_type']!="F") {?>
                    <p><input type="radio" name="variants[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
]" id="select_custom_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="O" <?php if ($_smarty_tpl->tpl_vars['search']->value['variants'][$_smarty_tpl->tpl_vars['el_id']->value]=="O") {?>checked="checked"<?php }?> class="radio" /><label for="select_custom_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("your_range");?>
</label></p>

                    <div class="ty-select-field">
                        <?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_type']=="D") {?>
                            <?php if ($_smarty_tpl->tpl_vars['search']->value['custom_range'][$_smarty_tpl->tpl_vars['filter']->value['feature_id']]['from']||$_smarty_tpl->tpl_vars['search']->value['custom_range'][$_smarty_tpl->tpl_vars['filter']->value['feature_id']]['to']) {?>
                                <?php $_smarty_tpl->tpl_vars["date_extra"] = new Smarty_variable('', null, 0);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->tpl_vars["date_extra"] = new Smarty_variable("disabled=\"disabled\"", null, 0);?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"range_".((string)$_smarty_tpl->tpl_vars['el_id']->value)."_from",'date_name'=>"custom_range[".((string)$_smarty_tpl->tpl_vars['filter']->value['feature_id'])."][from]",'date_val'=>$_smarty_tpl->tpl_vars['search']->value['custom_range'][$_smarty_tpl->tpl_vars['filter']->value['feature_id']]['from'],'extra'=>$_smarty_tpl->tpl_vars['date_extra']->value,'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

                            <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"range_".((string)$_smarty_tpl->tpl_vars['el_id']->value)."_to",'date_name'=>"custom_range[".((string)$_smarty_tpl->tpl_vars['filter']->value['feature_id'])."][to]",'date_val'=>$_smarty_tpl->tpl_vars['search']->value['custom_range'][$_smarty_tpl->tpl_vars['filter']->value['feature_id']]['to'],'extra'=>$_smarty_tpl->tpl_vars['date_extra']->value,'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

                            <input type="hidden" name="custom_range[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
][type]" value="D" />
                        <?php } else { ?>
                            <?php if (!$_smarty_tpl->tpl_vars['filter']->value['slider']) {?>
                                <?php $_smarty_tpl->tpl_vars["from_value"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['search']->value['custom_range'][$_smarty_tpl->tpl_vars['filter']->value['feature_id']]['from'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['search']->value['field_range'][$_smarty_tpl->tpl_vars['filter']->value['field_type']]['from'] : $tmp), null, 0);?>
                                <?php $_smarty_tpl->tpl_vars["to_value"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['search']->value['custom_range'][$_smarty_tpl->tpl_vars['filter']->value['feature_id']]['to'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['search']->value['field_range'][$_smarty_tpl->tpl_vars['filter']->value['field_type']]['to'] : $tmp), null, 0);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->tpl_vars["from_value"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['search']->value['field_range'][$_smarty_tpl->tpl_vars['filter']->value['field_type']]['from'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['filter']->value['range_values']['min'] : $tmp), null, 0);?>
                                <?php $_smarty_tpl->tpl_vars["to_value"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['search']->value['field_range'][$_smarty_tpl->tpl_vars['filter']->value['field_type']]['to'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['filter']->value['range_values']['max'] : $tmp), null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['filter']->value['field_type']=='P') {?>
                                    <?php $_smarty_tpl->tpl_vars["cur"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['search']->value['field_range'][$_smarty_tpl->tpl_vars['filter']->value['field_type']]['cur'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['secondary_currency']->value : $tmp), null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars["orig_from"] = new Smarty_variable($_smarty_tpl->tpl_vars['search']->value['field_range'][$_smarty_tpl->tpl_vars['filter']->value['field_type']]['orig_from'], null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars["orig_to"] = new Smarty_variable($_smarty_tpl->tpl_vars['search']->value['field_range'][$_smarty_tpl->tpl_vars['filter']->value['field_type']]['orig_to'], null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars["orig_cur"] = new Smarty_variable($_smarty_tpl->tpl_vars['search']->value['field_range'][$_smarty_tpl->tpl_vars['filter']->value['field_type']]['orig_cur'], null, 0);?>
                                <?php }?>
                            <?php }?>

                            <input type="text" name="<?php if ($_smarty_tpl->tpl_vars['filter']->value['field_type']) {?>field_range[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['field_type'], ENT_QUOTES, 'UTF-8');?>
]<?php } else { ?>custom_range[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
]<?php }?>[from]" id="range_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_from" size="3" class="ty-input-text-short<?php if ($_smarty_tpl->tpl_vars['search']->value['variants'][$_smarty_tpl->tpl_vars['el_id']->value]!="O") {?> disabled<?php }?>" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['from_value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['variants'][$_smarty_tpl->tpl_vars['el_id']->value]!="O") {?>disabled="disabled"<?php }?> />
                            &nbsp;-&nbsp;
                            <input type="text" name="<?php if ($_smarty_tpl->tpl_vars['filter']->value['field_type']) {?>field_range[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['field_type'], ENT_QUOTES, 'UTF-8');?>
]<?php } else { ?>custom_range[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
]<?php }?>[to]" size="3" class="ty-input-text-short<?php if ($_smarty_tpl->tpl_vars['search']->value['variants'][$_smarty_tpl->tpl_vars['el_id']->value]!="O") {?> disabled<?php }?>" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['to_value']->value, ENT_QUOTES, 'UTF-8');?>
" id="range_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_to" <?php if ($_smarty_tpl->tpl_vars['search']->value['variants'][$_smarty_tpl->tpl_vars['el_id']->value]!="O") {?>disabled="disabled"<?php }?> />
                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['field_type']=='P') {?>
                                <input type="hidden" name="field_range[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['field_type'], ENT_QUOTES, 'UTF-8');?>
][cur]" size="3" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur']->value, ENT_QUOTES, 'UTF-8');?>
" id="range_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_cur" <?php if ($_smarty_tpl->tpl_vars['search']->value['variants'][$_smarty_tpl->tpl_vars['el_id']->value]!="O") {?>disabled="disabled"<?php }?> />
                                <input type="hidden" name="field_range[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['field_type'], ENT_QUOTES, 'UTF-8');?>
][orig_from]" size="3" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orig_from']->value, ENT_QUOTES, 'UTF-8');?>
" id="range_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_orig_from" <?php if ($_smarty_tpl->tpl_vars['search']->value['variants'][$_smarty_tpl->tpl_vars['el_id']->value]!="O") {?>disabled="disabled"<?php }?> />
                                <input type="hidden" name="field_range[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['field_type'], ENT_QUOTES, 'UTF-8');?>
][orig_to]" size="3"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orig_to']->value, ENT_QUOTES, 'UTF-8');?>
" id="range_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_orig_to" <?php if ($_smarty_tpl->tpl_vars['search']->value['variants'][$_smarty_tpl->tpl_vars['el_id']->value]!="O") {?>disabled="disabled"<?php }?> />
                                <input type="hidden" name="field_range[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['field_type'], ENT_QUOTES, 'UTF-8');?>
][orig_cur]" size="3" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orig_cur']->value, ENT_QUOTES, 'UTF-8');?>
" id="range_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_orig_cur" <?php if ($_smarty_tpl->tpl_vars['search']->value['variants'][$_smarty_tpl->tpl_vars['el_id']->value]!="O") {?>disabled="disabled"<?php }?> />
                            <?php }?>
                        <?php }?>
                    </div>
                    <?php }?>
                    <script type="text/javascript">
                    Tygh.$(document).ready(function()<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>


                        var $ = Tygh.$;
                        $('input[type=radio][name="variants[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
]"]').change(function() {
                            var el_id = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
';
                            var flag = (this.value !== 'O');
                            $('#range_' + el_id + '_from').prop('disabled', flag).toggleClass('disabled', flag);
                            $('#range_' + el_id + '_to').prop('disabled', flag).toggleClass('disabled', flag);
                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['field_type']=='P') {?>
                                $('#range_' + el_id + '_cur').prop('disabled', flag);
                                $('#range_' + el_id + '_orig_from').prop('disabled', flag);
                                $('#range_' + el_id + '_orig_to').prop('disabled', flag);
                                $('#range_' + el_id + '_orig_cur').prop('disabled', flag);
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_type']=="D") {?>
                            $('#range_' + el_id + '_from_but').prop('disabled', flag);
                            $('#range_' + el_id + '_to_but').prop('disabled', flag);
                            <?php }?>
                        });
                        <?php if ($_smarty_tpl->tpl_vars['filter']->value['field_type']=='P') {?>
                            $('#range_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_to').change(function() {
                                $('#range_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_orig_cur').val('');
                            });
                            $('#range_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_from').change(function() {
                                $('#range_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_orig_cur').val('');
                            });
                        <?php }?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
                    </script>
                <?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['feature_type']=="C"||$_smarty_tpl->tpl_vars['filter']->value['condition_type']=="C") {?>
                    <?php if ($_smarty_tpl->tpl_vars['filter']->value['condition_type']) {?>
                        <?php $_smarty_tpl->tpl_vars["el_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['filter']->value['field_type'], null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars["el_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['filter']->value['feature_id'], null, 0);?>
                    <?php }?>
                    <div class="ty-select-field">
                        <input type="radio ty-select-field__checkbox" class="radio" name="ch_filters[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
]" id="ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_none" value="" <?php if (!$_smarty_tpl->tpl_vars['search']->value['ch_filters'][$_smarty_tpl->tpl_vars['el_id']->value]) {?>checked="checked"<?php }?> />
                        <label class="ty-select-field__title" for="ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_none"><?php echo $_smarty_tpl->__("none");?>
</label>
                    </div>

                    <div class="ty-select-field">
                        <input type="radio ty-select-field__checkbox" class="radio" name="ch_filters[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
]" id="ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_yes" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['ch_filters'][$_smarty_tpl->tpl_vars['el_id']->value]=="Y") {?>checked="checked"<?php }?> />
                        <label class="ty-select-field__title" for="ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_yes"><?php echo $_smarty_tpl->__("yes");?>
</label>
                    </div>

                    <div class="ty-select-field">
                        <input type="radio ty-select-field__checkbox" class="radio" name="ch_filters[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
]" id="ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_no" value="N" <?php if ($_smarty_tpl->tpl_vars['search']->value['ch_filters'][$_smarty_tpl->tpl_vars['el_id']->value]=="N") {?>checked="checked"<?php }?> />
                        <label class="ty-select-field__title" for="ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_no"><?php echo $_smarty_tpl->__("no");?>
</label>
                    </div>

                    <?php if (!$_smarty_tpl->tpl_vars['filter']->value['condition_type']) {?>
                    <div class="ty-select-field">
                        <input type="radio" class="radio ty-select-field__checkbox" name="ch_filters[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
]" id="ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_any" value="A" <?php if ($_smarty_tpl->tpl_vars['search']->value['ch_filters'][$_smarty_tpl->tpl_vars['el_id']->value]=="A") {?>checked="checked"<?php }?> />
                        <label class="ty-select-field__title" for="ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_any"><?php echo $_smarty_tpl->__("any");?>
</label>
                    </div>
                    <?php }?>

                <?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['feature_type']=="T") {?>
                    <div class="ty-select-field ty-nowrap">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
<input type="text" name="tx_features[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
]" class="ty-filters-search__input-text<?php if ($_smarty_tpl->tpl_vars['filter']->value['prefix']||$_smarty_tpl->tpl_vars['filter']->value['suffix']) {?>-medium<?php }?>" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['tx_features'][$_smarty_tpl->tpl_vars['filter']->value['feature_id']], ENT_QUOTES, 'UTF-8');?>
" /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['suffix'], ENT_QUOTES, 'UTF-8');?>

                    </div>
                <?php }?>
            </div>
        </div>
    <?php } ?>
<?php } ?>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['separate_form']->value) {?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("section", null, null); ob_start(); ?>
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="get" name="advanced_filter_form">

    <?php echo Smarty::$_smarty_vars['capture']['filtering'];?>


    <div class="buttons-container">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[".((string)$_REQUEST['dispatch'])."]",'but_text'=>__("submit")), 0);?>

        &nbsp;<?php echo $_smarty_tpl->__("or");?>
&nbsp;&nbsp;<a class="cm-reset-link"><?php echo $_smarty_tpl->__("reset_filter");?>
</a>
    </div>

    </form>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php if ($_smarty_tpl->tpl_vars['search']->value['variants']) {?>
        <?php $_smarty_tpl->tpl_vars["_collapse"] = new Smarty_variable(true, null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["_collapse"] = new Smarty_variable(false, null, 0);?>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('section_title'=>__("advanced_filter"),'section_content'=>Smarty::$_smarty_vars['capture']['section'],'collapse'=>$_smarty_tpl->tpl_vars['_collapse']->value), 0);?>


<?php } else { ?>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("advanced_filter")), 0);?>

<?php echo Smarty::$_smarty_vars['capture']['filtering'];?>


<?php }?>

<?php } elseif ($_smarty_tpl->tpl_vars['search']->value['features_hash']) {?>
    <input type="hidden" name="features_hash" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['features_hash'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/products/components/product_filters_advanced_form.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/products/components/product_filters_advanced_form.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if ($_smarty_tpl->tpl_vars['filter_features']->value) {?>

<?php echo smarty_function_split(array('data'=>$_smarty_tpl->tpl_vars['filter_features']->value,'size'=>"3",'assign'=>"splitted_filter",'preverse_keys'=>true),$_smarty_tpl);?>


<?php $_smarty_tpl->_capture_stack[0][] = array("filtering", null, null); ob_start(); ?>
<input type="hidden" name="advanced_filter" value="Y" />
<?php if ($_REQUEST['category_id']) {?>
<input type="hidden" name="category_id" value="<?php echo htmlspecialchars($_REQUEST['category_id'], ENT_QUOTES, 'UTF-8');?>
" />
<input type="hidden" name="subcats" value="Y" />
<?php }?>

<?php if ($_REQUEST['variant_id']) {?>
<input type="hidden" name="variant_id" value="<?php echo htmlspecialchars($_REQUEST['variant_id'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?>

<div class="ty-filters-search">
<?php  $_smarty_tpl->tpl_vars["filters_row"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["filters_row"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['splitted_filter']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["filters_row"]->key => $_smarty_tpl->tpl_vars["filters_row"]->value) {
$_smarty_tpl->tpl_vars["filters_row"]->_loop = true;
?>

    <?php  $_smarty_tpl->tpl_vars["filter"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["filter"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filters_row']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["filter"]->key => $_smarty_tpl->tpl_vars["filter"]->value) {
$_smarty_tpl->tpl_vars["filter"]->_loop = true;
?>

        <?php if (!isset($_smarty_tpl->tpl_vars['filter']->value['feature_type'])&&!isset($_smarty_tpl->tpl_vars['filter']->value['condition_type'])) {?>
            <?php continue 1?>
        <?php }?>

        <div class="ty-column4">
            <div class="ty-filters-search__item">

                <div class="ty-filters-search__title"><?php echo htmlspecialchars((($tmp = @(($tmp = @$_smarty_tpl->tpl_vars['filter']->value['filter'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['filter']->value['description'] : $tmp))===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8');?>
</div>

                <?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_type']=="S"||$_smarty_tpl->tpl_vars['filter']->value['feature_type']=="E"||$_smarty_tpl->tpl_vars['filter']->value['feature_type']=="M") {?>
                <div class="ty-filters-search__scroll">
                    <?php  $_smarty_tpl->tpl_vars["range"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["range"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter']->value['ranges']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["range"]->key => $_smarty_tpl->tpl_vars["range"]->value) {
$_smarty_tpl->tpl_vars["range"]->_loop = true;
?>
                        <div class="ty-select-field"><input type="checkbox" class="ty-select-field__checkbox" name="<?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_type']=="M") {?>multiple_<?php }?>variants[]" id="variants_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range']->value['range_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_type']=="M") {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range']->value['range_id'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>[V<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range']->value['range_id'], ENT_QUOTES, 'UTF-8');?>
]<?php }?>" <?php if (smarty_modifier_in_array("[V".((string)$_smarty_tpl->tpl_vars['range']->value['range_id'])."]",$_smarty_tpl->tpl_vars['search']->value['variants'])||smarty_modifier_in_array($_smarty_tpl->tpl_vars['range']->value['range_id'],$_smarty_tpl->tpl_vars['search']->value['multiple_variants'])) {?>checked="checked"<?php }?> /><label class="ty-select-field__title" for="variants_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range']->value['range_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range']->value['range_name'], ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['suffix'], ENT_QUOTES, 'UTF-8');?>
</label></div>
                    <?php } ?>
                </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['feature_type']=="O"||$_smarty_tpl->tpl_vars['filter']->value['feature_type']=="N"||$_smarty_tpl->tpl_vars['filter']->value['feature_type']=="D"||$_smarty_tpl->tpl_vars['filter']->value['condition_type']=="D"||$_smarty_tpl->tpl_vars['filter']->value['condition_type']=="F") {?>
                    <?php if (!$_smarty_tpl->tpl_vars['filter']->value['slider']) {?>
                    <div class="ty-filters-search__scroll">
                    <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['filter']->value['condition_type']) {?>
                            <?php $_smarty_tpl->tpl_vars["el_id"] = new Smarty_variable("field_".((string)$_smarty_tpl->tpl_vars['filter']->value['filter_id']), null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars["el_id"] = new Smarty_variable("feature_".((string)$_smarty_tpl->tpl_vars['filter']->value['feature_id']), null, 0);?>
                        <?php }?>
                        <p<?php if (!$_smarty_tpl->tpl_vars['filter']->value['slider']) {?> class="ty-select-field"<?php }?>><input type="radio" name="variants[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
]" id="no_ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="" checked="checked" class="radio ty-select-field__checkbox" /><label class="ty-select-field__title" for="no_ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("none");?>
</label></p>
                        <?php if (!$_smarty_tpl->tpl_vars['filter']->value['slider']) {?>
                            <?php  $_smarty_tpl->tpl_vars["range"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["range"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['filter']->value['ranges']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["range"]->key => $_smarty_tpl->tpl_vars["range"]->value) {
$_smarty_tpl->tpl_vars["range"]->_loop = true;
?>
                                <?php $_smarty_tpl->tpl_vars["_type"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['filter']->value['field_type'])===null||$tmp==='' ? "R" : $tmp), null, 0);?>
                                <div class="ty-select-field"><input type="radio" class="ty-select-field__checkbox" name="variants[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
]" id="ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range']->value['range_id'], ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['_type']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range']->value['range_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['variants'][$_smarty_tpl->tpl_vars['el_id']->value]==((string)$_smarty_tpl->tpl_vars['_type']->value).((string)$_smarty_tpl->tpl_vars['range']->value['range_id'])) {?>checked="checked"<?php }?> /><label class="ty-select-field__title" for="ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['range']->value['range_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(fn_text_placeholders($_smarty_tpl->tpl_vars['range']->value['range_name']), ENT_QUOTES, 'UTF-8');?>
</label></div>
                            <?php } ?>
                        <?php }?>
                    <?php if (!$_smarty_tpl->tpl_vars['filter']->value['slider']) {?>
                    </div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['filter']->value['condition_type']!="F") {?>
                    <p><input type="radio" name="variants[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
]" id="select_custom_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
" value="O" <?php if ($_smarty_tpl->tpl_vars['search']->value['variants'][$_smarty_tpl->tpl_vars['el_id']->value]=="O") {?>checked="checked"<?php }?> class="radio" /><label for="select_custom_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("your_range");?>
</label></p>

                    <div class="ty-select-field">
                        <?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_type']=="D") {?>
                            <?php if ($_smarty_tpl->tpl_vars['search']->value['custom_range'][$_smarty_tpl->tpl_vars['filter']->value['feature_id']]['from']||$_smarty_tpl->tpl_vars['search']->value['custom_range'][$_smarty_tpl->tpl_vars['filter']->value['feature_id']]['to']) {?>
                                <?php $_smarty_tpl->tpl_vars["date_extra"] = new Smarty_variable('', null, 0);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->tpl_vars["date_extra"] = new Smarty_variable("disabled=\"disabled\"", null, 0);?>
                            <?php }?>
                            <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"range_".((string)$_smarty_tpl->tpl_vars['el_id']->value)."_from",'date_name'=>"custom_range[".((string)$_smarty_tpl->tpl_vars['filter']->value['feature_id'])."][from]",'date_val'=>$_smarty_tpl->tpl_vars['search']->value['custom_range'][$_smarty_tpl->tpl_vars['filter']->value['feature_id']]['from'],'extra'=>$_smarty_tpl->tpl_vars['date_extra']->value,'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

                            <?php echo $_smarty_tpl->getSubTemplate ("common/calendar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('date_id'=>"range_".((string)$_smarty_tpl->tpl_vars['el_id']->value)."_to",'date_name'=>"custom_range[".((string)$_smarty_tpl->tpl_vars['filter']->value['feature_id'])."][to]",'date_val'=>$_smarty_tpl->tpl_vars['search']->value['custom_range'][$_smarty_tpl->tpl_vars['filter']->value['feature_id']]['to'],'extra'=>$_smarty_tpl->tpl_vars['date_extra']->value,'start_year'=>$_smarty_tpl->tpl_vars['settings']->value['Company']['company_start_year']), 0);?>

                            <input type="hidden" name="custom_range[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
][type]" value="D" />
                        <?php } else { ?>
                            <?php if (!$_smarty_tpl->tpl_vars['filter']->value['slider']) {?>
                                <?php $_smarty_tpl->tpl_vars["from_value"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['search']->value['custom_range'][$_smarty_tpl->tpl_vars['filter']->value['feature_id']]['from'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['search']->value['field_range'][$_smarty_tpl->tpl_vars['filter']->value['field_type']]['from'] : $tmp), null, 0);?>
                                <?php $_smarty_tpl->tpl_vars["to_value"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['search']->value['custom_range'][$_smarty_tpl->tpl_vars['filter']->value['feature_id']]['to'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['search']->value['field_range'][$_smarty_tpl->tpl_vars['filter']->value['field_type']]['to'] : $tmp), null, 0);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->tpl_vars["from_value"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['search']->value['field_range'][$_smarty_tpl->tpl_vars['filter']->value['field_type']]['from'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['filter']->value['range_values']['min'] : $tmp), null, 0);?>
                                <?php $_smarty_tpl->tpl_vars["to_value"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['search']->value['field_range'][$_smarty_tpl->tpl_vars['filter']->value['field_type']]['to'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['filter']->value['range_values']['max'] : $tmp), null, 0);?>
                                <?php if ($_smarty_tpl->tpl_vars['filter']->value['field_type']=='P') {?>
                                    <?php $_smarty_tpl->tpl_vars["cur"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['search']->value['field_range'][$_smarty_tpl->tpl_vars['filter']->value['field_type']]['cur'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['secondary_currency']->value : $tmp), null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars["orig_from"] = new Smarty_variable($_smarty_tpl->tpl_vars['search']->value['field_range'][$_smarty_tpl->tpl_vars['filter']->value['field_type']]['orig_from'], null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars["orig_to"] = new Smarty_variable($_smarty_tpl->tpl_vars['search']->value['field_range'][$_smarty_tpl->tpl_vars['filter']->value['field_type']]['orig_to'], null, 0);?>
                                    <?php $_smarty_tpl->tpl_vars["orig_cur"] = new Smarty_variable($_smarty_tpl->tpl_vars['search']->value['field_range'][$_smarty_tpl->tpl_vars['filter']->value['field_type']]['orig_cur'], null, 0);?>
                                <?php }?>
                            <?php }?>

                            <input type="text" name="<?php if ($_smarty_tpl->tpl_vars['filter']->value['field_type']) {?>field_range[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['field_type'], ENT_QUOTES, 'UTF-8');?>
]<?php } else { ?>custom_range[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
]<?php }?>[from]" id="range_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_from" size="3" class="ty-input-text-short<?php if ($_smarty_tpl->tpl_vars['search']->value['variants'][$_smarty_tpl->tpl_vars['el_id']->value]!="O") {?> disabled<?php }?>" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['from_value']->value, ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['search']->value['variants'][$_smarty_tpl->tpl_vars['el_id']->value]!="O") {?>disabled="disabled"<?php }?> />
                            &nbsp;-&nbsp;
                            <input type="text" name="<?php if ($_smarty_tpl->tpl_vars['filter']->value['field_type']) {?>field_range[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['field_type'], ENT_QUOTES, 'UTF-8');?>
]<?php } else { ?>custom_range[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
]<?php }?>[to]" size="3" class="ty-input-text-short<?php if ($_smarty_tpl->tpl_vars['search']->value['variants'][$_smarty_tpl->tpl_vars['el_id']->value]!="O") {?> disabled<?php }?>" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['to_value']->value, ENT_QUOTES, 'UTF-8');?>
" id="range_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_to" <?php if ($_smarty_tpl->tpl_vars['search']->value['variants'][$_smarty_tpl->tpl_vars['el_id']->value]!="O") {?>disabled="disabled"<?php }?> />
                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['field_type']=='P') {?>
                                <input type="hidden" name="field_range[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['field_type'], ENT_QUOTES, 'UTF-8');?>
][cur]" size="3" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cur']->value, ENT_QUOTES, 'UTF-8');?>
" id="range_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_cur" <?php if ($_smarty_tpl->tpl_vars['search']->value['variants'][$_smarty_tpl->tpl_vars['el_id']->value]!="O") {?>disabled="disabled"<?php }?> />
                                <input type="hidden" name="field_range[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['field_type'], ENT_QUOTES, 'UTF-8');?>
][orig_from]" size="3" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orig_from']->value, ENT_QUOTES, 'UTF-8');?>
" id="range_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_orig_from" <?php if ($_smarty_tpl->tpl_vars['search']->value['variants'][$_smarty_tpl->tpl_vars['el_id']->value]!="O") {?>disabled="disabled"<?php }?> />
                                <input type="hidden" name="field_range[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['field_type'], ENT_QUOTES, 'UTF-8');?>
][orig_to]" size="3"  value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orig_to']->value, ENT_QUOTES, 'UTF-8');?>
" id="range_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_orig_to" <?php if ($_smarty_tpl->tpl_vars['search']->value['variants'][$_smarty_tpl->tpl_vars['el_id']->value]!="O") {?>disabled="disabled"<?php }?> />
                                <input type="hidden" name="field_range[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['field_type'], ENT_QUOTES, 'UTF-8');?>
][orig_cur]" size="3" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['orig_cur']->value, ENT_QUOTES, 'UTF-8');?>
" id="range_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_orig_cur" <?php if ($_smarty_tpl->tpl_vars['search']->value['variants'][$_smarty_tpl->tpl_vars['el_id']->value]!="O") {?>disabled="disabled"<?php }?> />
                            <?php }?>
                        <?php }?>
                    </div>
                    <?php }?>
                    <script type="text/javascript">
                    Tygh.$(document).ready(function()<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>


                        var $ = Tygh.$;
                        $('input[type=radio][name="variants[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
]"]').change(function() {
                            var el_id = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
';
                            var flag = (this.value !== 'O');
                            $('#range_' + el_id + '_from').prop('disabled', flag).toggleClass('disabled', flag);
                            $('#range_' + el_id + '_to').prop('disabled', flag).toggleClass('disabled', flag);
                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['field_type']=='P') {?>
                                $('#range_' + el_id + '_cur').prop('disabled', flag);
                                $('#range_' + el_id + '_orig_from').prop('disabled', flag);
                                $('#range_' + el_id + '_orig_to').prop('disabled', flag);
                                $('#range_' + el_id + '_orig_cur').prop('disabled', flag);
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['filter']->value['feature_type']=="D") {?>
                            $('#range_' + el_id + '_from_but').prop('disabled', flag);
                            $('#range_' + el_id + '_to_but').prop('disabled', flag);
                            <?php }?>
                        });
                        <?php if ($_smarty_tpl->tpl_vars['filter']->value['field_type']=='P') {?>
                            $('#range_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_to').change(function() {
                                $('#range_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_orig_cur').val('');
                            });
                            $('#range_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_from').change(function() {
                                $('#range_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_orig_cur').val('');
                            });
                        <?php }?>
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
                    </script>
                <?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['feature_type']=="C"||$_smarty_tpl->tpl_vars['filter']->value['condition_type']=="C") {?>
                    <?php if ($_smarty_tpl->tpl_vars['filter']->value['condition_type']) {?>
                        <?php $_smarty_tpl->tpl_vars["el_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['filter']->value['field_type'], null, 0);?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->tpl_vars["el_id"] = new Smarty_variable($_smarty_tpl->tpl_vars['filter']->value['feature_id'], null, 0);?>
                    <?php }?>
                    <div class="ty-select-field">
                        <input type="radio ty-select-field__checkbox" class="radio" name="ch_filters[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
]" id="ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_none" value="" <?php if (!$_smarty_tpl->tpl_vars['search']->value['ch_filters'][$_smarty_tpl->tpl_vars['el_id']->value]) {?>checked="checked"<?php }?> />
                        <label class="ty-select-field__title" for="ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_none"><?php echo $_smarty_tpl->__("none");?>
</label>
                    </div>

                    <div class="ty-select-field">
                        <input type="radio ty-select-field__checkbox" class="radio" name="ch_filters[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
]" id="ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_yes" value="Y" <?php if ($_smarty_tpl->tpl_vars['search']->value['ch_filters'][$_smarty_tpl->tpl_vars['el_id']->value]=="Y") {?>checked="checked"<?php }?> />
                        <label class="ty-select-field__title" for="ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_yes"><?php echo $_smarty_tpl->__("yes");?>
</label>
                    </div>

                    <div class="ty-select-field">
                        <input type="radio ty-select-field__checkbox" class="radio" name="ch_filters[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
]" id="ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_no" value="N" <?php if ($_smarty_tpl->tpl_vars['search']->value['ch_filters'][$_smarty_tpl->tpl_vars['el_id']->value]=="N") {?>checked="checked"<?php }?> />
                        <label class="ty-select-field__title" for="ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_no"><?php echo $_smarty_tpl->__("no");?>
</label>
                    </div>

                    <?php if (!$_smarty_tpl->tpl_vars['filter']->value['condition_type']) {?>
                    <div class="ty-select-field">
                        <input type="radio" class="radio ty-select-field__checkbox" name="ch_filters[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
]" id="ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_any" value="A" <?php if ($_smarty_tpl->tpl_vars['search']->value['ch_filters'][$_smarty_tpl->tpl_vars['el_id']->value]=="A") {?>checked="checked"<?php }?> />
                        <label class="ty-select-field__title" for="ranges_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['el_id']->value, ENT_QUOTES, 'UTF-8');?>
_any"><?php echo $_smarty_tpl->__("any");?>
</label>
                    </div>
                    <?php }?>

                <?php } elseif ($_smarty_tpl->tpl_vars['filter']->value['feature_type']=="T") {?>
                    <div class="ty-select-field ty-nowrap">
                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['prefix'], ENT_QUOTES, 'UTF-8');?>
<input type="text" name="tx_features[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['feature_id'], ENT_QUOTES, 'UTF-8');?>
]" class="ty-filters-search__input-text<?php if ($_smarty_tpl->tpl_vars['filter']->value['prefix']||$_smarty_tpl->tpl_vars['filter']->value['suffix']) {?>-medium<?php }?>" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['tx_features'][$_smarty_tpl->tpl_vars['filter']->value['feature_id']], ENT_QUOTES, 'UTF-8');?>
" /><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['suffix'], ENT_QUOTES, 'UTF-8');?>

                    </div>
                <?php }?>
            </div>
        </div>
    <?php } ?>
<?php } ?>
</div>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

<?php if ($_smarty_tpl->tpl_vars['separate_form']->value) {?>

    <?php $_smarty_tpl->_capture_stack[0][] = array("section", null, null); ob_start(); ?>
    <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="get" name="advanced_filter_form">

    <?php echo Smarty::$_smarty_vars['capture']['filtering'];?>


    <div class="buttons-container">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[".((string)$_REQUEST['dispatch'])."]",'but_text'=>__("submit")), 0);?>

        &nbsp;<?php echo $_smarty_tpl->__("or");?>
&nbsp;&nbsp;<a class="cm-reset-link"><?php echo $_smarty_tpl->__("reset_filter");?>
</a>
    </div>

    </form>
    <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>

    <?php if ($_smarty_tpl->tpl_vars['search']->value['variants']) {?>
        <?php $_smarty_tpl->tpl_vars["_collapse"] = new Smarty_variable(true, null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["_collapse"] = new Smarty_variable(false, null, 0);?>
    <?php }?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/section.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('section_title'=>__("advanced_filter"),'section_content'=>Smarty::$_smarty_vars['capture']['section'],'collapse'=>$_smarty_tpl->tpl_vars['_collapse']->value), 0);?>


<?php } else { ?>

<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("advanced_filter")), 0);?>

<?php echo Smarty::$_smarty_vars['capture']['filtering'];?>


<?php }?>

<?php } elseif ($_smarty_tpl->tpl_vars['search']->value['features_hash']) {?>
    <input type="hidden" name="features_hash" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value['features_hash'], ENT_QUOTES, 'UTF-8');?>
" />
<?php }?><?php }?><?php }} ?>
