<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>User Profile</title>
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
		
		
		
		$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "greatminds_db";

					// Create connection
					$conn = mysqli_connect($servername, $username, $password, $dbname);
								
					// Check connection
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
						}
						
						$id = $_SESSION['id'];
						
						$sql = "SELECT *
						FROM users
						WHERE id = '$id'";
										
						$result = mysqli_query($conn, $sql);
						
						$row = mysqli_fetch_row($result);
						
						$profileID = $id;
						
						$name = $row[1];
						$surname = $row[2];
						$email = $row[3];
						$phone = $row[4];
						$IDno = $row[5];
		
		?>
		
		
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        
						<h3> Edit User Profile </h3>
						
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
					
										
						<form class="user" method="Post" name="formUser" id="formUser">
                                <div class="row mb-3">
								
                                    <div class="col-sm-6 mb-3 mb-sm-0">
										<input type="hidden" name="profileID" id="profileID" value="<?php echo $profileID; ?>">
										<input class="form-control form-control-user" type="text" value = "<?php echo $name; ?>" name="name" id="name">
									</div>
									
                                    <div class="col-sm-6">
										<input class="form-control form-control-user" type="text" value = "<?php echo $surname; ?> " name="surname" id="surname">
									</div>
                                </div>
								
                                <div class="mb-3">
									<input class="form-control form-control-user" type="email" value = "<?php echo $email; ?> " name="email" id="email">
								</div>
								
								<div class="row mb-3">
								
                                    <div class="col-sm-6 mb-3 mb-sm-0">
										<input type="hidden" name="profileID" id="profileID" value="<?php echo $profileID; ?>">
										<input class="form-control form-control-user" type="text" value = "<?php echo $phone; ?>" name="phone" id="phone">
									</div>
									
                                    <div class="col-sm-6">
										<input class="form-control form-control-user" type="text" disabled value = "<?php echo $IDno; ?> " name="IDno" id="IDno">
									</div>
                                </div>
								
                                <br>
								
								<button class="btn btn-primary d-block btn-user w-30" style="background-color:#934ae9" name="btnUpdtMyProfile" id="btnUpdtMyProfile" type="button">Update My Profile</button>
								<br>
                                <hr>
								
                            </form>
							
							
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