<?php session_start(); ?>

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
                        
						<h3> Edit User </h3>
						
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
                    <br>
                    <div class="row">
					
					
					<?php
					
					$msg = "";
					if(isset($_GET['msg'])){
					$msg = "Successfully Updated User Details";
					}
			
					$conn = mysqli_connect("localhost", "root", "", "greatminds_db");
					
					if(isset($_POST['edit_btn'])){
		
						$id = $_POST['edt_id'];
						
						$sql = "SELECT * FROM users WHERE id = '$id'";
						$result = mysqli_query($conn, $sql);
					
						foreach($result as $row){
						
					?>
					
										
						<form class="user" method="Post" name="formUser" id="formUser">
                                <div class="row mb-3">
								
                                    <div class="col-sm-6 mb-3 mb-sm-0">
										<input class="form-control form-control-user" type="hidden" value = "<?php echo $row['id']?>" name="userID" id="userID">
										<input class="form-control form-control-user" type="text" value = "<?php echo $row['name']?>" name="name" id="name">
									</div>
									
                                    <div class="col-sm-6">
										<input class="form-control form-control-user" type="text" value = "<?php echo $row['surname']?> " name="surname" id="surname">
									</div>
                                </div>
								
								
								<div class="row mb-3">
									<div class="col-sm-6 mb-3 mb-sm-0">
										<input class="form-control form-control-user" type="email" value = "<?php echo $row['email']?> " name="email" id="email">
									</div>
									
									<div class="col-sm-6 ">
										<input class="form-control form-control-user" type="text" value = "<?php echo $row['phone']?> " name="phone" id="phone">
									</div>
								</div>
								
								
                                <div class="row mb-3">
								
									<div class="col-sm-6 ">
										<input class="form-control form-control-user" type="text" disabled value = "<?php echo $row['IDno']?> " name="IDno" id="IDno">
									</div>
									
                                    <div class="col-sm-6 mb-3 mb-sm-0">
										<select class="form-control form-control-user" name="role" id="role" required>
											<option value="">SELECT ROLE</option>
											<option value="1">Admin</option>
											<option value="2">Standard User</option>
										</select>
									</div>
									
									<!--div class="col-sm-6 mb-3 mb-sm-0">
										&nbsp;&nbsp;&nbsp;
										<input id="activ" name="activ" type="text" value="<!--?php echo $row['active']?>">
										<label>Active User</label><br>
										&nbsp;&nbsp;&nbsp;
										<label class="switch">
										  <input type="checkbox" name="activate" id="activate">
										  <span class="slider round"></span>
										</label>
									</div-->	
                                </div><br>
								
								<button class="btn btn-primary d-block btn-user w-30" style="background-color:#934ae9" name="btnEdit" id="btnEdit" type="button">Update User</button>
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
			
			
			
           <?php include 'footer.php'; ?>
			
			
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
	
	
	
	<!--Scripts-->
    <script src="/GreatMinds/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/GreatMinds/assets/js/theme.js"></script>
	<script src="/GreatMinds/assets/js/core/jquery.min.js"></script> 
	<script src="/GreatMinds/assets/js/jquery-migrate-1.1.1.js"></script> 
	<script src="/GreatMinds/assets/js/script.js"></script>
	<script src="/GreatMinds/assets/js/jquery-confirm.js"></script> 

	
</body>

</html> 