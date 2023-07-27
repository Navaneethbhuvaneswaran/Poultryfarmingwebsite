<?php
	$name = $_POST['name'];
	$number = $_POST['number'];
	$comments = $_POST['comments'];



	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into medecine(name, number, comments) values(?, ?, ?)");
		$stmt->bind_param("sis", $name, $number, $comments);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>