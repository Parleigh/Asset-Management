<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Edit Asset</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
	<link rel="stylesheet" href="assets/css/jquery-confirm.css" rel="stylesheet">
	
</head>

<body id="page-top">
    <div id="wrapper">
	
		<!-- Sidebar -->
       <?php 
		
		if($_SESSION['role'] == 1){
			include 'sidebar.php';
		}
		else{
			include 'sidebar2.php';
		}
		
		?>
		
		
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <h3> Edit Asset </h3>
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="me-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            
                            <div class="d-none d-sm-block topbar-divider"></div>
                            
							<?php include 'header.php'?>
							
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                   
										
                    <div class="row">
					
					
					<?php
					
					
					$conn = mysqli_connect("localhost", "root", "", "greatminds_db");
					
					if(isset($_POST['edit_btn'])){
		
						$id = $_POST['edt_id'];
						
						$sql = "SELECT * FROM asset WHERE id = '$id'";
						$result = mysqli_query($conn, $sql);
					
						foreach($result as $row){
						
					?>
					
						<form class="user" method="post" name="UpdateAssetForm" id="UpdateAssetForm">
						
								<div class="mb-3">
										<input required class="form-control form-control-user" type="text" value="<?php echo $row['assetName'] ?>" id="assetName" placeholder="Asset Name" name="assetName">
									</div>
						
						
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
									
									<input type="hidden" name="AssetID" id="AssetID" value = "<?php echo $row['id']?>">
										<input class="form-control form-control-user" type="number" id="accDepreciation" value="<?php echo $row['accDepreciation']?>" name="accDepreciation">
									</div>
									
                                    <div class="col-sm-6">
										<input class="form-control form-control-user" type="number" id="accImpairments" value="<?php echo $row['accImpairments']?>" name="accImpairments">
									</div>
                                </div>
								
								<div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
										<input class="form-control form-control-user" type="text" id="condAssessment" value="<?php echo $row['condAssessment']?>" name="condAssessment">
									</div>
									
                                    <div class="col-sm-6">
										<input class="form-control form-control-user" type="number" id="cost" value="<?php echo $row['cost']?>" name="cost">
									</div>
                                </div>
								
								  <div class="mb-3">
									<input class="form-control form-control-user" type="text" id="description" value="<?php echo $row['description']?>" name="description">
								</div>
								
								<div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
										<input class="form-control form-control-user" type="text" id="assetHierarchy" value="<?php echo $row['assetHierarchy']?>" name="assetHierarchy">
									</div>
									
                                    <div class="col-sm-6">
										<input class="form-control form-control-user" type="text" id="usefulLife" value="<?php echo $row['usefulLife']?>" name="usefulLife">
									</div>
                                </div>
								
								<div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
										<input class="form-control form-control-user" type="text" id="valuationInfo" value="<?php echo $row['valuationInfo']?>" name="valuationInfo">
									</div>
									
                                    <div class="col-sm-6">
										<input class="form-control form-control-user" type="number" id="carryingValue" value="<?php echo $row['carryingValue']?>" name="carryingValue">
									</div>
                                </div>
								
								<div class="mb-3">
									<input class="form-control form-control-user" type="text" id="address" value="<?php echo $row['address']?>" name="address">
								</div>
								
								<div>
									<img name="image" id="image" width="350px" src="<?php echo $row['assetImage']?>">
								</div>
								
								<div id="myModal" class="modal">

									<!-- The Close Button -->
									<span class="close">&times;</span>

									<!-- Modal Content (The Image) -->
									<img class="modal-content" id="img01">

									<!-- Modal Caption (Image Text) -->
									<div id="caption"></div>
								</div>
								
								<br>
								
								<div class="row mb-3">	
									<div class="col-sm-6 mb-3 mb-sm-0">
										<label>Replace Image</label><br>
										<input id="image" type="file" accept="image/*" name="image" />
										<!--div id="preview"><img src="filed.png" /></div--><br><br>
										<!--input class="btn btn-success" type="submit" value="Add Asset" style="background-color:#6610f2; color: white"-->	
									</div>	
								</div>
								
								<button style="background-color:#6610f2; color: white" class="btn btn-primary d-block btn-user w-30" type="submit" name="UpdateAsset" id="UpdateAsset">Update Asset</button>
								<br>
                                <hr>
								
                            </form>		
							
						<?php
								
							}
							
						}
					
					?>
					
					
                    </div>
					
		
						
					
                    <div class="row">
                       
                    </div>
                   
                </div>
            </div>
           
			<?php include 'footer.php'?>
		   
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>


	<script src="/GreatMinds/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/GreatMinds/assets/js/theme.js"></script>
	<script src="/GreatMinds/assets/js/core/jquery.min.js"></script> 
	<script src="/GreatMinds/assets/js/jquery-migrate-1.1.1.js"></script> 
	<script src="/GreatMinds/assets/js/script.js"></script>
	<script src="/GreatMinds/assets/js/jquery-confirm.js"></script> 
	
	<!--Image Inlargement Script-->
	<script>
		var modal = document.getElementById("myModal");

		// Get the image and insert it inside the modal - use its "alt" text as a caption
		var img = document.getElementById("image");
		var modalImg = document.getElementById("img01");
		var captionText = document.getElementById("caption");
		img.onclick = function(){
		  modal.style.display = "block";
		  modalImg.src = this.src;
		  captionText.innerHTML = this.alt;
		}

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
		  modal.style.display = "none";
}
	
	</script>
	
</body>

</html> 