<?php

include('connection.php');
	
	echo 'PGP';
	function insertUser($conn){
		
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$IDno = $_POST['IDno'];
		$role = $_POST['role'];
		
		$sql = "INSERT INTO users (name, surname, email, phone, IDno, role, password, active)
				VALUES ('$name','$surname', '$email', '$phone', '$IDno', '$role', 'iutyhjuj7ty7765$%^&', 0)";	
		
		$results = mysqli_query($conn,$sql);		
		echo json_encode ($results);		
	}
	
	
	insertUser($conn);
	
	
	
	
?>