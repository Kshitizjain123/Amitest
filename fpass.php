<?php
include("database.php");

if(isset($_POST['submit']))
{
    if(!empty($_POST['pass1']) && !empty($_POST['pass2']))
    {   $user=$_POST['email'];
        $str1=$_POST['pass1'];
        $password=md5($str1);
        $str2=$_POST['pass2'];
        if(strcmp($str1,$str2)==0)
        {
            $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,'major_project') or die("cannot select DB");
            $query3="update users set Password='$password' where Email='$user'";
            $rs=mysqli_query($con,$query3);
        }
        else {
            echo "<h6 style='position:absolute;left:26%;top:54%;color:red'>Password do not match</h6>";
            
        }
    }
    else{ echo "<h6 style='position:absolute;left:26%;top:54%;color:red'>All Fields are required !</h6>";}
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Forgot Password</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="assets/img/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/login/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/login/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/fonts/login/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/login/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/css/login/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/login/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/login/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="assets/css/login/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="assets/css/login/util.css">
	<link rel="stylesheet" type="text/css" href="assets/css/login/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-33">
						Forgot Password
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid Phone Number is Required.">
						<input class="input100" type="text" name="Phone" placeholder="Phone Number">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass1" placeholder="New Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
                    </div>
                    <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass2" placeholder="Retype New Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn" name="submit">
							Change Password
						</button>
					</div>

					<div class="text-center">
						<span class="txt1">
							Create an account?
						</span>

						<a href="signup.php" class="txt2 hov1">
							Sign up
						</a>
					</div>

					<div class="text-center">
						<span class="txt1">
							Back to
						</span>

						<a href="index.php" class="txt2 hov1">
							Login
						</a>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	
<!--===============================================================================================-->
	<script src="assets/js/login/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/login/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/login/popper.js"></script>
	<script src="assets/js/login/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/login/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/login/moment.min.js"></script>
	<script src="assets/js/login/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/login/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/login/main.js"></script>

</body>
</html>