<?php /* Smarty version Smarty-3.1.18, created on 2014-10-23 19:51:49
         compiled from "/srv/www/server.com/public_html/design/backend/templates/addons/news_and_emails/pickers/news/picker_contents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184047390854492415381573-84419258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22b2afc8717d75bd9e682fb102fc50329c2a3327' => 
    array (
      0 => '/srv/www/server.com/public_html/design/backend/templates/addons/news_and_emails/pickers/news/picker_contents.tpl',
      1 => 1409124627,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '184047390854492415381573-84419258',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'news' => 0,
    'n' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5449241547ee88_36790463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5449241547ee88_36790463')) {function content_5449241547ee88_36790463($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('text_items_added','news','no_data','add_news','add_news_and_close'));
?>

<?php if (!$_REQUEST['extra']) {?>
<script type="text/javascript">
(function(_, $) {
    _.tr('text_items_added', '<?php echo strtr($_smarty_tpl->__("text_items_added"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');

    $.ceEvent('on', 'ce.formpost_news_form', function(frm, elm) {
        var news = {};

        if ($('input.cm-item:checked', frm).length > 0) {
            $('input.cm-item:checked', frm).each( function() {
                var id = $(this).val();
                news[id] = $('#news_' + id).text();
            });

            
            $.cePicker('add_js_item', frm.data('caResultId'), news, 'n', {
                '{news_id}': '%id',
                '{news}': '%item'
            });
            

            $.ceNotification('show', {
                type: 'N', 
                title: _.tr('notice'), 
                message: _.tr('text_items_added'), 
                message_state: 'I'
            });
        }

        return false;        
    });
}(Tygh, Tygh.$));
</script>
<?php }?>

<form action="<?php echo htmlspecialchars(fn_url($_REQUEST['extra']), ENT_QUOTES, 'UTF-8');?>
" data-ca-result-id="<?php echo htmlspecialchars($_REQUEST['data_id'], ENT_QUOTES, 'UTF-8');?>
" method="post" name="news_form" class="form-edit">

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>"pagination_".((string)$_REQUEST['content_id'])), 0);?>


<?php if ($_smarty_tpl->tpl_vars['news']->value) {?>
<table width="100%" class="table table-middle">
<thead>
<tr>
    <th>
        <?php echo $_smarty_tpl->getSubTemplate ("common/check_items.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </th>
    <th><?php echo $_smarty_tpl->__("news");?>
</th>
</tr>
</thead>
<tbody>
<?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['news']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value) {
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
<tr>
    <td>
        <input type="checkbox" name="<?php echo htmlspecialchars((($tmp = @$_REQUEST['checkbox_name'])===null||$tmp==='' ? "news_ids" : $tmp), ENT_QUOTES, 'UTF-8');?>
[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['n']->value['news_id'], ENT_QUOTES, 'UTF-8');?>
" class="cm-item" />
    </td>
    <td width="100%" id="news_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['n']->value['news_id'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['n']->value['news'], ENT_QUOTES, 'UTF-8');?>
</td>
</tr>
<?php } ?>
</tbody>
</table>
<?php } else { ?>
    <p class="no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php echo $_smarty_tpl->getSubTemplate ("common/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('div_id'=>"pagination_".((string)$_REQUEST['content_id'])), 0);?>


<?php if ($_smarty_tpl->tpl_vars['news']->value) {?>
<div class="buttons-container">
    <?php echo $_smarty_tpl->getSubTemplate ("buttons/add_close.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("add_news"),'but_close_text'=>__("add_news_and_close"),'is_js'=>fn_is_empty($_REQUEST['extra'])), 0);?>

</div>
<?php }?>
</form>
<?php }} ?>
