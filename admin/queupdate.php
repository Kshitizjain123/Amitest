 <?php
session_start();
include("database.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Page: Questions</title>
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
 $id=$_GET['que_id'];
$query=mysqli_query($con,"select * from questions where que_id='$id'");
$res=mysqli_fetch_assoc($query);


if(isset($update))
{

$query="update questions SET que_desc='$addque',ans1='$ans1',ans2='$ans2',ans3='$ans3',ans4='$ans4',true_ans='$anstrue' where que_id='$id'";	
mysqli_query($con,$query);
echo "records updated";	
	
	}



?>
<form name="form1" method="post" onSubmit="return check();">
  <table class="table table-striped">

 <tr>
        <td height="26"><div align="left"><strong> Enter Question </strong></div></td>
        <td>&nbsp;</td>
	    <td><textarea class="form-control"name="addque" cols="60" rows="2" id="addque">
		<?php echo $res['que_desc']; ?>
		</textarea></td>
    </tr>
    <tr>
      <td height="26"><div align="left"><strong>Enter Answer1 </strong></div></td>
      <td>&nbsp;</td>
      <td><input class="form-control"value="<?php echo $res['ans1']; ?>" name="ans1" type="text" id="ans1" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter Answer2 </strong></td>
      <td>&nbsp;</td>
      <td><input class="form-control" value="<?php echo $res['ans2']; ?>" name="ans2" type="text" id="ans2" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter Answer3 </strong></td>
      <td>&nbsp;</td>
      <td><input class="form-control" value="<?php echo $res['ans3']; ?>" name="ans3" type="text" id="ans3" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter Answer4</strong></td>
      <td>&nbsp;</td>
      <td><input class="form-control" name="ans4"value="<?php echo $res['ans4']; ?>" type="text" id="ans4" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter True Answer </strong></td>
      <td>&nbsp;</td>
      <td><input class="form-control"value="<?php echo $res['true_ans']; ?>" name="anstrue" type="text" id="anstrue" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input class="btn btn-primary" type="submit" name="update" value="UPDATE" ></td>
    </tr>
	</table>
</form>
<p>&nbsp; </p>