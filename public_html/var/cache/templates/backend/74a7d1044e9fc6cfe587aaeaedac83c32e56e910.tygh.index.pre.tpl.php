<?php /* Smarty version Smarty-3.1.18, created on 2014-10-23 03:47:17
         compiled from "/srv/www/server.com/public_html/design/backend/templates/addons/hola_mundo/hooks/index/index.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:94218074954484205e959f0-95340150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74a7d1044e9fc6cfe587aaeaedac83c32e56e910' => 
    array (
      0 => '/srv/www/server.com/public_html/design/backend/templates/addons/hola_mundo/hooks/index/index.pre.tpl',
      1 => 1414021568,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '94218074954484205e959f0-95340150',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_54484205ecbe98_81307654',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54484205ecbe98_81307654')) {function content_54484205ecbe98_81307654($_smarty_tpl) {?> <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
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
  </div>

<?php }} ?>
