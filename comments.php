<?php
	include 'header.html'
?>
	
		<div class="row" id= "pp">
		
		<div class = "col-7" id = "comment">
		<h1>Comment Below</h1>
					<form  action="comments.php" method="POST">
					<fieldset>
					
				<div >
					<label for="fName">First name:</label>
					<input type="text" name="fName" size="30" class = "flname"/>
					<br><br>
					<label for="lName">Last name:</label>
					<input type="text" name="lName" size="30" class = "flname"/>
				</div>
				<br>
				<div >
					<label for="comment">Comment below:</label>
					<br>
					<textarea name="comment" rows="4" cols="45" class = "comm"></textarea>
				</div>
			
				<p>
					<input type="submit" name="submit" value=" Submit Comment"/>
				</p>
				</fieldset>
			</form>
		
		</div>



	<div class = "guestscomm" >
		<h1>Reviews</h1>
<?php
$servername = "localhost";
$username = "arp5323";
$password = "Antonio123";
$dbname = "arp5323";


$id="";
$name= $_POST['fName'];
$comment= $_POST['comment'];

if (empty($name) || empty($comment))	{
}else{
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error)	{
		die("connection failed".$conn->connect_error);
	}

$sqlINSERT = "INSERT INTO Comments (visitorID, visitorName, visitorCOMMENT)
VALUES (
NULL, '".$name."','".$comment."');
";
$result = $conn->query($sqlINSERT);
}

//Part 1 section homework 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT visitorID, visitorNAME, visitorCOMMENT FROM Comments";
$result = $conn->query($sql);

if($result->num_rows>0){ //num_rows is meta data retrieved from the query

while($row = $result->fetch_assoc()){ //$row is your data cursor

echo "<table>";
echo "<tr>";
echo "". $row['visitorID']. ") ";
echo "".$row['visitorNAME']."";
echo "<br>";
echo "".$row['visitorCOMMENT']."<br><hr>";
echo "<tr>";
echo "</table>";
}

} else {

echo "0 results found";

}
?>
</div>
</div>
<?php
	include 'footer.html'
?>	
