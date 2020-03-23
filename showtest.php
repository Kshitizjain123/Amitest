<?php   
session_start();  
include("database.php");
if(!isset($_SESSION["sess_user"])){  
    header("location:index.php");  
} else { 
  
    extract($_GET);
$rs1=mysqli_query($con,"select * from subjects where sub_id=$subid");
$row1=mysqli_fetch_array($rs1);
$msg=$row1[1];
$rs=mysqli_query($con,"select * from tests where sub_id=$subid");
$user=$_SESSION['sess_user'];   
 $sql = "SELECT * FROM `images` WHERE `username`= '$user'";
$result1 = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result1);

    $image = $row['image_path']; 
    $_SESSION['sid']=$subid;  
?>
    <!doctype html>  
<html>  
<head>  
<title>User Panel</title>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.com/libraries/Chart.js" type="application/javascript"></script>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" integrity="sha256-PHcOkPmOshsMBC+vtJdVr5Mwb7r0LkSVJPlPrp/IMpU=" crossorigin="anonymous" />
   
    <style>
    .sidenav {
  height: 100%; /* 100% Full-height */
  width: 300px; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
background: linear-gradient(to right, #FF4B2B, #FF416C); /* Black*/

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
   
         <div class="sidenav">
         <div class="brand my-5 text-center">
       <img src='<?php echo $image;?>'  style="height: 150px;width: 150px;border-radius:100%">
             <h3 class="text-white"><?=$_SESSION['sess_user'];?></h3>
       </div>
  <a href="user.php" class="btn2"><span class="fa fa-line-chart">       Dashboard</span></a>
             <a href="#" class="btn2 active"><span class="fa fa-book">  Subjects</span></a>
  <a href="settings.php" class="btn2"><span class="fa fa-gear">  Settings</span></a>
        
</div>
    <div class="main_content">
    <h1><?php echo $msg;
       
        ?></h1>
      <div class="container my-5">
        <div class="row">
           
            
             <?php 
  // looping 
  while($row=mysqli_fetch_object($rs)):?>
   <div class="col-sm-4 mx-auto my-3 py-5 text-center animated fadeIn" style="max-width:300px;box-shadow:17px -1px 20px 2px;
background-color: #000000;
background-image: linear-gradient(147deg, #000000 0%, #434343 74%);">
     <h5 align="center" class="text-white py-3"><?php echo $row->test_name;  //row id ?></h5>
     <?php echo "<button class='btn btn-warning my-4'><td align=center ><a style=text-decoration:none;color:black href=quiz.php?testid=$row->test_id&subid2=$subid&subname=$subname><font size=4>Take Quiz</font></a></button>"?>
   </div>
  
  
  <?php endwhile;?>
           
           
            </div>
        
        
        </div>
    </div> 
      
  
    
       
<?php
if(mysqli_num_rows($rs)<1)
{
	echo "<br><br><h4 class=head1 style='margin-top:200px;margin-left:400px;color:red'> No Quiz for this Subject </h4>";
}
    
}

?>
    </body>
</html>