<?php
	session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>All Users</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        
		
		<?php include 'sidebar.php';?>
		
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        
						<h3>All Users</h3>
						
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
					
					 $sql = "SELECT id, name, surname, email, phone, IDno, IF(role = 1, 'Admin', 'User') as role, date
							FROM users
							WHERE active = 1";
							
							$result = mysqli_query($conn, $sql);
							
							
							
				?>
				
				
				
				
                <div class="container-fluid">
                    
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <h4 class="text-primary m-0 fw-bold">User Information <button class="btn btn-primary d-block btn-user w-30" style="float: right; background-color:#934ae9" onclick="document.location='addUser.php'">Add User</button></h4>
                        </div>
                        <div class="card-body">
						<br>
                            
				<div>
								<a style=" background-color: #934ae9;
								  color: white;
								  border-style:solid;
								  border-width:5px;
								  padding: 5px 10px;
								  text-align: center;
								  text-decoration: none;
								  display: inline-block;" class="toggle-vis" data-column="0">Name</a>
								  - 
								  <a style="background-color: #934ae9;
								  color: white;
								  border-style:solid;
								  border-width:5px;
								  padding: 5px 10px;
								  text-align: center;
								  text-decoration: none;
								  display: inline-block;" class="toggle-vis" data-column="1">Surname</a> - 
								  
								  
								  <a style="background-color: #934ae9;
								  color: white;
								  border-style:solid;
								  border-width:5px;
								  padding: 5px 10px;
								  text-align: center;
								  text-decoration: none;
								  display: inline-block;" class="toggle-vis" data-column="2">ID</a> - 

								  <a style="background-color: #934ae9;
								  color: white;
								  border-style:solid;
								  border-width:5px;
								  padding: 5px 10px;
								  text-align: center;
								  text-decoration: none;
								  display: inline-block;" class="toggle-vis" data-column="3">Phone</a> - 
								  
								  
								  <a style="background-color: #934ae9;
								  color: white;
								  border-style:solid;
								  border-width:5px;
								  padding: 5px 10px;
								  text-align: center;
								  text-decoration: none;
								  display: inline-block;" class="toggle-vis" data-column="4">Email</a> - 
								  
								  
								  <a style="background-color: #934ae9;
								  color: white;
								  border-style:solid;
								  border-width:5px;
								  padding: 5px 10px;
								  text-align: center;
								  text-decoration: none;
								  display: inline-block;" class="toggle-vis" data-column="5">Role</a> - 
								  
								  
								  <a style="background-color: #934ae9;
								  color: white;
								  border-style:solid;
								  border-width:5px;
								  padding: 5px 10px;
								  text-align: center;
								  text-decoration: none;
								  display: inline-block;" class="toggle-vis" data-column="6">Registered Date</a>
				</div>
				
				
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>ID</th>
                <th>phone</th>
                <th>Email</th>
                <th>Role</th>
                <th>Registered Date</th>
                <th>Edit</th>
				<th>Delete</th>
            </tr>
        </thead>
		
        <tbody>
            <?php
						if (mysqli_num_rows($result)){
							$i = 0;
							while($row = mysqli_fetch_assoc($result)){
								
								
								
								
								?>
							<tr >
							  
								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['surname']; ?></td>
								<td><?php echo $row['IDno']; ?></td>
								<td><?php echo $row['phone']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['role'] ?></td>
								<td><?php echo $row['date']; ?></td>
								<td>
									<form action="editUser.php" method="post">
										<input type="hidden" name="edt_id" id="edt_id" value="<?php echo $row['id']; ?>">
										<button class="btn btn-info" type="submit" name="edit_btn" style="background-color:#934ae9"><i class="fa fa-edit" style="color:white; "></i></button>
									</form>
								</td>
								
								<td>
									<!--form method="post" action = "updateProcess.php" name = "deleteFrm" id="deleteFrm">
										<input type="hidden" name="dlt_id" value="">
										<button class="btn btn-danger" type="submit" id="delete_btn" name="delete_btn"><i class="fa fa-trash"></i></button>
									</form-->
									
									<button class="btn btn-danger deleteUser_btn" style="background-color:red" type="submit" id="<?php echo $row['id']; ?>" name="delete_btn"><i class="fa fa-trash"></i></button>
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
				
							
                        
							
							
							
							<!--end -->
							
							
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
	
	<script>
		function Rowonclicks(id) {
			location.href = "addUser.php?id="+id;	
		}
	</script>
	
	
	<!-- Datatable-->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
	
	
	
	
</body>

</html>