<?php
	session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Assets</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.0/css/buttons.dataTables.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
	
	
	
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
                       
					   <h3>View All Assets</h3>
					   
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
							
                            <!-- Header -->
							<?php
								include 'header.php';
							?>
							
							
                        </ul>
                    </div>
                </nav>
				
				
				
				<?php
			
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
					
					 $sql = "SELECT id, assetName, accDepreciation, accImpairments, condAssessment, cost, description, assetHierarchy, usefulLife, 
								valuationInfo, carryingValue, date, active
							FROM asset
							WHERE active = 1";
							
							$result = mysqli_query($conn, $sql);
							
							
				?>
				
				
				
				
                <div class="container-fluid">
                    <br>
					
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <p class="text-primary m-0 fw-bold"> <button class="btn btn-primary d-block btn-user w-30" style="float: right;" onclick="document.location='addAsset.php'">Add Asset</button></p>
							
                        </div>
                        <div class="card-body">
                            	
                      <!--Start Dtable -->
							<div>
							<a style=" background-color: white;
								  color: black;
								  border: 3px solid #36b9cc;
								  padding: 10px 20px;
								  text-align: center;
								  text-decoration: none;
								  display: inline-block;" class="toggle-vis" data-column="0">AssetID</a>
								  - 
								  <a style="background-color: white;
								  color: black;
								  border: 3px solid #36b9cc;
								  padding: 10px 20px;
								  text-align: center;
								  text-decoration: none;
								  display: inline-block;" class="toggle-vis" data-column="1">Name</a> - 
								  
								  
								  <a style="background-color: white;
								  color: black;
								  border: 3px solid #36b9cc;
								  padding: 10px 20px;
								  text-align: center;
								  text-decoration: none;
								  display: inline-block;" class="toggle-vis" data-column="2">Date</a> - 
								  
								  
								  <a style="background-color: white;
								  color: black;
								  border: 3px solid #36b9cc;
								  padding: 10px 20px;
								  text-align: center;
								  text-decoration: none;
								  display: inline-block;" class="toggle-vis" data-column="3">Accumulated Depreciation</a> - 
								  
								  
								  <a style="background-color: white;
								  color: black;
								  border: 3px solid #36b9cc;
								  padding: 10px 20px;
								  text-align: center;
								  text-decoration: none;
								  display: inline-block;" class="toggle-vis" data-column="4">Accumulated Impairments</a> -
								  
								  <a style="background-color: white;
								  color: black;
								  border: 3px solid #36b9cc;
								  padding: 10px 20px;
								  text-align: center;
								  text-decoration: none;
								  display: inline-block;" class="toggle-vis" data-column="5">Condition Assessment</a> -
								  
								  <a style="background-color: white;
								  color: black;
								  border: 3px solid #36b9cc;
								  padding: 10px 20px;
								  text-align: center;
								  text-decoration: none;
								  display: inline-block;" class="toggle-vis" data-column="6">Cost</a> -
								  
								  <a style="background-color: white;
								  color: black;
								  border: 3px solid #36b9cc;
								  padding: 10px 20px;
								  text-align: center;
								  text-decoration: none;
								  display: inline-block;" class="toggle-vis" data-column="7">Description</a> - 
								  
								  <a style="background-color: white;
								  color: black;
								  border: 3px solid #36b9cc;
								  padding: 10px 20px;
								  text-align: center;
								  text-decoration: none;
								  display: inline-block;" class="toggle-vis" data-column="8">Hierarchy</a> - 
								  
								  <a style="background-color: white;
								  color: black;
								  border: 3px solid #36b9cc;
								  padding: 10px 20px;
								  text-align: center;
								  text-decoration: none;
								  display: inline-block;" class="toggle-vis" data-column="9">Useful Life</a> - 
								  
								  <a style="background-color: white;
								  color: black;
								  border: 3px solid #36b9cc;
								  padding: 10px 20px;
								  text-align: center;
								  text-decoration: none;
								  display: inline-block;" class="toggle-vis" data-column="10">Valuation</a> - 
								  
								  
								  <a style="background-color: white;
								  color: black;
								  border: 3px solid #36b9cc;
								  padding: 10px 20px;
								  text-align: center;
								  text-decoration: none;
								  display: inline-block;" class="toggle-vis" data-column="11">Carrying Value</a><br><br>
								  
								  
							</div>
							
							
							
							
							
                        <table id="example" class="display" style="width:100%">
						<thead>
							<tr>
								<th>AssetID</th>
								<th>Name</th>
                                <th>Date</th>
                                <th>Accumulated Depreciation</th>
                                <th>Accumulated Impairments</th>
                                <th>Condition Assessment</th>
                                <th>Cost</th>
                                <th>Description</th>
                                <th>Hierarchy</th>
                                <th>Useful Life</th>
                                <th>Valuation</th>
                                <th>Carrying Value</th>
                                <th>Edit</th>
                               
							</tr>
						</thead>
						
						<tbody style="height:100%">
                                         
						<?php
						if (mysqli_num_rows($result)){
							$i = 0;
							while($row = mysqli_fetch_assoc($result)){
								
								?>
							<tr>
							  
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['assetName']; ?></td>
								<td><?php echo $row['date']; ?></td>
								<td><?php echo $row['accDepreciation']; ?></td>
								<td><?php echo $row['accImpairments']; ?></td>
								<td><?php echo $row['condAssessment']; ?></td>
								<td><?php echo $row['cost']; ?></td>
								<td><?php echo $row['description']; ?></td>
								<td><?php echo $row['assetHierarchy']; ?></td>
								<td><?php echo $row['usefulLife']; ?></td>
								<td><?php echo $row['valuationInfo']; ?></td>
								<td><?php echo $row['carryingValue']; ?></td>
								
								<td>
									<form action="editAsset.php" method="post">
										<input type="hidden" name="edt_id" id="edt_id" value="<?php echo $row['id']; ?>" >
										<button class="btn btn-info" type="submit" name="edit_btn"><i class="fa fa-edit" style="color:white"></i></button>
									</form>
								</td>
								
								
							
							</tr>
							
							<?php
								
							$i++;
							}
						}
							
						else{
							echo "No Records Found";
						}
						
						?>
                                    </tbody>
                                </table>
							
							
							
                        </div>
                    </div>
                </div>
            </div>
            
			<?php include 'footer.php';?>
			
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
	
    <script src="/GreatMinds/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="/GreatMinds/assets/js/theme.js"></script>
	<script src="/GreatMinds/assets/js/core/jquery.min.js"></script> 
	<script src="/GreatMinds/assets/js/jquery-migrate-1.1.1.js"></script> 
	<script src="/GreatMinds/assets/js/script.js"></script>
	<script src="/GreatMinds/assets/js/jquery-confirm.js"></script>
	
	
		<!-- Downloads/Print -->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>
	
</body>

</html>