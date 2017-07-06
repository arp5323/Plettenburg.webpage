<!-- Second part of the grading page -->
<!-- PHP includes for header.html and footer.html -->
<!-- Created by Anthony Pardini -->
<!-- Due 12/12/2016 -->
<?php
	include 'header.html'
?>	
		<div class="row" id = "pp"> 
		
		<div class = "col-9" id = "text">
		<h1>Grading page</h1>
		<p class = "pp">
		Java script	
		<br>
		<br>
		I chose to keep the website simple and couldn't think of many unique dynamic elements that would make the page more appealing. Everything seemed to be very distracting to the user and
		appeared unprofessional. In order to make use of java script I created a dynamic function that adds effect to the facebook and instagram links. The element rotates 45 degrees and uses a slight
		transparency effect when the user is hovering over the logos. Further use of javascipt allowed me to create an interactive form that lets the user book a tour on the advert.php page. A pop up window appears asking the user if they are sure they want to make the booking.
		Once the user selects accept, red text is displayed in the lower part of the form providing a meeting place/time and a number to call to cancel your reservation.  
		<br><br>
		A newly updated feature is the use of a comments.php section that contains a form on the left side of the page where the user can enter a message.
		The reviews section on the right side of the page is automatically updated once the user submits their comment.
		<br><br>
		Responsivness
		<br><br>
		The page is responsive with media queries set to screen size of 350px and 500px. I spent more time focusing on the smaller 350px screen, which displays very differently. I stuggled using the right navigation for the smaller screens. If I had more time I would have split the navbar into two sections when used on a smaller screen.
		Picture placement needed some correction. It was important that all pictures were visible on a small sreens.
		<br><br>
		The navigation was an issue and had to be improved from part 1 grading. The features of the nav bar are now more consistent. The feature that removes the page title to allow full view of the image is a cool feature and I decided to leave it seen as it did not lose points in part 1. 
		<br>
		All the pictures used on the website belong to the author. Many of the pictures used CSS for resizing purpose and page loading was an issue because files were so large.
		All the images used on the site have been resized to similar pixels making use of less css and a more consistent appearance. A goal was to reduce the amount of css by using more common classes for elements.
		</p>		
		</div>

		
		</div>
<?php
	include 'footer.html'
?>	