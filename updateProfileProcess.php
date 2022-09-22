<?php

	include ('connection.php');
	
	function updateProfile($conn){		
		
		$profileID = $_POST['profileID'];
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		//$email = $_POST['email'];
		
		$sql = "UPDATE users 
				SET name = '$name', surname = '$surname', email = '$email', phone = '$phone'
				WHERE id = '$profileID'";
		
		$results = mysqli_query($conn,$sql);		
		echo json_encode ($results);
				
	}
	updateProfile($conn);

?>