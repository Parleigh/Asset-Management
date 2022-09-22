<?php

include('connection.php');
	
	function updateAsset($conn){
		
		$assetName = $_POST['assetName'];
		$accDepreciation = $_POST['accDepreciation'];
		$accImpairments = $_POST['accImpairments'];
		$condAssessment = $_POST['condAssessment'];
		$cost = $_POST['cost'];
		$description = $_POST['description'];
		$assetHierarchy = $_POST['assetHierarchy'];
		$usefulLife = $_POST['usefulLife'];
		$valuationInfo = $_POST['valuationInfo'];
		$carryingValue = $_POST['carryingValue'];
		$AssetID = $_POST['AssetID'];
		$address = $_POST['address'];
		
		
		$img = $_FILES['image']['name'];
		$tmp = $_FILES['image']['tmp_name'];
			
		$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
		$path = 'uploads/'.$img; // upload directory
		
		if($_FILES['image']['name'])
		{
			
			// get uploaded file's extension
			$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

			if(in_array($ext, $valid_extensions)) 
			{ 

					if(move_uploaded_file($tmp,$path)) 
					{
						//echo "<img src='$path' />";
						
						$sql = "UPDATE asset 
								SET assetName = '$assetName', accDepreciation = '$accDepreciation', accImpairments = '$accImpairments', condAssessment = '$condAssessment', 
									cost = '$cost', description = '$description', assetHierarchy = '$assetHierarchy', usefulLife = '$usefulLife', 
										valuationInfo = '$valuationInfo', carryingValue = '$carryingValue', address='$address', assetImage='$path' 
								WHERE id = '$AssetID'";
						
						$results = mysqli_query($conn,$sql);
					}
			}
		}
		
		else{
			
				$sql = "UPDATE asset 
						SET assetName = '$assetName', accDepreciation = '$accDepreciation', accImpairments = '$accImpairments', condAssessment = '$condAssessment', 
						cost = '$cost', description = '$description', assetHierarchy = '$assetHierarchy', usefulLife = '$usefulLife', 
						valuationInfo = '$valuationInfo', carryingValue = '$carryingValue', address='$address'
						WHERE id = '$AssetID'";
						
						$results = mysqli_query($conn,$sql);
		}
	


		echo json_encode ($results);	
		
	}
	
	
	
	if (isset($_POST['accImpairments'])){
		updateAsset($conn);
	}
	else{
		updateUser($conn);
	}
	
	
	
	function updateUser($conn){		
		
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$role = $_POST['role'];
		$userID = $_POST['userID'];
		$act = $_POST['act'];
		
		$sql = "UPDATE users
				SET name='$name', surname='$surname', email='$email', phone='$phone', role='$role' 
				WHERE id = '$userID'";
		
		$results = mysqli_query($conn,$sql);		
		echo json_encode ($results);
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
?>