<?php
	include 'connection.php';
	//Activate USER
	function activateUser($conn){		
		
		$id = $_POST['id'];
		
		echo $id;
	
		$sql = "UPDATE users 
				SET active = 1
				WHERE id = '$id'";
		
		$results = mysqli_query($conn,$sql);		
		echo json_encode ($results);
		//header('Location: users.php');
		//exit;	*/
	}
	activateUser($conn);
	
	
?>