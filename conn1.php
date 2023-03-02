<?php
	$firstName = $_GET['firstName'];
	$lastName = $_GET['lastName'];
	$gender = $_GET['gender'];
	$email = $_GET['email'];
	$password = $_GET['password'];
	$number = $_GET['number'];

	// Database connection
	$conn = new mysqli('localhost','root','Nandan@2001','hmsdb');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $firstName, $lastName, $gender, $email, $password, $number);
		$execval = $stmt->execute();
		echo $execval;
        echo "Registration successfully...";
        header('location:hms.php');
		$stmt->close();
		$conn->close();
	}
?>