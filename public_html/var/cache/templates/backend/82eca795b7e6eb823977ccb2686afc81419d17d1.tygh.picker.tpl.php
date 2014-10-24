<?php /* Smarty version Smarty-3.1.18, created on 2014-10-23 19:50:55
         compiled from "/srv/www/server.com/public_html/design/backend/templates/addons/news_and_emails/pickers/news/picker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:816941838544923df7ffaa4-69260934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82eca795b7e6eb823977ccb2686afc81419d17d1' => 
    array (
      0 => '/srv/www/server.com/public_html/design/backend/templates/addons/news_and_emails/pickers/news/picker.tpl',
      1 => 1409124627,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '816941838544923df7ffaa4-69260934',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data_id' => 0,
    'rnd' => 0,
    'view_mode' => 0,
    'item_ids' => 0,
    'type' => 0,
    'start_pos' => 0,
    'extra_var' => 0,
    'no_container' => 0,
    'picker_view' => 0,
    'display' => 0,
    'picker_for' => 0,
    'checkbox_name' => 0,
    'but_text' => 0,
    'input_name' => 0,
    'positions' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'hide_link' => 0,
    'p_id' => 0,
    'no_item_text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_544923df97f308_51485704',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544923df97f308_51485704')) {function content_544923df97f308_51485704($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/srv/www/server.com/public_html/app/lib/other/smarty/plugins/function.math.php';
if (!is_callable('smarty_function_script')) include '/srv/www/server.com/public_html/app/functions/smarty_plugins/function.script.php';
?><?php
fn_preload_lang_vars(array('add_news','add_news','position_short','name','no_items'));
?>

<?php $_smarty_tpl->tpl_vars["data_id"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['data_id']->value)===null||$tmp==='' ? "pages_list" : $tmp), null, 0);?>
<?php echo smarty_function_math(array('equation'=>"rand()",'assign'=>"rnd"),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars["data_id"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['data_id']->value)."_".((string)$_smarty_tpl->tpl_vars['rnd']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars["view_mode"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['view_mode']->value)===null||$tmp==='' ? "mixed" : $tmp), null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['item_ids']->value&&!is_array($_smarty_tpl->tpl_vars['item_ids']->value)&&$_smarty_tpl->tpl_vars['type']->value!="table") {?>
        <?php $_smarty_tpl->tpl_vars["item_ids"] = new Smarty_variable(explode(",",$_smarty_tpl->tpl_vars['item_ids']->value), null, 0);?>
<?php }?>
<?php $_smarty_tpl->tpl_vars["start_pos"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['start_pos']->value)===null||$tmp==='' ? 0 : $tmp), null, 0);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/picker.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['view_mode']->value!="list") {?>

    <div class="clearfix">
        <?php if ($_smarty_tpl->tpl_vars['extra_var']->value) {?>
            <?php $_smarty_tpl->tpl_vars["extra_var"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['extra_var']->value), null, 0);?>
        <?php }?>
        
        <?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?><div class="buttons-container pull-right"><?php }?><?php if ($_smarty_tpl->tpl_vars['picker_view']->value) {?>[<?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_href'=>fn_url("news.picker?display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&picker_for=".((string)$_smarty_tpl->tpl_vars['picker_for']->value)."&extra=".((string)$_smarty_tpl->tpl_vars['extra_var']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value)."&data_id=".((string)$_smarty_tpl->tpl_vars['data_id']->value)),'but_text'=>__("add_news"),'but_role'=>"add",'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_meta'=>"btn pull-right cm-dialog-opener",'but_icon'=>"icon-plus"), 0);?>

        <?php if ($_smarty_tpl->tpl_vars['picker_view']->value) {?>]<?php }?><?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?></div><?php }?>
        
        <div class="hidden" id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_news") : $tmp), ENT_QUOTES, 'UTF-8');?>
">
        </div>
    </div>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value!="button") {?>
    <input id="n<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_ids" type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['input_name']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?><?php echo htmlspecialchars(implode(",",$_smarty_tpl->tpl_vars['item_ids']->value), ENT_QUOTES, 'UTF-8');?>
<?php }?>" />
    <table width="100%" class="table table-middle">
    <thead>
    <tr>
        <?php if ($_smarty_tpl->tpl_vars['positions']->value) {?><th><?php echo $_smarty_tpl->__("position_short");?>
</th><?php }?>
        <th><?php echo $_smarty_tpl->__("name");?>
</th>
        <th>&nbsp;</th>
    </tr>
    </thead>
    <tbody id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php if (!$_smarty_tpl->tpl_vars['item_ids']->value) {?> class="hidden"<?php }?>>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/news_and_emails/pickers/news/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('news_id'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."news_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'clone'=>true,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value,'hide_input'=>true,'position_field'=>$_smarty_tpl->tpl_vars['positions']->value,'position'=>"0"), 0);?>

    <?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?>
    <?php  $_smarty_tpl->tpl_vars["p_id"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["p_id"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["p_id"]->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["items"]['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars["p_id"]->key => $_smarty_tpl->tpl_vars["p_id"]->value) {
$_smarty_tpl->tpl_vars["p_id"]->_loop = true;
 $_smarty_tpl->tpl_vars["p_id"]->index++;
 $_smarty_tpl->tpl_vars["p_id"]->first = $_smarty_tpl->tpl_vars["p_id"]->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["items"]['first'] = $_smarty_tpl->tpl_vars["p_id"]->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["items"]['iteration']++;
?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/news_and_emails/pickers/news/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('news_id'=>$_smarty_tpl->tpl_vars['p_id']->value,'holder'=>$_smarty_tpl->tpl_vars['data_id']->value,'input_name'=>$_smarty_tpl->tpl_vars['input_name']->value,'hide_link'=>$_smarty_tpl->tpl_vars['hide_link']->value,'hide_input'=>true,'first_item'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['items']['first'],'position_field'=>$_smarty_tpl->tpl_vars['positions']->value,'position'=>$_smarty_tpl->getVariable('smarty')->value['foreach']['items']['iteration']+$_smarty_tpl->tpl_vars['start_pos']->value), 0);?>

    <?php } ?>
    <?php }?>
    </tbody>
    <tbody id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_no_item"<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?> class="hidden"<?php }?>>
    <tr class="no-items">
        <td colspan="<?php if ($_smarty_tpl->tpl_vars['positions']->value) {?>3<?php } else { ?>2<?php }?>"><p><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['no_item_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("no_items") : $tmp), ENT_QUOTES, 'UTF-8');?>
</p></td>
    </tr>
    </tbody>
    </table>
<?php }?><?php }} ?>
