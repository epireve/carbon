<h1 class="brand brand-logo">Skout</h1>
<div class="brand brand-foot">A project by NEST</div>
<section class="map">
	<article>
		<!-- I pick the map from here: http://www.map-embed.com/  :) -->
		<script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDZ2Hm4zgxvsKqSOqscLaKjINIk9T4VtSs"></script>
		<div style="overflow:hidden;height:100%;width:100%;position:absolute">
		<div id="gmap_canvas" style="height:100%;width:100%;position:absolute"></div>
		<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
		<a class="google-map-code" href="http://www.mapsembed.com/notebooksbilliger-gutschein/" id="get-map-data">http://www.mapsembed.com/notebooksbilliger-gutschein/</a></div>
		<script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(40.805478,-73.96522499999998),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(40.805478, -73.96522499999998)});infowindow = new google.maps.InfoWindow({content:"<b>The Breslin</b><br/>2880 Broadway<br/> New York" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
	</article>
</section>
