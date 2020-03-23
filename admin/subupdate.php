<?php
session_start();
include("database.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Page: Subjects</title>
	<!-- BOOTSTRAP STYLES-->
<link href="../assets/css/admin/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/admin/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/admin/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
    
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     <div id="wrapper" >
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
<?php

extract($_REQUEST);
 $id=$_GET['sub_id'];
$q=mysqli_query($con,"select * from subjects where sub_id='$id'");
$res=mysqli_fetch_assoc($q);


if(isset($update))
{

$query="update mst_subject SET sub_name='$subname' where sub_id='$id'";	
mysqli_query($con,$query);
echo "records updated";	
	
	}



?>

<div style="margin:auto;width:90%;height:500px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
<title>Add Subject</title>
<form name="form1" method="post" onSubmit="return check();">
  <table class="table table-striped">
    <tr>
      <td width="45%" height="32"><div align="center"><strong>Enter Subject Name </strong></div></td>
        <td width="2%" height="5">  </td>
      <td width="53%" height="32">
          <input class="form-control" value="<?php echo $res['sub_name']; ?>" name="subname" placeholder="enter language name" type="text" id="subname"></td>
      </tr>
    <tr>
        <td height="26"> </td>
        <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input class="btn btn-primary" type="submit" name="update" value="Update" ></td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
</div>
</body>
</html>