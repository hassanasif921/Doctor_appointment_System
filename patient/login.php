<?php
session_start();
if(isset($_SESSION['pat']))
{
    header('location: ../index.php');
}
include '../connection.php';
if(isset($_POST['btnSubmit']))
{
   $usern =$_POST['username'];
   $pa =$_POST['pass'];
   $query = "Select * from patient where username='$usern' AND password='$pa'";
   $result=mysqli_query($conn,$query);
   $row = mysqli_fetch_array($result);
   $count = mysqli_num_rows($result);
   if($count)
   {
	   echo "<script>alert('Successfull');</script>";
	 $_SESSION['pat']=$row[0];
	 
	 $_SESSION['citypat']=$row[5];
	 

	 //echo "<script>windows.location(../AllDoctors.php);</script>";
	header('location: ../index.php');
   }else{
	echo "<script>alert('Wrong Credentials')</script>";

   }
}
include '../header.php';

?>

	<div class="limiter">
		
		<div class="container-login100">
		
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55" style="margin-top:170px">
				
				<form class="login100-form validate-form flex-sb flex-w" method="post">
					<span class="login100-form-title p-b-32">
						Patient Login
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
						
						<div>
							<a href="register.php" class="txt3">
								Not a user? Register
							</a>
</div>

						<div>
							<a href="forgotpassword.php" class="txt3">
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
	<?php
include '../footer.php';

?>