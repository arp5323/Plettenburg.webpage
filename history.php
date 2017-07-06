<!-- Page contains the history and pictures of Cango Caves -->
<!-- PHP includes for header.html and footer.html -->
<!-- Created by Anthony Pardini -->
<!-- Due 12/12/2016 -->
<?php
	include 'header.html'
?>	

	
		<div class="row" id = "pp">

		
		<div class = "col-6" id = "text">
		<h1>History</h1>
		<p >
		The history of Plettenberg Bay started in 120,000 BC  with Stoneage Man living in caves on the Robberg Peninsular.

They left behind their tools, ornaments and other objects which can today be viewed in these caves.  After the late Stone Age, these caves were inhabited by the Khoisan, the original tribe of South Africa, a tribe who were hunters and gatherers.  They lived on fish and hunted small animals.  They spent their time wandering along the shores of this beautiful bay.

Plettenberg bay lies between these two wonders of nature, it has long wide sandy beaches, the warm Indian Ocean and amazing, rivers, lagoons, forests and gorges and is one of the most stunning spots in the World.

Visited by tourists from all over the World and a major holiday destination for South Africans from 1576 it was known as Bahia Formosa the beautiful bay.

When the Dutch took control of the sea route to India , they set up a refreshment station in Cape town so passing ships could stop and load fresh meat, water and vegetables. This was in 1652.  Europian settlers moved along the coast and ended up in Plettenberg Bay.  They became stock farmers and hunters.  This area has large Forests and some settlers became wood cutters.  They transported the wood by sea to Cape Town and in the 18th and 19th Century the wood was taken to Cape Town by oxen wagons.  Today it is still a major producer of timber for the local and export market.

In 1778 the Governor of the Cape Baron Van Plettenberg visited and called the town Plettenberg Bay, which is the current name today.
		</p>		
		</div>
		
		<div class = "col-4" id = "pics2">
		<br>
		<p class = "sub" >Cango caves Oetisien</p>
		<img src="pics/rsz_cave1.jpg" class="sidepic"  alt="picture of cave 1" >
		
		<img src="pics/rsz_cave2.jpg" class="sidepic" alt="picture of cave 2" >
			
										<div id="map" style="">

<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng(-34.060977, 23.379613), 
    zoom: 10
  }
  var map = new google.maps.Map(mapCanvas, mapOptions);
}
</script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAzfpibkI7wPxv8CSJ_v_3L0h2bHAXEphM&callback=myMap"></script>
		
		</div>	
		
		</div>	
</div>
			
		

<?php
	include 'footer.html'
?>	