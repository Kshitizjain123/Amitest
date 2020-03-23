<?php   
session_start();  
include("database.php");
if(!isset($_SESSION["sess_user"])){  
    header("location:adminlogin.php");  
} else {  }
?>  <!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Page: Applications</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/admin/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/admin/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/admin/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
         <a href="adminlogin.php" style="position:absolute;margin-top:10px;left:90%" class="btn btn-danger square-btn-adjust">Logout</a>  
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu" style="font-size: 20px; padding: 10px;">
				<img src="../assets/img/find_user.png" style="padding-left:40px;padding-bottom:40px;padding-top:40px">
				
					
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
                        <a  href="application.php">Applications</a>
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
                 <!-- /. ROW  -->
                 <hr />

               
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
