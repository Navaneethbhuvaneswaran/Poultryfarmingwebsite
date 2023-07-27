<?php
	$firstName = $_POST['firstname'];
	$lastName = $_POST['lastname'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$address = $_POST['address'];
	$comments = $_POST['comments'];
	$countrychicken = $_POST['countrychicken'];
	$broilerchicken = $_POST['broilerchicken'];
	$countryeggs = $_POST['countryeggs'];
	$broilereggs = $_POST['broilereggs'];




	// Database connection
	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into form(firstName, lastName, gender, email, number, address, comments, countrychicken, broilerchicken, countryeggs, broilereggs) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssissiiii", $firstName, $lastName, $gender, $email,  $number, $address, $comments, $countrychicken, $broilerchicken, $countryeggs, $broilereggs);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>