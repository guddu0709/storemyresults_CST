<?php
	$sem = $_POST['sem'];
	$subject1 = $_POST['subject1'];
	$subject2 = $_POST['subject2'];
	$subject3 = $_POST['subject3'];
    $subject4 = $_POST['subject4'];
    $subject5 = $_POST['subject5'];
    $subject6 = $_POST['subject6'];
    $subject7 = $_POST['subject7'];
    $subject8 = $_POST['subject8'];
	$cgpa = $_POST['cgpa'];
	$usn= $_POST['usn'];

	

	// Database connection
	$conn = new mysqli('localhost:3306','root','','storemyresults');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
	
		$stmt = "insert into result(sem,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,cgpa,usn) values ($sem, $subject1, $subject2, $subject3, $subject4, $subject5, $subject6, $subject7, $subject8, $cgpa, $usn)";
		if ($conn->query($stmt)){
		header('Location: searchresult.html?email sent successfully ');
		}else{
	
		echo "Error: ". $conn->error;
}
}
		
	
?>



