<?php   
session_start(); 
include("database.php");
if(!isset($_SESSION["sess_user"])){  
    header("location:index.php");  
} else { 
$query2="select * from subjects"; // Fetch all the records from the table address
$result=mysqli_query($con,$query2); 
$user=$_SESSION['sess_user'];   
 $sql = "SELECT * FROM `images` WHERE `username`= '$user'";
$result1 = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result1);

    $image = $row['image_path'];
    
if(isset($_POST['submit']))
{
    if(!empty($_POST['pass1']) && !empty($_POST['pass2']))
    {
        $str1=$_POST['pass1'];
        $password=md5($str1);
        $str2=$_POST['pass2'];
        if(strcmp($str1,$str2)==0)
        {
            $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,'major_project') or die("cannot select DB");
            $query3="update users set Password='$password' where F_Name='$user'";
            $rs=mysqli_query($con,$query3);
        }
        else {
            echo "<h6 style='position:absolute;left:26%;top:54%;color:red'>Password do not match</h6>";
            
        }
    }
    else{ echo "<h6 style='position:absolute;left:26%;top:54%;color:red'>All Fields are required !</h6>";}
    
}

 
}

if(isset($_POST['upload']))
{
      $target_path = "assets/img/"; 
$str=rand(1,9999);
$target_path = $target_path.$str.".png";  
$insertQuery = "update images set image_path='$target_path' where username='$user'";
if(mysqli_query($con, $insertQuery)) {
if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) { 
 $a="File uploaded successfully!"; 
} else{ 
 $a="Sorry, file not uploaded, please try again!"; 
} 
}}
    if(isset($_POST['color']))
    
{$con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,'major_project') or die("cannot select DB");
    $color=$_POST['mycolor'];
    $q="insert into users(Color) values('".$color."') where F_Name='".$user."'" ;
    $r=mysqli_query($con,$q);
    if($r)
    {
        echo "Succesfully Added";
    }
 else{echo "<h1 style='position:absolute;left:70%;top:50%'>Error</h1>";}
}



?>
    <!doctype html>  
<html>  
<head>  
<title>User Panel</title>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.com/libraries/Chart.js" type="application/javascript"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" integrity="sha256-PHcOkPmOshsMBC+vtJdVr5Mwb7r0LkSVJPlPrp/IMpU=" crossorigin="anonymous" />
    <script src="assets/js/login/jscolor.js"></script>
   
    <style>
    .sidenav {
  height: 100%; /* 100% Full-height */
  width: 300px; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
 	background: linear-gradient(to right, #FF4B2B, #FF416C);/* Black*/

   /* Place content 60px from the top */

}
        .sidenav a {
  padding: 8px 8px 8px 12px;
  text-decoration: none;
  font-size: 20px;
  color:white;
  display: block;
  transition: 0.3s;
}

.sidenav .active{
    background-color:black;
    color: white;
    
}
/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #f1f1f1;
    background-color:darkgray;
    text-decoration: none;
}

.sidenav .links{padding-top: 300px;padding-left: 20px}


/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

        .main_content{position: absolute;margin-left: 400px;top: 10%;width: 70%}
        
        .mynav{position: absolute;left: 30%;top: 0;width: 70%}
        .mynav button{}
        
        #chartContainer{position: absolute;top: 50%;left: 25%}
    </style>
</head>  
<body>  
   
         <div class="sidenav" id="mc">
         <div class="brand my-5 text-center">
       <img src='<?php echo $image;?>'  style="height: 150px;width: 150px;border-radius:100%">
             <h3 class="text-white"><?=$_SESSION['sess_user'];?></h3>
       </div>
  <a href="user.php" class="btn2"><span class="fa fa-line-chart">       Dashboard</span></a>
             <a href="subjects.php" class="btn2"><span class="fa fa-book">  Subjects</span></a>
  <a href="#" class="btn2 active"><span class="fa fa-gear">  Settings</span></a>
        
</div> 
    <div class="main_content">
     <h1>Settings</h1><br><br>
        <div class="container">
                <div class="card1">
        <div class="row py-3">
           <h3>Update Password</h3>
           </div>
            <form action="" method="post">
        <div class="row py-2">
            <input class="px-3" type="password" name="pass1" placeholder="Enter New Password">
            </div>
              <div class="row py-2">
            <input class="px-3" type="password" name="pass2" placeholder="Confirm New Password">
                  <button class="btn btn-primary mx-3" name="submit">Change</button>
            </div>
                    </form></div>
            <div class="card2">
            <div class="row py-5">
            <h3>Change Profile Photo</h3>
                
            </div>
            <form action="" method="post" enctype='multipart/form-data'>
            <div class="row py-2">
                <input type='file' name='file' />
                <button class="btn btn-danger" name="upload">Upload</button>
            </div>
            </form>
             
                </div>
         
        </div>
 
    </div>
  
        <div class="mynav">
     <a href="index.php"><button class="btn btn-danger float-right mx-5 my-3">Logout</button></a>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/js/mdb.min.js"></script>

     <script>
function update(jscolor) {
    // 'jscolor' instance can be used as a string
    document.getElementById('mc').style.backgroundColor = '#' + jscolor
}
</script>
    </body>
</html>