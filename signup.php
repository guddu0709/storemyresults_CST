<?php
	$name = $_POST['name'];
	$usn = $_POST['usn'];
	$college = $_POST['college'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	// Database connection
	$conn = new mysqli('localhost:3306','root','','storemyresults');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into signup(name,usn,college,email, password) values (?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $name, $usn, $college,$email, $password);
		$execval = $stmt->execute();
		echo $execval;
		echo " Registration successfully ";
		header('Location: login.html');
		exit();
		$stmt->close();
		$conn->close();
	}
?>
