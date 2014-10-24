<?php /* Smarty version Smarty-3.1.18, created on 2014-10-16 03:50:33
         compiled from "/srv/www/server.com/public_html/design/backend/templates/common/analytics.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1693301962543f0849f08af5-03916359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa44258124de847c09eaeaac499f17d75ea901b0' => 
    array (
      0 => '/srv/www/server.com/public_html/design/backend/templates/common/analytics.tpl',
      1 => 1409124627,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1693301962543f0849f08af5-03916359',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_543f0849f0e907_03095363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543f0849f0e907_03095363')) {function content_543f0849f0e907_03095363($_smarty_tpl) {?><!-- GA code -->
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-40339423-1']);
    _gaq.push(['_setDomainName', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['current_host'], ENT_QUOTES, 'UTF-8');?>
']);
    _gaq.push(['_setAllowLinker', true]);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
</script>
<!-- GA code end -->
<?php }} ?>
