<?php /* Smarty version Smarty-3.1.18, created on 2014-10-23 19:18:37
         compiled from "/srv/www/server.com/public_html/design/backend/templates/addons/help_tutorial/components/video.tpl" */ ?>
<?php /*%%SmartyHeaderCode:125315940754491c4df2bc82-67549492%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '123ffd41271ac9dc261359dc5ed1cd0778192a92' => 
    array (
      0 => '/srv/www/server.com/public_html/design/backend/templates/addons/help_tutorial/components/video.tpl',
      1 => 1409124627,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '125315940754491c4df2bc82-67549492',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54491c4df38b35_62415190',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54491c4df38b35_62415190')) {function content_54491c4df38b35_62415190($_smarty_tpl) {?><div class="help-tutorial-wrapper">
    <div class="help-tutorial-content" id="help_tutorial_content">
        <iframe width="640" height="360" src="//www.youtube.com/embed/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value, ENT_QUOTES, 'UTF-8');?>
?wmode=transparent&rel=0" frameborder="0" allowfullscreen></iframe>
    </div>
</div>

<script type="text/javascript">
    (function(_, $) {
        $(function() {
            $('#help_tutorial_link').on('click', function() {
                var self = $(this);
                self.toggleClass('open');
                $('#help_tutorial_content').toggleClass('open');
            });
            if($('#elm_sidebar').length == 0) {
                $('#help_tutorial_link').css('margin-left', 0);
            }
        });
    }(Tygh, Tygh.$));
</script><?php }} ?>
