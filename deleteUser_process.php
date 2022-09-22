<?php

	include 'connection.php';
	
	//DELETE USER
function deleteUser($conn){		
		
		$dlt_id = $_POST['id'];
		
		$sql = "UPDATE users 
				SET active = 0
				WHERE id = '$dlt_id'";
		
		$results = mysqli_query($conn,$sql);		
		echo json_encode ($results);
		//header('Location: users.php');
		//exit;		
	}
	deleteUser($conn);
	

	
?>