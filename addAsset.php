<?php
	session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Brand</title>
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
                        
						<h3> Add Asset </h3>
						
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
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <br>
                    </div>
                    <div class="row">
						<form class="user" method="post" name="formAsset" id="formAsset">
						
                               
                                    <div class="mb-3">
										<input required class="form-control form-control-user" type="text" id="assetName" placeholder="Asset Name" name="assetName">
									</div>
								
								<div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
										<input required class="form-control form-control-user" type="number" id="accDepreciation" placeholder="Accumulated Depreciation" name="accDepreciation">
									</div>
									
                                    <div class="col-sm-6">
										<input required class="form-control form-control-user" type="number" id="accImpairments" placeholder="Accumulated Impairments" name="accImpairments">
									</div>
                                </div>
								
								<div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
										<input required class="form-control form-control-user" type="text" id="condAssessment" placeholder="Condition Assessment" name="condAssessment">
									</div>
									
                                    <div class="col-sm-6">
										<input required class="form-control form-control-user" type="number" id="cost" placeholder="Cost" name="cost">
									</div>
                                </div>
								
								  <div class="mb-3">
									<input required class="form-control form-control-user" type="text" id="description" placeholder="Description" name="description">
								</div>
								
								<div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
										<input required class="form-control form-control-user" type="text" id="assetHierarchy" placeholder="Asset hierarchy" name="assetHierarchy">
									</div>
									
                                    <div class="col-sm-6">
										<input required class="form-control form-control-user" type="text" id="usefulLife" placeholder="Useful Life" name="usefulLife">
									</div>
                                </div>
								
								<div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
										<input required class="form-control form-control-user" type="text" id="valuationInfo" placeholder="Valuation Information" name="valuationInfo">
									</div>
									
                                    <div class="col-sm-6">
										<input required class="form-control form-control-user" type="number" id="carryingValue" placeholder="Carrying Value" name="carryingValue">
									</div>
									
                                </div>
								
								<div class="mb-3">
									<input required class="form-control form-control-user" type="text" id="address" placeholder="Location" name="address">
								</div>
								
								<div class="row mb-3">	
									<div class="col-sm-6 mb-3 mb-sm-0">
										<input id="image" type="file" accept="image/*" name="image" required />
										<!--div id="preview"><img src="filed.png" /></div--><br><br>
										<input class="btn btn-success" type="submit" value="Add Asset" style="background-color:#6610f2; color: white">	
									</div>	
								</div>
								
								
								<!--button class="btn btn-primary d-block btn-user w-30" type="button" name="btnAddAsset" id="btnAddAsset">Add Asset</button-->
								<br>
                                <hr>
								
                            </form>
							<div id="err"></div>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	
	
</body>

</html> 