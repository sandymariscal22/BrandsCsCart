<?php /* Smarty version Smarty-3.1.18, created on 2014-10-24 03:23:23
         compiled from "a2d26f9266a27b1e31388a9d5c8fb8ef66c404ab" */ ?>
<?php /*%%SmartyHeaderCode:7949111254498deb6eb743-27922789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2d26f9266a27b1e31388a9d5c8fb8ef66c404ab' => 
    array (
      0 => 'a2d26f9266a27b1e31388a9d5c8fb8ef66c404ab',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '7949111254498deb6eb743-27922789',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54498deb71c5e7_50347813',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54498deb71c5e7_50347813')) {function content_54498deb71c5e7_50347813($_smarty_tpl) {?> <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript">
function initialize(coords) {
var latlng = new google.maps.LatLng(coords.latitude, coords.longitude);
var mapOptions = {
center: latlng,
zoom: 15,
mapTypeId: google.maps.MapTypeId.ROADMAP,
mapTypeControl: false
};
var map = new google.maps.Map(document.getElementById("map_canvas"),
mapOptions);
var marker = new google.maps.Marker({
position: latlng,
map: map,
title: "You are here :)"
});
}
navigator.geolocation.getCurrentPosition(function(position){
initialize(position.coords);
}, function(){
document.getElementById('map_canvas').innerHTML = 'Unfortunately, your position could not be determined';
});

</script>
<div>
Your current position is:
<div id="map_canvas" style="width:1000px; height:300px;">

</div>
</div><?php }} ?>
