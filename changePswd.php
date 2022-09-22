<?php 

	include 'connection.php';

	error_reporting(0);


	$emailChnge = $_GET['email'];
	echo $emailChnge;


	if (isset($_POST['submit'])) {

		
		$password = md5($_POST['password']);
		$cpassword = md5($_POST['cpassword']);

		if ($password == $cpassword) {
			$sql = "UPDATE users
					SET password = '$password'
					WHERE email = '$emailChnge'";
					
			$result = mysqli_query($conn, $sql);
			echo "<script>alert('$emailChnge')</script>";
			echo "<script>alert('Password Changed.')</script>";
			
			header("Location: index.php");
			} 
			
		 else {
		
			echo "<script>alert('Password Not Matched.')</script>";
		}
	}


?>





<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Register - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
	<link rel="stylesheet" href="assets/css/jquery-confirm.css" rel="stylesheet">
</head>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<body class="bg-gradient-primary">
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;assets/img/dogs/home.png&quot;);"></div>
                    </div><br>

                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Forgot Your Password?</h4>
                            </div>
					
							
                            <form class="user" method="POST">
							
                                <div class=" mb-3">
                                    
										<input class="form-control form-control-user" type="password" id="password" placeholder="New Password" name="password">
										<br>
										<input class="form-control form-control-user" type="password" id="cpassword" placeholder="Confirm Password" name="cpassword">
									
                                </div>
								
								<button class="btn btn-primary d-block btn-user w-100" type="submit" id="sumbit" name="submit">Change Password</button>
								
                                <hr>
                                <hr>
                            </form>
							
							
                            <div class="text-center"><a class="small" href="index.php">Already have an account? Login!</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
	<script src="/GreatMinds/assets/js/jquery-confirm.js"></script> 
</body>

</html>