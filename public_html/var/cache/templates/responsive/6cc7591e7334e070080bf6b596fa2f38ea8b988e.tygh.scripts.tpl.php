<?php /* Smarty version Smarty-3.1.18, created on 2014-10-16 03:56:48
         compiled from "/srv/www/server.com/public_html/design/themes/responsive/templates/common/scripts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:665940044543f09c0933f94-15882684%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cc7591e7334e070080bf6b596fa2f38ea8b988e' => 
    array (
      0 => '/srv/www/server.com/public_html/design/themes/responsive/templates/common/scripts.tpl',
      1 => 1413417015,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '665940044543f09c0933f94-15882684',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'config' => 0,
    'settings' => 0,
    'primary_currency' => 0,
    'currencies' => 0,
    'secondary_currency' => 0,
    'images_dir' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_543f09c0d9db93_31734406',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543f09c0d9db93_31734406')) {function content_543f09c0d9db93_31734406($_smarty_tpl) {?><?php if (!is_callable('smarty_block_scripts')) include '/srv/www/server.com/public_html/app/functions/smarty_plugins/block.scripts.php';
if (!is_callable('smarty_function_script')) include '/srv/www/server.com/public_html/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_block_hook')) include '/srv/www/server.com/public_html/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/srv/www/server.com/public_html/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('cannot_buy','no_products_selected','error_no_items_selected','delete_confirmation','text_out_of_stock','items','text_required_group_product','save','close','notice','warning','error','text_are_you_sure_to_proceed','text_invalid_url','error_validator_email','error_validator_phone','error_validator_integer','error_validator_multiple','error_validator_password','error_validator_required','error_validator_zipcode','error_validator_message','text_page_loading','error_ajax','text_changes_not_saved','text_data_changed','more','cannot_buy','no_products_selected','error_no_items_selected','delete_confirmation','text_out_of_stock','items','text_required_group_product','save','close','notice','warning','error','text_are_you_sure_to_proceed','text_invalid_url','error_validator_email','error_validator_phone','error_validator_integer','error_validator_multiple','error_validator_password','error_validator_required','error_validator_zipcode','error_validator_message','text_page_loading','error_ajax','text_changes_not_saved','text_data_changed','more'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('scripts', array()); $_block_repeat=true; echo smarty_block_scripts(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<?php echo smarty_function_script(array('src'=>"js/lib/jquery/jquery.min.js"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/tygh/core.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/ajax.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/history.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/autonumeric/autoNumeric.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/jqueryui/jquery-ui.custom.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/tools/tooltip.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/appear/jquery.appear-1.1.1.js"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/tygh/responsive.js"),$_smarty_tpl);?>


<script type="text/javascript">
(function(_, $) {

        _.tr({
            cannot_buy: '<?php echo strtr($_smarty_tpl->__("cannot_buy"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            no_products_selected: '<?php echo strtr($_smarty_tpl->__("no_products_selected"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            error_no_items_selected: '<?php echo strtr($_smarty_tpl->__("error_no_items_selected"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            delete_confirmation: '<?php echo strtr($_smarty_tpl->__("delete_confirmation"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            text_out_of_stock: '<?php echo strtr($_smarty_tpl->__("text_out_of_stock"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            items: '<?php echo strtr($_smarty_tpl->__("items"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            text_required_group_product: '<?php echo strtr($_smarty_tpl->__("text_required_group_product"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            save: '<?php echo strtr($_smarty_tpl->__("save"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            close: '<?php echo strtr($_smarty_tpl->__("close"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            notice: '<?php echo strtr($_smarty_tpl->__("notice"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            warning: '<?php echo strtr($_smarty_tpl->__("warning"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            error: '<?php echo strtr($_smarty_tpl->__("error"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            text_are_you_sure_to_proceed: '<?php echo strtr($_smarty_tpl->__("text_are_you_sure_to_proceed"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            text_invalid_url: '<?php echo strtr($_smarty_tpl->__("text_invalid_url"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            error_validator_email: '<?php echo strtr($_smarty_tpl->__("error_validator_email"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            error_validator_phone: '<?php echo strtr($_smarty_tpl->__("error_validator_phone"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            error_validator_integer: '<?php echo strtr($_smarty_tpl->__("error_validator_integer"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            error_validator_multiple: '<?php echo strtr($_smarty_tpl->__("error_validator_multiple"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            error_validator_password: '<?php echo strtr($_smarty_tpl->__("error_validator_password"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            error_validator_required: '<?php echo strtr($_smarty_tpl->__("error_validator_required"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            error_validator_zipcode: '<?php echo strtr($_smarty_tpl->__("error_validator_zipcode"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            error_validator_message: '<?php echo strtr($_smarty_tpl->__("error_validator_message"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            text_page_loading: '<?php echo strtr($_smarty_tpl->__("text_page_loading"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            error_ajax: '<?php echo strtr($_smarty_tpl->__("error_ajax"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            text_changes_not_saved: '<?php echo strtr($_smarty_tpl->__("text_changes_not_saved"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            text_data_changed: '<?php echo strtr($_smarty_tpl->__("text_data_changed"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            more: '<?php echo strtr($_smarty_tpl->__("more"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
        });
        
        $.extend(_, {
            index_script: '<?php echo strtr($_smarty_tpl->tpl_vars['config']->value['customer_index'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            changes_warning: /*'<?php echo strtr($_smarty_tpl->tpl_vars['settings']->value['Appearance']['changes_warning'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'*/'N',
            currencies: {
                'primary': {
                    'decimals_separator': '<?php echo strtr($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['decimals_separator'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    'thousands_separator': '<?php echo strtr($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['thousands_separator'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    'decimals': '<?php echo strtr($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['decimals'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
                },
                'secondary': {
                    'decimals_separator': '<?php echo strtr($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['decimals_separator'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    'thousands_separator': '<?php echo strtr($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['thousands_separator'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    'decimals': '<?php echo strtr($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['decimals'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    'coefficient': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['coefficient'], ENT_QUOTES, 'UTF-8');?>
'
                }
            },
            default_editor: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_wysiwyg_editor'], ENT_QUOTES, 'UTF-8');?>
',
            default_previewer: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer'], ENT_QUOTES, 'UTF-8');?>
',    
            current_path: '<?php echo strtr($_smarty_tpl->tpl_vars['config']->value['current_path'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            current_location: '<?php echo strtr($_smarty_tpl->tpl_vars['config']->value['current_location'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            images_dir: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
',
            notice_displaying_time: <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['notice_displaying_time']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Appearance']['notice_displaying_time'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>0<?php }?>,
            cart_language: '<?php echo htmlspecialchars(@constant('CART_LANGUAGE'), ENT_QUOTES, 'UTF-8');?>
',
            default_language: '<?php echo htmlspecialchars(@constant('DEFAULT_LANGUAGE'), ENT_QUOTES, 'UTF-8');?>
',
            cart_prices_w_taxes: <?php if (($_smarty_tpl->tpl_vars['settings']->value['Appearance']['cart_prices_w_taxes']=='Y')) {?>true<?php } else { ?>false<?php }?>,
            translate_mode: <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['translation']) {?>true<?php } else { ?>false<?php }?>,
            theme_name: '<?php echo strtr($_smarty_tpl->tpl_vars['settings']->value['theme_name'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            regexp: [],
            current_url: '<?php echo strtr($_smarty_tpl->tpl_vars['config']->value['current_url'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            current_host: '<?php echo strtr($_smarty_tpl->tpl_vars['config']->value['current_host'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            init_context: '<?php echo strtr($_REQUEST['init_context'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
        });
    
    <?php if (!$_REQUEST['init_context']) {?>

        $(document).ready(function(){
            $.runCart('C');
        });

    <?php }?>

<?php if ($_smarty_tpl->tpl_vars['config']->value['tweaks']['anti_csrf']) {?>
    // CSRF form protection key
    _.security_hash = '<?php echo htmlspecialchars(fn_generate_security_hash(''), ENT_QUOTES, 'UTF-8');?>
';
<?php }?>
}(Tygh, Tygh.$));
</script>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:scripts")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:scripts"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:scripts"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_scripts(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="common/scripts.tpl" id="<?php echo smarty_function_set_id(array('name'=>"common/scripts.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit ty-icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('scripts', array()); $_block_repeat=true; echo smarty_block_scripts(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<?php echo smarty_function_script(array('src'=>"js/lib/jquery/jquery.min.js"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/tygh/core.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/ajax.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/tygh/history.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/autonumeric/autoNumeric.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/jqueryui/jquery-ui.custom.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/tools/tooltip.min.js"),$_smarty_tpl);?>

<?php echo smarty_function_script(array('src'=>"js/lib/appear/jquery.appear-1.1.1.js"),$_smarty_tpl);?>


<?php echo smarty_function_script(array('src'=>"js/tygh/responsive.js"),$_smarty_tpl);?>


<script type="text/javascript">
(function(_, $) {

        _.tr({
            cannot_buy: '<?php echo strtr($_smarty_tpl->__("cannot_buy"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            no_products_selected: '<?php echo strtr($_smarty_tpl->__("no_products_selected"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            error_no_items_selected: '<?php echo strtr($_smarty_tpl->__("error_no_items_selected"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            delete_confirmation: '<?php echo strtr($_smarty_tpl->__("delete_confirmation"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            text_out_of_stock: '<?php echo strtr($_smarty_tpl->__("text_out_of_stock"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            items: '<?php echo strtr($_smarty_tpl->__("items"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            text_required_group_product: '<?php echo strtr($_smarty_tpl->__("text_required_group_product"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            save: '<?php echo strtr($_smarty_tpl->__("save"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            close: '<?php echo strtr($_smarty_tpl->__("close"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            notice: '<?php echo strtr($_smarty_tpl->__("notice"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            warning: '<?php echo strtr($_smarty_tpl->__("warning"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            error: '<?php echo strtr($_smarty_tpl->__("error"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            text_are_you_sure_to_proceed: '<?php echo strtr($_smarty_tpl->__("text_are_you_sure_to_proceed"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            text_invalid_url: '<?php echo strtr($_smarty_tpl->__("text_invalid_url"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            error_validator_email: '<?php echo strtr($_smarty_tpl->__("error_validator_email"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            error_validator_phone: '<?php echo strtr($_smarty_tpl->__("error_validator_phone"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            error_validator_integer: '<?php echo strtr($_smarty_tpl->__("error_validator_integer"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            error_validator_multiple: '<?php echo strtr($_smarty_tpl->__("error_validator_multiple"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            error_validator_password: '<?php echo strtr($_smarty_tpl->__("error_validator_password"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            error_validator_required: '<?php echo strtr($_smarty_tpl->__("error_validator_required"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            error_validator_zipcode: '<?php echo strtr($_smarty_tpl->__("error_validator_zipcode"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            error_validator_message: '<?php echo strtr($_smarty_tpl->__("error_validator_message"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            text_page_loading: '<?php echo strtr($_smarty_tpl->__("text_page_loading"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            error_ajax: '<?php echo strtr($_smarty_tpl->__("error_ajax"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            text_changes_not_saved: '<?php echo strtr($_smarty_tpl->__("text_changes_not_saved"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            text_data_changed: '<?php echo strtr($_smarty_tpl->__("text_data_changed"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            more: '<?php echo strtr($_smarty_tpl->__("more"), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
        });
        
        $.extend(_, {
            index_script: '<?php echo strtr($_smarty_tpl->tpl_vars['config']->value['customer_index'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            changes_warning: /*'<?php echo strtr($_smarty_tpl->tpl_vars['settings']->value['Appearance']['changes_warning'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'*/'N',
            currencies: {
                'primary': {
                    'decimals_separator': '<?php echo strtr($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['decimals_separator'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    'thousands_separator': '<?php echo strtr($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['thousands_separator'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    'decimals': '<?php echo strtr($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['primary_currency']->value]['decimals'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
                },
                'secondary': {
                    'decimals_separator': '<?php echo strtr($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['decimals_separator'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    'thousands_separator': '<?php echo strtr($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['thousands_separator'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    'decimals': '<?php echo strtr($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['decimals'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
                    'coefficient': '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currencies']->value[$_smarty_tpl->tpl_vars['secondary_currency']->value]['coefficient'], ENT_QUOTES, 'UTF-8');?>
'
                }
            },
            default_editor: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_wysiwyg_editor'], ENT_QUOTES, 'UTF-8');?>
',
            default_previewer: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer'], ENT_QUOTES, 'UTF-8');?>
',    
            current_path: '<?php echo strtr($_smarty_tpl->tpl_vars['config']->value['current_path'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            current_location: '<?php echo strtr($_smarty_tpl->tpl_vars['config']->value['current_location'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            images_dir: '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['images_dir']->value, ENT_QUOTES, 'UTF-8');?>
',
            notice_displaying_time: <?php if ($_smarty_tpl->tpl_vars['settings']->value['Appearance']['notice_displaying_time']) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['settings']->value['Appearance']['notice_displaying_time'], ENT_QUOTES, 'UTF-8');?>
<?php } else { ?>0<?php }?>,
            cart_language: '<?php echo htmlspecialchars(@constant('CART_LANGUAGE'), ENT_QUOTES, 'UTF-8');?>
',
            default_language: '<?php echo htmlspecialchars(@constant('DEFAULT_LANGUAGE'), ENT_QUOTES, 'UTF-8');?>
',
            cart_prices_w_taxes: <?php if (($_smarty_tpl->tpl_vars['settings']->value['Appearance']['cart_prices_w_taxes']=='Y')) {?>true<?php } else { ?>false<?php }?>,
            translate_mode: <?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['translation']) {?>true<?php } else { ?>false<?php }?>,
            theme_name: '<?php echo strtr($_smarty_tpl->tpl_vars['settings']->value['theme_name'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            regexp: [],
            current_url: '<?php echo strtr($_smarty_tpl->tpl_vars['config']->value['current_url'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            current_host: '<?php echo strtr($_smarty_tpl->tpl_vars['config']->value['current_host'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
            init_context: '<?php echo strtr($_REQUEST['init_context'], array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
        });
    
    <?php if (!$_REQUEST['init_context']) {?>

        $(document).ready(function(){
            $.runCart('C');
        });

    <?php }?>

<?php if ($_smarty_tpl->tpl_vars['config']->value['tweaks']['anti_csrf']) {?>
    // CSRF form protection key
    _.security_hash = '<?php echo htmlspecialchars(fn_generate_security_hash(''), ENT_QUOTES, 'UTF-8');?>
';
<?php }?>
}(Tygh, Tygh.$));
</script>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"index:scripts")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"index:scripts"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"index:scripts"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>


<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_scripts(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php }?><?php }} ?>
