<?php
	$email = $_POST['email'];
	$password = $_POST['password'];

	// Database connection
	$conn = new mysqli('localhost:3306','root','','storemyresults');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("select * from signup where email = ?");
		$stmt -> bind_param("s",$email);
		$execval = $stmt->execute();
		$stmt_result=$stmt -> get_result();
		if($stmt_result -> num_rows>0){
			$data=$stmt_result -> fetch_assoc();
			if($data['password']===$password){
				echo "successfully logged in ";
				header('Location: addresults.html');
        exit();
				echo $execval;
			$stmt->close();
			$conn->close();
			}
			else{
				header('Location: login.html?error=invalid email ');
				exit();
			}
		}
		else{
			header('Location: login.html?error=invalid password');
			exit();
		}

	}
?>
