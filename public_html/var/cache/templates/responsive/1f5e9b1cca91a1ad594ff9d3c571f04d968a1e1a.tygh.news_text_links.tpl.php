<?php /* Smarty version Smarty-3.1.18, created on 2014-10-23 19:52:32
         compiled from "/srv/www/server.com/public_html/design/themes/responsive/templates/addons/news_and_emails/blocks/news_text_links.tpl" */ ?>
<?php /*%%SmartyHeaderCode:54965637254492440066fd4-42211796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f5e9b1cca91a1ad594ff9d3c571f04d968a1e1a' => 
    array (
      0 => '/srv/www/server.com/public_html/design/themes/responsive/templates/addons/news_and_emails/blocks/news_text_links.tpl',
      1 => 1413417021,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '54965637254492440066fd4-42211796',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'items' => 0,
    'news' => 0,
    'settings' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5449244011d644_48112067',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5449244011d644_48112067')) {function content_5449244011d644_48112067($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/srv/www/server.com/public_html/app/functions/smarty_plugins/modifier.date_format.php';
if (!is_callable('smarty_function_set_id')) include '/srv/www/server.com/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('view_all','view_all'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
<div class="ty-news-text-links">
    <ul>
    <?php  $_smarty_tpl->tpl_vars["news"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["news"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["news"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["news"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["news"]->key => $_smarty_tpl->tpl_vars["news"]->value) {
$_smarty_tpl->tpl_vars["news"]->_loop = true;
 $_smarty_tpl->tpl_vars["news"]->iteration++;
 $_smarty_tpl->tpl_vars["news"]->last = $_smarty_tpl->tpl_vars["news"]->iteration === $_smarty_tpl->tpl_vars["news"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["site_news"]['last'] = $_smarty_tpl->tpl_vars["news"]->last;
?>
        <li class="ty-news-text-links__item">
            <div class="ty-news-text-links__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['news']->value['date'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), ENT_QUOTES, 'UTF-8');?>
</div>
            <a href="<?php echo htmlspecialchars(fn_url("news.view?news_id=".((string)$_smarty_tpl->tpl_vars['news']->value['news_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-news-text-links__a"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['news']->value['news'], ENT_QUOTES, 'UTF-8');?>
</a>
            <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['site_news']['last']) {?>
                <hr class="ty-news-text-links__delim" />
            <?php }?>
        </li>
    <?php } ?>
    </ul>

    <div class="ty-mtb-xs ty-right">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"news.list",'but_text'=>__("view_all"),'but_role'=>"text",'but_meta'=>"news-ty-text-links__button"), 0);?>

    </div>
</div>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/news_and_emails/blocks/news_text_links.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/news_and_emails/blocks/news_text_links.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>

<?php if ($_smarty_tpl->tpl_vars['items']->value) {?>
<div class="ty-news-text-links">
    <ul>
    <?php  $_smarty_tpl->tpl_vars["news"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["news"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars["news"]->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars["news"]->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars["news"]->key => $_smarty_tpl->tpl_vars["news"]->value) {
$_smarty_tpl->tpl_vars["news"]->_loop = true;
 $_smarty_tpl->tpl_vars["news"]->iteration++;
 $_smarty_tpl->tpl_vars["news"]->last = $_smarty_tpl->tpl_vars["news"]->iteration === $_smarty_tpl->tpl_vars["news"]->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["site_news"]['last'] = $_smarty_tpl->tpl_vars["news"]->last;
?>
        <li class="ty-news-text-links__item">
            <div class="ty-news-text-links__date"><?php echo htmlspecialchars(smarty_modifier_date_format($_smarty_tpl->tpl_vars['news']->value['date'],$_smarty_tpl->tpl_vars['settings']->value['Appearance']['date_format']), ENT_QUOTES, 'UTF-8');?>
</div>
            <a href="<?php echo htmlspecialchars(fn_url("news.view?news_id=".((string)$_smarty_tpl->tpl_vars['news']->value['news_id'])), ENT_QUOTES, 'UTF-8');?>
" class="ty-news-text-links__a"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['news']->value['news'], ENT_QUOTES, 'UTF-8');?>
</a>
            <?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['site_news']['last']) {?>
                <hr class="ty-news-text-links__delim" />
            <?php }?>
        </li>
    <?php } ?>
    </ul>

    <div class="ty-mtb-xs ty-right">
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"news.list",'but_text'=>__("view_all"),'but_role'=>"text",'but_meta'=>"news-ty-text-links__button"), 0);?>

    </div>
</div>
<?php }?><?php }?><?php }} ?>
