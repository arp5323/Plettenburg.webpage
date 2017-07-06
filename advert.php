<!-- Adverts page containg leaflets and a book tour feature -->
<!-- PHP includes for header.html and footer.html -->
<!-- Created by Anthony Pardini -->
<!-- Due 12/12/2016 -->
<?php
	include 'header.html'
?>	
	<div id = "pp">
		<div class="row" >
			
			<div class = "col-7" id ="tour">
			
			<img src="pics/rsz_bungy.jpg" class="ads" alt="side pic 1" >
			<img src="pics/rsz_eleph.jpg" class="ads" alt="side pic 1" >

			</div>
			</div>
				<div class="row" >
				<div class = "col-7" id ="tour">
				<img src="pics/rsz_falls.jpg" class="ads"  alt="side pic 1" >
				<img src="pics/rsz_monkeyland.jpg" class="ads" alt="side pic 1" >

				</div>				
		</div>
		

		
		<div class="row" >
			<div class = "col-7" id ="tour">
			
			
			<img src="pics/rsz_offshore.jpg" class="ads"  alt="side pic 1" >
			<img src="pics/rsz_tsitsikamma.jpg"  class="ads" alt="side pic 1" >

			</div>	
						
		</div>
		<div class = "col-4" id = "booktour">

			
	
				<form method="POST"  onsubmit="return false;">
				<fieldset>
				<h2>Book a tour </h2>
					<p>Name:  <input type="text" id = "fname" name="customerName"/></p>
					<p>Contact:  <input type="text" name="customerID"/></p>

					 

					<br><p>What places would you like to visit?</p><br/>
						<input type="checkbox" name="place"  value="monkey"/>Monkeyland<br/>
						<input type="checkbox" name="place" value="elephant"/>Elephant park<br/>
						<input type="checkbox" name="place" value="Bungee" checked="true"/>Bungee jumping<br/>
						<input type="checkbox" name="place" value="Keurbooms"/>Keurbooms River<br/>					
					<br/>					
					Please select a day:<br/>
<select id="mySelect">
			<option id="mon">Monday</option>
			<option>Tuesday</option>
			<option>Wednesday</option>
			<option>Thursday</option>
			<option>Friday</option>
			<option>Saturday</option>
		</select>
		<p id = "p1"></p>			
					<button onclick="myFunction()">Book Tour</button>
<script>
					function myFunction() {
    var ddl = document.getElementById("mySelect");
 var selectedValue = ddl.options[ddl.selectedIndex].value;
 alert("Make reservation now?");
 fullName = "";
	fullName = fullName + document.getElementById('fname').value;


    if (selectedValue == "Monday")
   {
document.getElementById("p1").innerHTML = fullName + "\nMonday tours available with: "
					+"\nJohn Samson" 
					+"\nMeeting at Lookout Beach @ 2:00PM" 
					+"\nPlease call 5852275432 to cancel your reservation" ;
   }
       if (selectedValue == "Tuesday")
   {
document.getElementById("p1").innerHTML = fullName + "\nTuesday tours available with: "
					+"\nJeff Goodwell" 
					+"\nMeeting at Lookout Beach @ 1:00PM" 
					+"\nPlease call 5852275432 to cancel your reservation" ;
   }
       if (selectedValue == "Wednesday")
   {
  document.getElementById("p1").innerHTML = fullName + "\nWednesday  tours available with: "
					+"\nJeff Goodwell" 
					+"\nMeeting at Lookout Beach @ 1:00PM" 
					+"\nPlease call 5852275432 to cancel your reservation" ;
   }
          if (selectedValue == "Thursday")
   {
  document.getElementById("p1").innerHTML = fullName + "\nWednesday  tours available with: "
					+"\nStephen Ritchie" 
					+"\nMeeting at The Deck @ 1:00PM" 
					+"\nPlease call 5852275432 to cancel your reservation" ;
   }
   if (selectedValue == "Friday")
   {
  document.getElementById("p1").innerHTML = fullName + "\nWednesday  tours available with: "
					+"\nWayne Hall" 
					+"\nMeeting at The Deck @ 1:00PM" 
					+"\nPlease call 5852275432 to cancel your reservation" ;
   }
      if (selectedValue == "Saturday")
   {
  document.getElementById("p1").innerHTML = fullName + "\nWednesday  tours available with: "
					+"\nBen Clark" 
					+"\nMeeting at Central Beach @ 1:00PM" 
					+"\nPlease call 5852275432 to cancel your reservation" ;
   }
   

}

function getChoice() {
	
	var x = document.getElementById("mySelect").selectedIndex;
	var y = document.getElementById("mySelect").options;
	fullName = "hi";
	fullName = fullName + document.getElementById('fname').value;
	alert("Selected option is: " + fullName + y[x].text);
	 document.getElementById("p1").innerHTML = value;
}

</script>
				</fieldset>
				</form>
			


</div>
		</div>
		
		
<?php
	include 'footer.html'
?>		

	
	