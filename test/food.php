<?php
	$chickenstartergrower = $_POST['chickenstartergrower'];
	$startgrow = $_POST['startgrow'];
	$Henech = $_POST['Henech'];
    $Countrycompanion = $_POST['Countrycompanion'];
    $comments = $_POST['comments'];





	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into food(chickenstartergrower, startgrow, Henech, Countrycompanion, comments) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("iiiis", $chickenstartergrower, $startgrow, $Henech, $Countrycompanion, $comments);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>