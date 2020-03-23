  <?php  
if(isset($_POST["submit"])){  
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


 

?>  <!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title Page-->
    <title>Signup</title>

    <!-- Icons font CSS-->
    <link href="assets/fonts/signup/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="assets/fonts/signup/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="assets/css/signup/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/css/signup/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets/css/signup/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680" style="box-shadow:0px 0px 2px 0px">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form method="POST" action="" enctype='multipart/form-data'>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">First Name</label>
                                    <input class="input--style-4" type="text" name="first_name">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Last Name</label>
                                    <input class="input--style-4" type="text" name="last_name">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Phone Number</label>
                                    <input class="input--style-4" type="text" name="phone">
                                </div>
                            </div>
                            
                        </div>
 <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Password</label>
                                    <input class="input--style-4" type="password" name="pass">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Confirm Password</label>
                                    <input class="input--style-4" type="password" name="pass">
                                </div>
                            </div>
                            
                        </div>
                         <div class="row row-space">
                          

                            
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                 <label class="label">Course</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="course">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option>BCA</option>
                                    <option>BCA(Eve)</option>
                                    <option>Bsc.IT</option>
                                    <option>Dual(BCA+MCA)</option>
                                    <option>MCA</option>
                                    </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                 <label class="label">Semester</label>
                                    <div class="rs-select2 js-select-simple select--no-search">
                                    <select name="semester">
                                    <option disabled="disabled" selected="selected">Choose option</option>
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
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                  
<input type='file' name='file' />
                        <div class="p-t-15" style="text-align:center;">
                            <button class="btn btn--radius-2 btn--blue" type="submit" href="login.html" name="submit">submit</button>
                        </div>

                        <div style="text-align:center; margin: 0px; padding: 0px; box-sizing: border-box;">
                            <span style="font-family: OpenSans-Regular; font-size: 15px; line-height: 1.4; color: #999999; margin: 0px; padding: 0px; box-sizing: border-box;">
                                Back to
                            </span>
    
                            <a href="index.php" style="font-family: OpenSans-Regular; font-size: 15px; line-height: 1.4; color: #4272d7; margin: 0px;">
                                Login
                            </a>
                        </div>

                    </form>
 
                  
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/signup/jquery.min.js"></script>
    
    <script src="assets/js/signup/select2.min.js"></script>
    <script src="assets/js/signup/moment.min.js"></script>
    <script src="assets/js/signup/daterangepicker.js"></script>

  
    <script src="assets/js/signup/global.js"></script>
    
     
<?php

        ?>
</body>
</html>
