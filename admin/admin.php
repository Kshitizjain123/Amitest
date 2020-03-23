<?php   
session_start();  
include("database.php");
if(!isset($_SESSION["sess_user"])){  
    header("location:adminlogin.php");  
} else {  }
  
$query = mysqli_query($con,"SELECT * FROM users");
$number=mysqli_num_rows($query);
$query2="select * from users"; // Fetch all the records from the table address
$result=mysqli_query($con,$query2);
?>  
<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Page: Home</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/admin/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/admin/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/admin/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <script src="../assets/js/admin/proicons.js"></script>
</head>
<body>
    <div id="wrapper">
        <a href="adminlogin.php" style="position:absolute;margin-top:10px;left:90%" class="btn btn-danger square-btn-adjust">Logout</a>
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu" style="font-size: 20px; padding: 10px;">
				<div class="user">	<img src="../assets/img/find_user.png" style="padding-left:40px;padding-bottom:40px;padding-top:40px">
				</div>
				
                    <li>
                        <a  href="admin.php"> Dashboard</a>
                    </li>

                    <li>
                        <a  href="subject.php">Subjects</a>
                    </li>
                    
                    <li>
                        <a  href="ques.php">Questions</a>
                    </li>

                    
                    <li>
                        <a  href="test.php">Tests</a>
                    </li>
                    
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Admin Dashboard</h2>   
                        <h5>Welcome <?=$_SESSION['sess_user'];?> , Great to see you back. </h5>
                      
                        


                        
                    </div>
                </div>
                 <hr />
<!-- /. H.ROW  -->


                 
                 <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-6">           
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-red set-icon">
                        <i class="fa fa-envelope-o"></i>
                    </span>
                    <div class="text-box" >
                        <p class="main-text">120 New</p>
                        <p class="text-muted">Messages</p>
                    </div>
                 </div>
                 </div>
                        <div class="col-md-3 col-sm-6 col-xs-6">           
                <div class="panel panel-back noti-box">
                    <span class="icon-box bg-color-blue set-icon">
                        <i class="fa fa-bell-o"></i>
                    </span>
                    <div class="text-box" >
                        <p class="main-text">240 New</p>
                        <p class="text-muted">Notifications</p>
                    </div>
                 </div>
                 </div>

                 <div class="col-md-3 col-sm-6 col-xs-6">           
                    <div class="panel panel-back noti-box">
                        <span class="icon-box bg-color-red set-icon">
                            <i class="fad fa-users"></i>
                        </span>
                        <div class="text-box" >
                            <p class="main-text"><?php echo $number?></p>
                            <p class="text-muted">Total Users</p>
                        </div>
                     </div>
                     </div>

                </div>
               <table class="table">
  <tr>
    <td align="center">First Name</td>
    <td align="center">Last Name</td>
     <td align="center">Email</td> 
    <td align="center">Contact Number</td>
    <td align="center">Course</td>
          <td align="center">Semester</td>
  </tr>
  <?php 
  // looping 
  while($row=mysqli_fetch_object($result)):?>
  <tr>
    <td align="center"><?php echo $row->F_Name;  //row id ?></td>
    <td align="center"><?php echo $row->L_Name; // row first name ?></td>
    <td align="center"><?php echo $row->Email; //row last name  ?></td>
    <td align="center"><?php echo $row->Phone; //row contact number ?></td>
      <td align="center"><?php echo $row->Course;  ?></td>
         <td align="center"><?php echo $row->Sem;  ?></td>
  
  </tr>
  <?php endwhile;?>
</table>

                 <!--<table border="5px">
                    <caption>Select the Class</caption>

                <tr>
                    <td colspan="10"><center>BCA</center></td>
                </tr>
                <tr>
                    <td style="width: 20px;">BCA-1</td>
                    <td style="width: 20px;">BCA-2</td>
                    <td style="width: 20px;">BCA-3</tdstyle="width: 20px;">
                    <td style="width: 20px;">BCA-4</td>
                    <td style="width: 20px;">BCA-5</td>
                    <td style="width: 20px;">BCA-6</td>
                    <td style="width: 20px;"></td>
                    <td style="width: 20px;"></td>
                    <td style="width: 20px;"></td>
                    <td  style="width: 20px;"></td>
                </tr>

                <tr>
                    <td colspan="10"><center>Bsc.IT</center></td>
                </tr>
                <tr>
                    <td>Bsc.IT-1</td>
                    <td>Bsc.IT-2</td>
                    <td>Bsc.IT-3</td>
                    <td>Bsc.IT-4</td>
                    <td>Bsc.IT-5</td>
                    <td>Bsc.IT-6</td>
                    <td></td><td></td><td></td><td></td>
                </tr>
                
                <tr>
                    <td colspan="10"><center>BCA(eve)</center></td>
                </tr>
                <tr>
                    <td>BCA(eve)-1</td>
                    <td>BCA(eve)-2</td>
                    <td>BCA(eve)-3</td>
                    <td>BCA(eve)-4</td>
                    <td>BCA(eve)-5</td>
                    <td>BCA(eve)-6</td>
                    <td></td><td></td><td></td><td></td>
                </tr>

                <tr>
                    <td colspan="10"><center>Dual (BCA+MCA)</center></td>
                </tr>
                <tr>
                    <td>Dual-1</td>
                    <td>Dual-2</td>
                    <td>Dual-3</td>
                    <td>Dual-4</td>
                    <td>Dual-5</td>
                    <td>Dual-6</td>
                    <td style="width: 30px;">Dual-7</td>
                    <td style="width: 30px;">Dual-8</td>
                    <td style="width: 30px;">Dual-9</td>
                    <td style="width: 30px;">Dual-10</td>
                </tr>

                <tr>
                    <td colspan="10"><center>MCA</center></td>
                </tr>
                <tr>
                    <td>MCA-1</td>
                    <td>MCA-2</td>
                    <td>MCA-3</td>
                    <td>MCA-4</td>
                    <td>MCA-5</td>
                    <td>MCA-6</td>
                    <td></td><td></td><td></td><td></td>
                </tr>

                <tr>
                    <td colspan="10"><center>M.Sc.(NT&M)</center></td>
                </tr>
                <tr>
                    <td>M.Sc.(NT&M)-1</td>
                    <td>M.Sc.(NT&M)-2</td>
                    <td>M.Sc.(NT&M)-3</td>
                    <td>M.Sc.(NT&M)-4</td>
                    <td></td>
                    <td></td>
                    <td></td><td></td><td></td><td></td>
                </tr>

                 </table>-->
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../assets/js/admin/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/admin/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/admin/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/admin/custom.js"></script>
    
   
</body>
</html>
