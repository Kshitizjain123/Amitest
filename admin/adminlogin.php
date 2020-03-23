  <?php  
include("database.php");
if(isset($_GET["submit"])){  
  
if(!empty($_GET['username']) && !empty($_GET['pass'])) {  
    $user=$_GET['username'];  
    $pass=$_GET['pass'];  
  
    $query=mysqli_query($con,"SELECT * FROM admin WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    } 
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
  session_start(); 
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: admin.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../assets/img/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/login/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/fonts/login/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/fonts/login/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/login/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../assets/css/login/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/login/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/login/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../assets/css/login/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../assets/css/login/util.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/login/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50" style="box-shadow:0px 0px 2px 0px">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-33">
						Admin Login
					</span>
                    <form action="" method="get">	<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<input type="submit" name="submit" class="login100-form-btn"
							value="Sign in" />
						
					</div></form>
				
					
					<div class="text-center p-t-45 p-b-4">
						<span class="txt1">
							Forgot
						</span>

						<a href="fpass.html" class="txt2 hov1">
							Password?
						</a>
					</div>
					<div class="text-center">
						<span class="txt1">
							Click here for
						</span>

						<a href="../index.php" class="txt2 hov1">
							User Login
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	
<!--===============================================================================================-->
	<script src="../assets/js/login/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/js/login/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/js/login/popper.js"></script>
	<script src="../assets/js/login/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/js/login/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../assets/js/login/moment.min.js"></script>
	<script src="../assets/js/login/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../assets/js/login/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="assets/js/login/main.js"></script>

</body>
</html>