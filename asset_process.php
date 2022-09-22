<?php

include('connection.php');
	
	function insertAsset($conn){
		
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
		$address = $_POST['address'];
		
		$img = $_FILES['image']['name'];
		$tmp = $_FILES['image']['tmp_name'];
			
		$valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'bmp' , 'pdf' , 'doc' , 'ppt'); // valid extensions
		$path = 'uploads/'.$img; // upload directory
		
		if($_FILES['image'])
		{
			
			// get uploaded file's extension
			$ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

			if(in_array($ext, $valid_extensions)) 
			{ 

					if(move_uploaded_file($tmp,$path)) 
					{
						echo "<img src='$path' />";
			
						$sql = "INSERT INTO asset (assetName, accDepreciation, accImpairments, condAssessment, cost, description, assetHierarchy, usefulLife, 
												 valuationInfo, carryingValue, active, address, assetImage)
							VALUES ('".$assetName."','".$accDepreciation."','".$accImpairments."', '".$condAssessment."', '".$cost."', '".$description."', '".$assetHierarchy."', '".$usefulLife."', 
									'".$valuationInfo."', '".$carryingValue."', 1, '".$address."', '".$path."')";	
					
					$results = mysqli_query($conn,$sql);	
					}
			}
		}
		echo json_encode ($path);	
	}
	
	insertAsset($conn);
	
	
	
?>