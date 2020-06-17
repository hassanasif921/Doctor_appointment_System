
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V14</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../assets/adminlogin/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/adminlogin/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/adminlogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/adminlogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/adminlogin/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../assets/adminlogin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/adminlogin/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/adminlogin/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../assets/adminlogin/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/adminlogin/css/util.css">
	<link rel="stylesheet" type="text/css" href="../assets/adminlogin/css/main.css">
<!--===============================================================================================-->
</head>
<body>
<?php
include '../header.php';

?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w" method="post">
					<span class="login100-form-title p-b-32">
						Account Login
					</span>

					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt3">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="btnSubmit">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../assets/adminlogin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/adminlogin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/adminlogin/vendor/bootstrap/js/popper.js"></script>
	<script src="../assets/adminlogin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/adminlogin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/adminlogin/vendor/daterangepicker/moment.min.js"></script>
	<script src="../assets/adminlogin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../assets/adminlogin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../assets/adminlogin/js/main.js"></script>

</body>
</html>
<?php
include 'connection.php';
if(isset($_POST['btnSubmit']))
{
   $usern =$_POST['username'];
   $pa =$_POST['pass'];
   $query = "Select * from admin where A_Username='$usern' AND A_password='$pa'";
   $result=mysqli_query($conn,$query);
   $row = mysqli_fetch_array($result);
      
      
      $count = mysqli_num_rows($result);
   if($count)
   {
    $_SESSION['admin']=$usern;
    
    echo "pass ";
   }else{
     echo "Failed ";
   }
}
?>