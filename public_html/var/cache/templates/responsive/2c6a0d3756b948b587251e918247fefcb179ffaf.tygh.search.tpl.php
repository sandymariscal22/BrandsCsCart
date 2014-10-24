<?php /* Smarty version Smarty-3.1.18, created on 2014-10-23 23:20:11
         compiled from "/srv/www/server.com/public_html/design/themes/responsive/templates/addons/store_locator/views/store_locator/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1440208858544954eb05e3d1-71083812%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c6a0d3756b948b587251e918247fefcb179ffaf' => 
    array (
      0 => '/srv/www/server.com/public_html/design/themes/responsive/templates/addons/store_locator/views/store_locator/search.tpl',
      1 => 1413417024,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1440208858544954eb05e3d1-71083812',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'addons' => 0,
    'map_provider' => 0,
    'store_locations' => 0,
    'map_customer_templates' => 0,
    'map_container' => 0,
    'loc' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_544954eb1c3558_87145065',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_544954eb1c3558_87145065')) {function content_544954eb1c3558_87145065($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/srv/www/server.com/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('view_on_map','all_stores','view_on_map','no_data','store_locator','view_on_map','all_stores','view_on_map','no_data','store_locator'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->tpl_vars["map_provider"] = new Smarty_variable($_smarty_tpl->tpl_vars['addons']->value['store_locator']['map_provider'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["map_provider_api"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['map_provider']->value)."_map_api", null, 0);?>
<?php $_smarty_tpl->tpl_vars["map_customer_templates"] = new Smarty_variable(fn_get_store_locator_map_templates("C"), null, 0);?>
<?php $_smarty_tpl->tpl_vars["map_container"] = new Smarty_variable("map_canvas", null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['store_locations']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['map_customer_templates']->value&&$_smarty_tpl->tpl_vars['map_customer_templates']->value[$_smarty_tpl->tpl_vars['map_provider']->value]) {?>
        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['map_customer_templates']->value[$_smarty_tpl->tpl_vars['map_provider']->value], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>

    <div class="ty-store-location">
        <div class="ty-store-location__map-wrapper" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map_container']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
        <div class="ty-wysiwyg-content ty-store-location__locations-wrapper" id="stores_list_box">
            <?php  $_smarty_tpl->tpl_vars['loc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loc']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['store_locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loc']->key => $_smarty_tpl->tpl_vars['loc']->value) {
$_smarty_tpl->tpl_vars['loc']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['loc']->key;
?>
                <div class="ty-store-location__item" id="loc_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
">
                    <h3 class="ty-store-location__item-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h3>
                    
                    <span class="ty-store-location__item-desc"><?php echo $_smarty_tpl->tpl_vars['loc']->value['description'];?>
</span>

                    <?php if ($_smarty_tpl->tpl_vars['loc']->value['city']||$_smarty_tpl->tpl_vars['loc']->value['country_title']) {?>
                        <span class="ty-store-location__item-country"><?php if ($_smarty_tpl->tpl_vars['loc']->value['city']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['city'], ENT_QUOTES, 'UTF-8');?>
, <?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['country_title'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php }?>
                    
                    <div class="ty-store-location__item-view">
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_meta'=>"cm-map-view-location ty-btn__tertiary",'but_text'=>__("view_on_map"),'but_extra'=>"data-ca-latitude=".((string)$_smarty_tpl->tpl_vars['loc']->value['latitude'])." data-ca-longitude=".((string)$_smarty_tpl->tpl_vars['loc']->value['longitude'])), 0);?>

                    </div>
                </div>
                <?php if (count($_smarty_tpl->tpl_vars['store_locations']->value)>1) {?>
                    <hr />
                <?php }?>
            <?php } ?>

            <?php if (count($_smarty_tpl->tpl_vars['store_locations']->value)>1) {?>
                <div class="ty-store-location__item ty-store-location__item-all_stores">
                    <h3 class="ty-store-location__item-title"><?php echo $_smarty_tpl->__("all_stores");?>
</h3>
                    <div class="ty-store-location__item-view"><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_meta'=>"cm-map-view-locations ty-btn__tertiary",'but_text'=>__("view_on_map")), 0);?>
</div>
                </div>
            <?php }?>
        </div>
    </div>
<?php } else { ?>
    <p class="ty-no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo $_smarty_tpl->__("store_locator");?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/store_locator/views/store_locator/search.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/store_locator/views/store_locator/search.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php $_smarty_tpl->tpl_vars["map_provider"] = new Smarty_variable($_smarty_tpl->tpl_vars['addons']->value['store_locator']['map_provider'], null, 0);?>
<?php $_smarty_tpl->tpl_vars["map_provider_api"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['map_provider']->value)."_map_api", null, 0);?>
<?php $_smarty_tpl->tpl_vars["map_customer_templates"] = new Smarty_variable(fn_get_store_locator_map_templates("C"), null, 0);?>
<?php $_smarty_tpl->tpl_vars["map_container"] = new Smarty_variable("map_canvas", null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['store_locations']->value) {?>
    <?php if ($_smarty_tpl->tpl_vars['map_customer_templates']->value&&$_smarty_tpl->tpl_vars['map_customer_templates']->value[$_smarty_tpl->tpl_vars['map_provider']->value]) {?>
        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['map_customer_templates']->value[$_smarty_tpl->tpl_vars['map_provider']->value], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>

    <div class="ty-store-location">
        <div class="ty-store-location__map-wrapper" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['map_container']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
        <div class="ty-wysiwyg-content ty-store-location__locations-wrapper" id="stores_list_box">
            <?php  $_smarty_tpl->tpl_vars['loc'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loc']->_loop = false;
 $_smarty_tpl->tpl_vars['num'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['store_locations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loc']->key => $_smarty_tpl->tpl_vars['loc']->value) {
$_smarty_tpl->tpl_vars['loc']->_loop = true;
 $_smarty_tpl->tpl_vars['num']->value = $_smarty_tpl->tpl_vars['loc']->key;
?>
                <div class="ty-store-location__item" id="loc_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['store_location_id'], ENT_QUOTES, 'UTF-8');?>
">
                    <h3 class="ty-store-location__item-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h3>
                    
                    <span class="ty-store-location__item-desc"><?php echo $_smarty_tpl->tpl_vars['loc']->value['description'];?>
</span>

                    <?php if ($_smarty_tpl->tpl_vars['loc']->value['city']||$_smarty_tpl->tpl_vars['loc']->value['country_title']) {?>
                        <span class="ty-store-location__item-country"><?php if ($_smarty_tpl->tpl_vars['loc']->value['city']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['city'], ENT_QUOTES, 'UTF-8');?>
, <?php }?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['loc']->value['country_title'], ENT_QUOTES, 'UTF-8');?>
</span>
                    <?php }?>
                    
                    <div class="ty-store-location__item-view">
                        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_meta'=>"cm-map-view-location ty-btn__tertiary",'but_text'=>__("view_on_map"),'but_extra'=>"data-ca-latitude=".((string)$_smarty_tpl->tpl_vars['loc']->value['latitude'])." data-ca-longitude=".((string)$_smarty_tpl->tpl_vars['loc']->value['longitude'])), 0);?>

                    </div>
                </div>
                <?php if (count($_smarty_tpl->tpl_vars['store_locations']->value)>1) {?>
                    <hr />
                <?php }?>
            <?php } ?>

            <?php if (count($_smarty_tpl->tpl_vars['store_locations']->value)>1) {?>
                <div class="ty-store-location__item ty-store-location__item-all_stores">
                    <h3 class="ty-store-location__item-title"><?php echo $_smarty_tpl->__("all_stores");?>
</h3>
                    <div class="ty-store-location__item-view"><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_role'=>"text",'but_meta'=>"cm-map-view-locations ty-btn__tertiary",'but_text'=>__("view_on_map")), 0);?>
</div>
                </div>
            <?php }?>
        </div>
    </div>
<?php } else { ?>
    <p class="ty-no-items"><?php echo $_smarty_tpl->__("no_data");?>
</p>
<?php }?>

<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox_title", null, null); ob_start(); ?><?php echo $_smarty_tpl->__("store_locator");?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php }?><?php }} ?>
