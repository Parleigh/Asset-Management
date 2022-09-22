<?php 

session_start();

if (!isset($_SESSION['email'])) {
    header("Location: dashboard.php");
	}
	
	else if($_SESSION['active'] < 0)
	{
		header("Location: index.php");
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
					
			$sql = "SELECT COUNT(name)
			FROM users
			WHERE active = 1";
							
			$result = mysqli_query($conn, $sql);
			
			$row = mysqli_fetch_row($result);
			$nameCount = $row[0];
			
			
			$sql1 = "SELECT COUNT(assetName)
			FROM asset
			WHERE active = 1";
							
			$result1 = mysqli_query($conn, $sql1);
			$row1 = mysqli_fetch_row($result1);
			$assetCount = $row1[0];
			
			
			//For Totals
			$sql2 = "SELECT SUM(accDepreciation), SUM(accImpairments), SUM(cost), SUM(carryingValue)
			FROM asset
			WHERE active = 1";
							
			$result2 = mysqli_query($conn, $sql2);
			
			$row2 = mysqli_fetch_row($result2);
			$totAccDep = $row2[0];
			$totaccImp = $row2[1];
			$totCost = $row2[2];
			$totCarryValue = $row2[3];
			
			
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
	<link rel="icon" href="assets/img/mainLogo.png" type="image/png">
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
                        <h3> Asset Management </h3>
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
							
                           <?php include 'header.php'; ?>
							
							
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                   
                    <div class="row">
					
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-primary py-2">
                                <div class="card-body">
									<div class="row align-items-center no-gutters">
										<div class="col me-2">
											<a href="assets.php">
												<div class="text-uppercase text-primary fw-bold text-xs mb-1"><span>Total Assets&nbsp;</span></div>
												<div class="text-dark fw-bold h5 mb-0"><h3><?php echo $assetCount?></h3></div>
											</a>
										</div>
										<div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i></div>	
									</div>
                                </div>
                            </div>
                        </div>
						
						
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
											<a href="users.php">
												<div class="text-uppercase text-success fw-bold text-xs mb-1"><span>Total Users</span></div>
												<div class="text-dark fw-bold h5 mb-0"><h3><?php echo $nameCount?></h3></div>									
											</a>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-users fa-2x text-gray-300"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<br>
					<br>
					<br>
					<br>
					<br>
					
					
					
					
                    <div class="row">
						 <h3 class="text-dark mb-0">Total Assets</h3><br><br>
                  <form>
                   
                    <div class="row">
					
					  <div class="card">
                <!--div class="card-header card-header-primary">
                  <h4 class="card-title ">Simple Table</h4>
                  <p class="card-category"> Here is a subtitle for this table</p>
                </div-->
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <tr>
                        <th>
                          <h4 style="color:#934ae9">Accumulated Depreciation</h4>
                        </th>
                        <th>
                          <h4 style="color:#934ae9">Accumulated Impairments</h4>
                        </th>
                        <th>
                          <h4 style="color:#934ae9">Cost</h4>
                        </th>
						<th>
                          <h4 style="color:#934ae9">Carrying Value</h4>
                        </th>
						
                      </tr></thead>
                      <tbody>
                        
							<tr>
								<td><h5><?php echo 'R '.$totAccDep ?></h5></td>
								<td><h5><?php echo 'R '.$totaccImp ?></h5></td>
								<td><h5><?php echo 'R '.$totCost ?></h5></td>
								<td><h5><?php echo 'R '.$totCarryValue ?></h5></td>
							</tr>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
			  
            </div>
					
                  </form>
						
						
							
                    </div>
					
                </div>
            </div>
            
			<?php include "footer.php" ?>
			
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>