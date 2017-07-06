<!-- Page used for the user to subscribe -->
<!-- PHP includes for header.html and footer.html -->
<!-- Created by Anthony Pardini -->
<!-- Due 12/12/2016 -->
<?php
	include 'header.html'
?>	
	
	
		<div class="row" id = "pp">
		
		<div class = "col-6">
		<h1>Subscribe Below</h1>
						<form action="post" Class="form1">
					<fieldset>
						<legend>Sign up for E-mail updates</legend>
						<br>
						<label for="name">E-mail:</label> <input type="text" id="name"/>
					<div>

						<br>
						<input type="radio" name="Interest" value="Sound design" checked>Local Resident
						<input type="radio" name="interest" value="Latest tracks" id="tour">Tourist

						<br>
						<br>
						<label for="msg">Message:</label>
						<textarea id="msg"></textarea>
						</div>
						<br>
					<input type="submit" value="Submit"/>
					</fieldset>
				</form>
		
		</div>
		
		</div>
<?php
	include 'footer.html'
?>	
