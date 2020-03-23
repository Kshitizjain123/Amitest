<?php   
session_start(); 
include("database.php");
if(!isset($_SESSION["sess_user"])){  
    header("location:adminlogin.php");  
} else {  }

if(isset($_POST["submit"])){  
if(!empty($_POST['addque']) && !empty($_POST['anstrue']) && !empty($_POST['ans1']) && !empty($_POST['ans2']) && !empty($_POST['ans3']) && !empty($_POST['ans4']))
   {$testid=$_POST['testid'];
    $subid=$_POST['subid'];
    $name=$_POST['addque'];  
    $ans=$_POST['anstrue'];
    $a=$_POST['ans1'];
     $b=$_POST['ans2'];
     $c=$_POST['ans3'];
     $d=$_POST['ans4'];
    
    $sql="insert into questions(test_id,que_desc,ans1,ans2,ans3,ans4,true_ans) values('$testid','$name','$a','$b','$c','$d','$ans')";  
   $result=mysqli_query($con,$sql); 
if($result)
{
    echo "Added Successfully";
}
else{echo "Error";}



}}


?> 



<!DOCTYPE html>
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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
                 <!-- /. ROW  -->
                 <hr />
              <form name="form1" method="post" onSubmit="return check();">
  <table class="table table-striped">
    <tr>
       <td width="24%" height="32"><div align="left">
          <strong>Select Subject Name </strong></div></td>
           <td width="1%" height="5"></td>  
      <td width="75%" height="32"><select class="form-control" name="subid" id="testid">
<?php
                $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,'major_project') or die("cannot select DB");
$rs=mysqli_query($con,"Select * from subjects order by sub_name",$cn);
	  while($row=mysqli_fetch_array($rs))
{
$sub=$row[1];
echo "<option value='$row[0]'>$row[1]</option>";

}
?>
      </select>
        </td></tr>
          <td width="24%" height="32"><div align="left">
          <strong>Select Test Name </strong></div></td>
        <td width="1%" height="5"></td>  
      <td width="75%" height="32"><select class="form-control" name="testid" id="testid">
<?php
                $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,'major_project') or die("cannot select DB");
$rs=mysqli_query($con,"Select * from tests",$cn);
	  while($row=mysqli_fetch_array($rs))
{


echo "<option value='$row[0]'>$row[2]</option>";

}
?>
      </select>
        </td>
    <tr>
        <td height="26"><div align="left"><strong> Enter Question </strong></div></td>
        <td>&nbsp;</td>
	    <td><textarea class="form-control" name="addque" cols="60" rows="2" id="addque"></textarea></td>
    </tr>
    <tr>
      <td height="26"><div align="left"><strong>Enter Answer1 </strong></div></td>
      <td>&nbsp;</td>
      <td><input class="form-control" name="ans1" type="text" id="ans1" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter Answer2 </strong></td>
      <td>&nbsp;</td>
      <td><input class="form-control" name="ans2" type="text" id="ans2" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter Answer3 </strong></td>
      <td>&nbsp;</td>
      <td><input class="form-control" name="ans3" type="text" id="ans3" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter Answer4</strong></td>
      <td>&nbsp;</td>
      <td><input class="form-control" name="ans4" type="text" id="ans4" size="85" maxlength="85"></td>
    </tr>
    <tr>
      <td height="26"><strong>Enter True Answer </strong></td>
      <td>&nbsp;</td>
      <td><input class="form-control" name="anstrue" type="text" id="anstrue" size="50" maxlength="50"></td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input class="btn btn-primary" type="submit" name="submit" value="Add" ></td>
    </tr>
  </table>
</form>
                <?php
                $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,'major_project') or die("cannot select DB");
    {
$sql=mysqli_query($con,"select * from questions");	
	
	echo "<table class='table table-striped'>";
	echo "<tr><th class='text-primary'>ID</th><th class='text-primary'>Test Id</th>
    <th class='text-primary'>Question</th>
  
	<th class='text-primary'>Update</th>
	<th class='text-primary'>Delete</th></tR>";
	
	while($result=mysqli_fetch_assoc($sql))
	{
$id=$result['que_id'];
	
	echo "<tr>";	
	echo "<td>".$result['que_id']. "</td>";
        echo "<td>".$result['test_id']."</td>";
	echo "<td>".$result['que_desc']."</td>";
        	
	echo "<td><a href='queupdate.php?que_id=$id'><span class='fa fa-pencil-square-o'></span></a></td>";
	echo "<td><a href='quedelete.php?que_id=$id'><span class='fa fa-trash-o'></span></a></td>";
	echo "</tr>";
	}
	echo "</table>";
}           
         ?>  
                          
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
