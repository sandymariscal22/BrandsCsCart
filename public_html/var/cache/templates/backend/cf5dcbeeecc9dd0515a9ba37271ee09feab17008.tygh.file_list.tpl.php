<?php /* Smarty version Smarty-3.1.18, created on 2014-10-24 03:09:51
         compiled from "/srv/www/server.com/public_html/design/backend/templates/views/file_editor/components/file_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103496917054498abf59cc22-31876747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf5dcbeeecc9dd0515a9ba37271ee09feab17008' => 
    array (
      0 => '/srv/www/server.com/public_html/design/backend/templates/views/file_editor/components/file_list.tpl',
      1 => 1409124627,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '103496917054498abf59cc22-31876747',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'items' => 0,
    'item' => 0,
    'config' => 0,
    'active_object' => 0,
    'last_object' => 0,
    'uniqid' => 0,
    'file_ext' => 0,
    'render_placed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54498abf6c7737_11195985',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54498abf6c7737_11195985')) {function content_54498abf6c7737_11195985($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_in_array')) include '/srv/www/server.com/public_html/app/functions/smarty_plugins/modifier.in_array.php';
?><?php $_smarty_tpl->tpl_vars['render_placed'] = new Smarty_variable(false, null, 0);?>

<ul>
    <?php  $_smarty_tpl->tpl_vars["item"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["item"]->_loop = false;
 $_smarty_tpl->tpl_vars["item_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["item"]->key => $_smarty_tpl->tpl_vars["item"]->value) {
$_smarty_tpl->tpl_vars["item"]->_loop = true;
 $_smarty_tpl->tpl_vars["item_id"]->value = $_smarty_tpl->tpl_vars["item"]->key;
?>
        <?php $_smarty_tpl->tpl_vars["forbidden"] = new Smarty_variable(false, null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['item']->value['type']=="F") {?>
            <?php $_smarty_tpl->tpl_vars["file_ext"] = new Smarty_variable('', null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['ext']=="gif") {?><?php $_smarty_tpl->tpl_vars["file_ext"] = new Smarty_variable("gif", null, 0);?><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['ext']=="jpg") {?><?php $_smarty_tpl->tpl_vars["file_ext"] = new Smarty_variable("jpg", null, 0);?><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['ext']=="jpeg") {?><?php $_smarty_tpl->tpl_vars["file_ext"] = new Smarty_variable("jpg", null, 0);?><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['ext']=="png") {?><?php $_smarty_tpl->tpl_vars["file_ext"] = new Smarty_variable("png", null, 0);?><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['ext']=="html"||$_smarty_tpl->tpl_vars['item']->value['ext']=="htm") {?><?php $_smarty_tpl->tpl_vars["file_ext"] = new Smarty_variable("html", null, 0);?><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['ext']=="tgz"||$_smarty_tpl->tpl_vars['item']->value['ext']=="zip"||$_smarty_tpl->tpl_vars['item']->value['ext']=="zip2"||$_smarty_tpl->tpl_vars['item']->value['ext']=="gz"||$_smarty_tpl->tpl_vars['item']->value['ext']=="bz"||$_smarty_tpl->tpl_vars['item']->value['ext']=="rar") {?><?php $_smarty_tpl->tpl_vars["file_ext"] = new Smarty_variable("zip", null, 0);?><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['ext']=="tpl"||$_smarty_tpl->tpl_vars['item']->value['ext']=="txt") {?><?php $_smarty_tpl->tpl_vars["file_ext"] = new Smarty_variable("tpl", null, 0);?><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['ext']=="php") {?><?php $_smarty_tpl->tpl_vars["file_ext"] = new Smarty_variable("php", null, 0);?><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['ext']=="css") {?><?php $_smarty_tpl->tpl_vars["file_ext"] = new Smarty_variable("css", null, 0);?><?php }?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['ext']=="js") {?><?php $_smarty_tpl->tpl_vars["file_ext"] = new Smarty_variable("js", null, 0);?><?php }?>
            <?php if (smarty_modifier_in_array($_smarty_tpl->tpl_vars['item']->value['ext'],$_smarty_tpl->tpl_vars['config']->value['forbidden_file_extensions'])) {?><?php $_smarty_tpl->tpl_vars["forbidden"] = new Smarty_variable(true, null, 0);?><?php }?>
        <?php }?>
        <?php $_smarty_tpl->tpl_vars["uniqid"] = new Smarty_variable(uniqid(10), null, 0);?>
        <li class="<?php if ($_smarty_tpl->tpl_vars['item']->value['name']==$_smarty_tpl->tpl_vars['active_object']->value) {?>parent<?php }?> <?php if ($_smarty_tpl->tpl_vars['last_object']->value&&$_smarty_tpl->tpl_vars['item']->value['name']==$_smarty_tpl->tpl_vars['active_object']->value) {?>active<?php }?>">
            <a data-ca-item-full-path="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['full_path'], ENT_QUOTES, 'UTF-8');?>
" data-ca-item-path="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['path'], ENT_QUOTES, 'UTF-8');?>
" data-ca-item-filename="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['item']->value['ext']) {?>data-ca-item-ext="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['ext'], ENT_QUOTES, 'UTF-8');?>
"<?php }?> data-ca-item-type="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['type'], ENT_QUOTES, 'UTF-8');?>
" data-ca-item-perms="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['perms'], ENT_QUOTES, 'UTF-8');?>
" class="cm-te-file" id="file_id_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['uniqid']->value, ENT_QUOTES, 'UTF-8');?>
">
                <span class="overlay"></span>
                <span class="item">
                <?php if ($_smarty_tpl->tpl_vars['item']->value['type']=="D") {?>
                    <i class="exicon-expand"></i>
                <?php } elseif ($_smarty_tpl->tpl_vars['file_ext']->value=="gif"||$_smarty_tpl->tpl_vars['file_ext']->value=="jpg"||$_smarty_tpl->tpl_vars['file_ext']->value=="jpeg"||$_smarty_tpl->tpl_vars['file_ext']->value=="png") {?>
                    <i class="icon-picture"></i>
                <?php } else { ?>
                    <i class="icon-file"></i>
                <?php }?>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
                </span>
            </a>

            <?php if ($_smarty_tpl->tpl_vars['item']->value['name']==$_smarty_tpl->tpl_vars['active_object']->value) {?>
                <?php $_smarty_tpl->tpl_vars['render_placed'] = new Smarty_variable(true, null, 0);?>
                <!--render_place-->
            <?php }?>
        </li>
    <?php } ?>

    <?php if (!$_smarty_tpl->tpl_vars['render_placed']->value) {?> 
        <!--render_place-->
    <?php }?>
</ul><?php }} ?>
