{** block-description:hola_mundo **}
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
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
