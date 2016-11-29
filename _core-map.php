<h1 class="brand brand-logo">Carbon</h1>
<div class="brand brand-foot">A project by JMU</div>
<section class="map">
   <article>
      <!-- I pick the map from here: http://www.map-embed.com/  :) -->
      <script type="text/javascript" src="https://maps.google.com/maps/api/js?key=AIzaSyDZ2Hm4zgxvsKqSOqscLaKjINIk9T4VtSs"></script>
      <script type="text/javascript" src="connect/uni.json"></script>

		<div style="overflow:hidden;height:100%;width:100%;position:absolute">
         <div id="gmap_canvas" style="height:100%;width:100%;position:absolute"></div>
         <style>
            #gmap_canvas img {
               max-width: none!important;
               background: none!important
            }
         </style>
         <a class="google-map-code" href="http://www.mapsembed.com/notebooksbilliger-gutschein/" id="get-map-data">http://www.mapsembed.com/notebooksbilliger-gutschein/</a></div>
      <script type="text/javascript">
         function init_map() {
            var myOptions = {
               zoom: 14,
               center: new google.maps.LatLng(53.40171128516402, -2.958494313063992),
               mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);



				// marker = new google.maps.Marker({
            //    map: map,
            //    position: new google.maps.LatLng(53.40171128516402, -2.958494313063992)
            // });


				 $.getJSON('connect/uni.json', function(data) {
	              $.each( data.universities, function(i, value) {

	                  var myLatlng = new google.maps.LatLng(value.lat, value.lng);
	                  // alert(myLatlng);
	                  var marker = new google.maps.Marker({
								map: map,
								position: myLatlng,

	                  });
							infowindow = new google.maps.InfoWindow({
			               // content: "<b>The Breslin</b><br/>2880 Broadway<br/> New York"
			               content: value.title
			            });

			            google.maps.event.addListener(marker, "click", function() {
			               infowindow.open(map, marker);
			            });
			            infowindow.open(map, marker);
	              });
				  });




         }
         google.maps.event.addDomListener(window, 'load', init_map);
      </script>
   </article>
</section>
