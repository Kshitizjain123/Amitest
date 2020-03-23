
    
    
    
    
    
    
    
    
    
    
    
    
    
    <?php   
session_start();  
include("database.php");
if(!isset($_SESSION["sess_user"])){  
    header("location:adminlogin.php");  
} else {  }




?>



<?php
          if(isset($_POST["submit"])){  
if(!empty($_POST['testname']) && !empty($_POST['totque'] && !empty($_POST['subid']))
) {  
    $subid=$_POST['subid'];
    $testname=$_POST['testname'];
    $totque=$_POST['totque'];
  
    $query=mysqli_query($con,"SELECT * FROM tests WHERE test_name='".$testname."'");  
 
    $sql="INSERT INTO tests(sub_id,test_name,total_que) VALUES('$subid','$testname','$totque')";  
  
    $result=mysqli_query($con,$sql);  
        if($result){  
     echo "Successfully Added";
    } else {  
    echo "Failture"; 
    }  
  
    } else {  
   echo "Already exists!";
    }  
  
} else {  
  
}  


	
	
	
        ?><!DOCTYPE html>
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
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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

                  <div class="main-content">
                <h1>Add Test</h1>
          <form name="form1" method="post" onSubmit="return check();">
  <table class="table table-striped">>
    <tr>
      <td width="49%" height="32"><div align="left"><strong>Enter Subject ID </strong></div></td>
        <td width="3%" height="5">  </td>
        <td width="48%" height="32"><select class="form-control" name="subid">
<?php
            $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,'major_project') or die("cannot select DB");    
$rs=mysqli_query($con,"Select * from subjects order by  sub_name",$cn);
	  while($row=mysqli_fetch_array($rs))
{
if($row[0]==$subid)
{
echo "<option value='$row[0]' selected>$row[1]</option>";
}
else
{
echo "<option value='$row[0]'>$row[1]</option>";
}
}
          
          
        
?>
      </select></td>
        
    <tr>
        <td height="26"><div align="left"><strong> Enter Test Name </strong></div></td>
        <td>&nbsp;</td>
	  <td><input class="form-control" name="testname" type="text" id="testname"></td>
    </tr>
    <tr>
      <td height="26"><div align="left"><strong>Enter Total Question </strong></div></td>
      <td>&nbsp;</td>
      <td><input class="form-control" name="totque" type="text" id="totque"></td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input class="btn btn-primary" type="submit" name="submit" value="Add" ></td>
    </tr>
  </table>
</form>
                      <?php
     {
$sql=mysqli_query($con,"select * from tests");	
	
	echo "<table class='table table-striped'>";
	echo "<tr><th class='text-primary'>ID</th><th class='text-primary'>Name</th>
	<th class='text-primary'>Total question</th>
	<th class='text-primary'>Update</th>
	<th class='text-primary'>Delete</th></tR>";
	
	while($result=mysqli_fetch_assoc($sql))
	{
$id=$result['test_id'];
	
	echo "<tr>";	
	echo "<td>".$result['test_id']. "</td>";
	echo "<td>".$result['test_name']."</td>";
	echo "<td>".$result['total_que']."</td>";
	echo "<td><a href='testupdate.php?test_id=$id'><span class='fa fa-pencil-square-o'></span></a></td>";
	echo "<td><a href='testdelete.php?test_id=$id'><span class='fa fa-trash-o'></span></a></td>";
	echo "</tr>";
	}
	echo "</table>";


}       ?>    
          
             
            </div> 
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

