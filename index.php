    <?php  
include("database.php");
if(isset($_GET["submit"])){  
  
if(!empty($_GET['email']) && !empty($_GET['pass'])) {  
    $email=$_GET['email'];  
    $rawpass=$_GET['pass'];  
    $pass=md5($rawpass);
  
    $query=mysqli_query($con,"SELECT * FROM users WHERE email='".$email."' AND Password='".$pass."'");  
    $query2=mysqli_query($con,"SELECT F_Name FROM users WHERE email='".$email."' AND Password='".$pass."'"); 
    $query3=mysqli_query($con,"update users set Last_Activity=NOW() where email='".$email."'");  
    $numrows=mysqli_num_rows($query); 
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbemail=$row['Email'];  
    $dbpassword=$row['Password']; 
    }
        while($row = mysqli_fetch_assoc($query2))
        {
            $dbuser=$row['F_Name'];
            
        }
  
    if($email == $dbemail && $pass == $dbpassword)  
    {  
  session_start(); 
    $_SESSION['sess_user']=$dbuser;  
  
    /* Redirect browser */  
    header("Location: user.php");  
    }  
    } else {  
    echo "Invalid username or password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  


 

?>
  <?php  
if(isset($_POST["submit2"])){  
if(!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email'])
  && !empty($_POST['phone']) && !empty($_POST['course']) && !empty($_POST['semester']) && !empty($_POST['pass']) ) {  
    $fname=$_POST['first_name'];  
    $lname=$_POST['last_name'];
    $email=$_POST['email'];
    $mobile=$_POST['phone'];
    $rawpass=$_POST['pass'];
    $pass=md5($rawpass);
    $course=$_POST['course'];
    $sem=$_POST['semester'];
    $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,'major_project') or die("cannot select DB");  
    $query=mysqli_query($con,"SELECT * FROM users WHERE email='".$email."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO users(F_Name,L_Name,Email,Phone,Password,Course,Sem) VALUES('$fname','$lname','$email',$mobile,'$pass','$course','$sem')";  
  
    $result=mysqli_query($con,$sql);  
          if($result){  
     echo   "<h3 style='font-size:15px;color:red;margin-top:20px'>Account Successfully Created</h3>";
    } else {  
    echo "<h3 style='font-size:15px;color:red;margin-top:20px'>Failture</h3>"; 
    }  
  
    } else {  
   echo "<h3 style='font-size:15px;color:red;margin-top:20px'>That username already exists! Please try again with another.</h3>";
    }  
  
} else {  
    echo "<h3 style='font-size:15px;color:red;margin-top:20px'>All fields are required!</h3>";  
}
  
         $target_path = "assets/img/"; 
$str=rand(1,9999);
$target_path = $target_path.$str.".png";  
$insertQuery = "INSERT into images (image_path,username) values ('$target_path','$fname')";
if(mysqli_query($con, $insertQuery)) {
if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) { 
 $a="File uploaded successfully!"; 
} else{ 
 $a="Sorry, file not uploaded, please try again!"; 
} 
}}


 

?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="assets/img/favicon.ico" />
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
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

body {
	background: #f6f5f7;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
}

h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	border: 1px solid #FF4B2B;
	background-color: #FF4B2B;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}
        
select{
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background: #FF416C;
	background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
	background: linear-gradient(to right, #FF4B2B, #FF416C);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}
    </style>
    <!--===============================================================================================-->
</head>

<body>

    <!--<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50" style="box-shadow:0px 0px 2px 0px">
                <form class="login100-form validate-form">
                    <span class="login100-form-title p-b-33">
                        Account Login
                    </span>
                    <form action="#" method="get">
                        <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                            <input class="input100" type="text" name="email" placeholder="Email">
                            <span class="focus-input100-1"></span>
                            <span class="focus-input100-2"></span>
                        </div>

                        <div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
                            <input class="input100" type="password" name="pass" placeholder="Password">
                            <span class="focus-input100-1"></span>
                            <span class="focus-input100-2"></span>
                        </div>

                        <div class="container-login100-form-btn m-t-20">
                            <button class="login100-form-btn" type="submit" name="submit">
                                Sign in
                            </button>
                        </div>
                    </form>


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
                            Create an account?
                        </span>

                        <a href="signup.php" class="txt2 hov1">
                            Sign up
                        </a>
                    </div>

                    <div class="text-center">
                        <span class="txt1">
                            Click here for
                        </span>

                        <a href="admin/adminlogin.php" class="txt2 hov1">
                            Admin Login
                        </a>
                    </div>
                </form>
            </div>

        </div>
    </div>-->

<div class="container" id="container">
	<div class="form-container sign-up-container" style="overflow-y:scroll">
		   <form method="POST" action="" enctype='multipart/form-data'>
			<h1>Create Account</h1>
		
			
			<input type="text" placeholder="First Name" name="first_name"/>
			<input type="text" placeholder="Last Name" name="last_name"/>
               <input type="email" placeholder="Email" name="email"/>
            <input type="text" placeholder="Mobile Number" name="phone"/>
            <input type="password" placeholder="Password" name="pass"/>
              <select name="course">
                                    <option disabled="disabled" selected="selected">Course</option>
                                    <option>BCA</option>
                                    <option>BCA(Eve)</option>
                                    <option>Bsc.IT</option>
                                    <option>Dual(BCA+MCA)</option>
                                    <option>MCA</option>
                                    </select>
              <select name="semester">
                                    <option disabled="disabled" selected="selected">Semester</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    </select>
               <input type='file' name='file' />
			<button name="submit2">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fa fa-facebook"></i></a>
				<a href="#" class="social"><i class="fa fa-google-plus"></i></a>
				<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email" placeholder="Email" name="email"/>
			<input type="password" placeholder="Password" name="pass"/>
			<a href="fpass.php">Forgot your password?</a>
			<button name="submit">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p class="text-white">To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p class="text-white">Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
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

<script>
    const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
    </script>

</body>

</html>
