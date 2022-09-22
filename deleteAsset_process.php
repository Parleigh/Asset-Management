<?php
//DELETE Assets
	include 'connection.php';

	function deleteAsset($conn){		
		
		$dltAss_id = $_POST['id'];
		
		$sql = "UPDATE asset 
				SET active = 0
				WHERE id = '$dltAss_id'";
		
		$results = mysqli_query($conn,$sql);		
		echo json_encode ($results);
		//header('Location: assets.php?id='.$id.'&msg2=');
		//exit;		
	}
	deleteAsset($conn);
	
?>