<!-- Page contains information about the main hotel of Plettenberg Bay -->
<!-- PHP includes for header.html and footer.html -->
<!-- Created by Anthony Pardini -->
<!-- Due 12/12/2016 -->
<?php
	include 'header.html'
?>	

	
		<div class="row" id = "pp">
		
		<div class = "col-7" id = "text">
		<h1>The Beacon Island Hotel</h1>
		<p class = "pp">
		This world famous hotel stands on the site of the old whaling station, which was established in 1797.  This hotel built in 1972 is situated on an outcrop of rocks and has an amazing view of the sea.  Looking back towards the town you have a great view of Plettenberg Bay which is situated on a hill.  There is a beach stretching for miles from the hotel to the nature reserve.  In addition there is a wonderful lagoon which offers safe bathing for children.				
		A hidden treasure is located at the Beacon Island Hotel. Below the hotel is an old abandoned aquariam that can only be accessed depending on the sea current.
		</p>
		</div>
		
		<div class = "col-4" id = "pics">
		
		<img src="pics/rsz_main.jpg" id = "bi" onclick="large()"  alt="side pic 1" >
		
		
		</div>
		
		</div>
		<script>
					function large() {
    var me = document.getElementById("bi");
	alert(me);
	me.style.width = "500px";
} 

</script>	
<?php
	include 'footer.html'
?>	