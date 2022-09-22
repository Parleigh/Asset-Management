<?php 

include 'connection.php';

error_reporting(0);

session_start();

if (isset($_SESSION['name'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$IDno = $_POST['IDno'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);
	
	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (name, surname, email, phone, IDno, role, password, active)
					VALUES ('$name', '$surname', '$email', '$phone', '$IDno', 2, '$password', 0)";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('User Is Successfuly Registered') </script>";
						
				$name = "";
				$surname = "";
				$email = "";
				$phone = "";
				$IDno = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
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
<body class="bg-gradient-primary">
    <div class="container">
        <div class="card shadow-lg o-hidden border-0 my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-flex">
                        <div class="flex-grow-1 bg-register-image" style="background-image: url(&quot;assets/img/dogs/home.png&quot;);"></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h4 class="text-dark mb-4">Create an Account!</h4>
                            </div>
							
							
                            <form class="user" method="POST">
							
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
										<input class="form-control form-control-user" type="text" id="name" placeholder="First Name" name="name">
									</div>
                                    <div class="col-sm-6">
										<input class="form-control form-control-user" type="text" id="surname" placeholder="Last Name" name="surname">
									</div>
                                </div>
								
                                <div class="mb-3">
									<input class="form-control form-control-user" type="email" id="email" aria-describedby="emailHelp" placeholder="Email Address" name="email">
								</div>
								
								 <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
										<input class="form-control form-control-user" type="text" id="phone" placeholder="Phone Number" name="phone" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxLength = "10">
									</div>
                                    <div class="col-sm-6">
										<input class="form-control form-control-user" type="text" id="IDno" placeholder="Identity Number(ID)" name="IDno" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxLength = "13">
									</div>
                                </div>
								
                                <div class="row mb-3">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
										<input class="form-control form-control-user" type="password" id="password" placeholder="Password" name="password">
									</div>
                                    <div class="col-sm-6">
										<input class="form-control form-control-user" type="password" id="cpassword" placeholder="Repeat Password" name="cpassword" >
									</div>
                                </div>
								
								<button class="btn btn-primary d-block btn-user w-100" type="submit" name="submit">Register Account</button>
								
                                <hr>
                                <hr>
                            </form>
							
							
                            <!--div class="text-center"><a class="small" href="forgot-password.html">Forgot Password?</a></div-->
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