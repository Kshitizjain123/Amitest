<?php   
session_start();
include("database.php");
if(!isset($_SESSION["sess_user"])){  
    header("location:adminlogin.php");  
} else {   
$query = mysqli_query($con,"SELECT * FROM subjects");
$number=mysqli_num_rows($query);
$query2="select * from subjects"; // Fetch all the records from the table address
$result=mysqli_query($con,$query2); }
?> 

<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Page: Subjects</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/admin/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/admin/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="../assets/css/admin/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .maincontent{position:relative;top:30%}
    
    </style>
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
                 <!-- /. H.ROW  -->
                 <hr />

<div class="row">
    <div class="column">

        <ul style="list-style-type: disc;">
        <h1>BCA</h1>
    <h1>Semester 1</h1>
    <li><a href="">Basic Mathematics- I [Core Courses]</a></li>
    <li><a href="">Computational Statistics [Core Courses]</a></li>
    <li><a href="">Digital Electronics [Core Courses]</a></li>
    <li><a href="">Environmental Studies [Core Courses]</a></li>
    <li><a href="">IT Fundamentals and C Programming [Core Courses]</a></li>
    <li><a href="">English Language Usage Essentials [Communication Skills]</a></li>
    <li><a href="">Understanding Self for Effectiveness [Behavioural Science]</a></li>

    <h1>Semester 2</h1>
    <li><a href="">Computer Architecture and Assembly Language [Core Courses]</a></li>
    <li><a href="">Computer Communications and Networking [Core Courses]</a></li>
    <li><a href="">Data Structures Using C [Core Courses]</a></li>
    <li><a href="">Operating System Concepts [Core Courses]</a></li>
    <li><a href="">Software Engineering and Modeling [Core Courses]</a></li>
    <li><a href="">Introduction to Communication Skills [Communication Skills]</a></li>
    <li><a href="">Individual Society and Nation [Behavioural Science]</a></li>

    <h1>Semester 3</h1>
    <li><a href="">Computer Communications and Networking [Core Courses]</a></li>
    <li><a href="">Computer Oriented Numerical Methods [Core Courses]</a></li>
    <li><a href="">Introduction to Data Base Management Systems [Core Courses]</a></li>
    <li><a href="">Object Oriented Programming Using C++ [Core Courses]</a></li>
    <li><a href="">Effective Written Communication [Communication Skills]</a></li>
    <li><a href="">Problem Solving and Creative Thinking [Behavioural Science]</a></li>
    
    <h1>Semester 4</h1>
    <li><a href="">Cyber and Information Security [Specialisation Elective Courses]</a></li>
    <li><a href="">Elementary Algorithms [Specialisation Elective Courses]</a></li>
    <li><a href="">Introduction to Open Source Technologies-php,Mysql [Specialisation Elective Courses]</a></li>
    <li><a href="">IT Project Management [Specialisation Elective Courses]</a></li>
    <li><a href="">Python Programming [Specialisation Elective Courses]</a></li>
    <li><a href="">Visual .Net Technologies [Specialisation Elective Courses]</a></li>
    <li><a href="">Accounting Fundamentals [Core Courses]</a></li>
    <li><a href="">Computer Oriented Statistical and Optimization Methods [Core Courses]</a></li>
    <li><a href="">Unix Operating System and Shell Programming [Core Courses]</a></li>
    <li><a href="">Professional Communication for Recruitment and Employability [Communication Skills]</a></li>
    <li><a href="">Values and Ethics for Personal and Professional Development [Behavioural Science]</a></li>

    <h1>Semester 5</h1>
    <li><a href="">CSS Framework [Specialisation Elective Courses]</a></li>
    <li><a href="">Human Computer Interaction [Specialisation Elective Courses]</a></li>
    <li><a href="">Image Processing [Specialisation Elective Courses]</a></li>
    <li><a href="">Introduction to e-Governance [Specialisation Elective Courses]</a></li>
    <li><a href="">Introduction to Enterprise Resource Planning [Specialisation Elective Courses]</a></li>
    <li><a href="">Matlab Programming [Specialisation Elective Courses]</a></li>
    <li><a href="">Java Programming [Core Courses]</a></li>
    <li><a href="">Software Engineering- II [Core Courses]</a></li>
    <li><a href="">Receptive and Expressive Communication Skills [Communication Skills]</a></li>
    <li><a href="">Group Dynamics and Team Building [Behavioural Science]</a></li>
        
    <h1>Semester 6</h1>
    <li><a href="">Animation and Gaming [Specialisation Elective Courses]</a></li>
    <li><a href="">Data Warehousing and Mining [Specialisation Elective Courses]</a></li>
    <li><a href="">Fundamentals of E-commerce [Specialisation Elective Courses]</a></li>
    <li><a href="">Fundamentals of Network Security [Specialisation Elective Courses]</a></li>
    <li><a href="">Introduction to Mobile Computing [Specialisation Elective Courses]</a></li>
    <li><a href="">Software Testing Techniques [Specialisation Elective Courses]</a></li>
    <li><a href="">Web Technologies and Applications [Specialisation Elective Courses]</a></li>
    <li><a href="">Social Communication [Communication Skills]</a></li>
    <li><a href="">Stress and Coping Strategies [Behavioural Science]</a></li>
</ul>
</div>
<div class="column">

    <ul style="list-style-type: disc;">
    <h1>BCA(Eve)</h1>
<h1>Semester 1</h1>
<li><a href="">Basic Mathematics- I [Core Courses]</a></li>
<li><a href="">Computational Statistics [Core Courses]</a></li>
<li><a href="">Digital Electronics [Core Courses]</a></li>
<li><a href="">Environmental Studies [Core Courses]</a></li>
<li><a href="">IT Fundamentals and C Programming [Core Courses]</a></li>
<li><a href="">English Language Usage Essentials [Communication Skills]</a></li>
<li><a href="">Understanding Self for Effectiveness [Behavioural Science]</a></li>

<h1>Semester 2</h1>
<li><a href="">Computer Architecture and Assembly Language [Core Courses]</a></li>
<li><a href="">Computer Communications and Networking [Core Courses]</a></li>
<li><a href="">Data Structures Using C [Core Courses]</a></li>
<li><a href="">Operating System Concepts [Core Courses]</a></li>
<li><a href="">Software Engineering and Modeling [Core Courses]</a></li>
<li><a href="">Introduction to Communication Skills [Communication Skills]</a></li>
<li><a href="">Individual Society and Nation [Behavioural Science]</a></li>

<h1>Semester 3</h1>
<li><a href="">Computer Communications and Networking [Core Courses]</a></li>
<li><a href="">Computer Oriented Numerical Methods [Core Courses]</a></li>
<li><a href="">Introduction to Data Base Management Systems [Core Courses]</a></li>
<li><a href="">Object Oriented Programming Using C++ [Core Courses]</a></li>
<li><a href="">Effective Written Communication [Communication Skills]</a></li>
<li><a href="">Problem Solving and Creative Thinking [Behavioural Science]</a></li>

<h1>Semester 4</h1>
<li><a href="">Cyber and Information Security [Specialisation Elective Courses]</a></li>
<li><a href="">Elementary Algorithms [Specialisation Elective Courses]</a></li>
<li><a href="">Introduction to Open Source Technologies-php,Mysql [Specialisation Elective Courses]</a></li>
<li><a href="">IT Project Management [Specialisation Elective Courses]</a></li>
<li><a href="">Python Programming [Specialisation Elective Courses]</a></li>
<li><a href="">Visual .Net Technologies [Specialisation Elective Courses]</a></li>
<li><a href="">Accounting Fundamentals [Core Courses]</a></li>
<li><a href="">Computer Oriented Statistical and Optimization Methods [Core Courses]</a></li>
<li><a href="">Unix Operating System and Shell Programming [Core Courses]</a></li>
<li><a href="">Professional Communication for Recruitment and Employability [Communication Skills]</a></li>
<li><a href="">Values and Ethics for Personal and Professional Development [Behavioural Science]</a></li>

<h1>Semester 5</h1>
<li><a href="">CSS Framework [Specialisation Elective Courses]</a></li>
<li><a href="">Human Computer Interaction [Specialisation Elective Courses]</a></li>
<li><a href="">Image Processing [Specialisation Elective Courses]</a></li>
<li><a href="">Introduction to e-Governance [Specialisation Elective Courses]</a></li>
<li><a href="">Introduction to Enterprise Resource Planning [Specialisation Elective Courses]</a></li>
<li><a href="">Matlab Programming [Specialisation Elective Courses]</a></li>
<li><a href="">Java Programming [Core Courses]</a></li>
<li><a href="">Software Engineering- II [Core Courses]</a></li>
<li><a href="">Receptive and Expressive Communication Skills [Communication Skills]</a></li>
<li><a href="">Group Dynamics and Team Building [Behavioural Science]</a></li>
    
<h1>Semester 6</h1>
<li><a href="">Animation and Gaming [Specialisation Elective Courses]</a></li>
<li><a href="">Data Warehousing and Mining [Specialisation Elective Courses]</a></li>
<li><a href="">Fundamentals of E-commerce [Specialisation Elective Courses]</a></li>
<li><a href="">Fundamentals of Network Security [Specialisation Elective Courses]</a></li>
<li><a href="">Introduction to Mobile Computing [Specialisation Elective Courses]</a></li>
<li><a href="">Software Testing Techniques [Specialisation Elective Courses]</a></li>
<li><a href="">Web Technologies and Applications [Specialisation Elective Courses]</a></li>
<li><a href="">Social Communication [Communication Skills]</a></li>
<li><a href="">Stress and Coping Strategies [Behavioural Science]</a></li>
</ul>
</div>
<div class="column">

    <ul style="list-style-type: disc;">
    <h1>B.Sc. (IT)</h1>
<h1>Semester 1</h1>
<li><a href="">Basic Mathematics- I [Core Courses]</a></li>
<li><a href="">Digital Electronics [Core Courses]</a></li>
<li><a href="">Environmental Studies [Core Courses]</a></li>
<li><a href="">IT Fundamentals and C Programming [Core Courses]</a></li>
<li><a href="">English Language Usage Essentials [Communication Skills]</a></li>
<li><a href="">Understanding Self for Effectiveness [Behavioural Science]</a></li>

<h1>Semester 2</h1>
<li><a href="">Accounting Fundamentals [Human Social Sciences & Management Courses]</a></li>
<li><a href="">Sociology of Change and Development [Human Social Sciences & Management Courses]</a></li>
<li><a href="">Data Structures Using C [Core Courses]</a></li>
<li><a href="">Operating System Concepts [Core Courses]</a></li>
<li><a href="">Network Basics [Allied Courses]</a></li>
<li><a href="">Introduction to Communication Skills [Communication Skills]</a></li>
<li><a href="">Individual Society and Nation [Behavioural Science]</a></li>

<h1>Semester 3</h1>
<li><a href="">Computer Architecture and Assembly Language [Core Courses]</a></li>
<li><a href="">Fundamentals of Routing Protocols [Core Courses]</a></li>
<li><a href="">Computer Oriented Numerical Methods [Allied Courses]</a></li>
<li><a href="">Introduction to Data Base Management Systems [Core Courses]</a></li>
<li><a href="">Object Oriented Programming Using C++ [Core Courses]</a></li>
<li><a href="">Effective Written Communication [Communication Skills]</a></li>
<li><a href="">Problem Solving and Creative Thinking [Behavioural Science]</a></li>

<h1>Semester 4</h1>
<li><a href="">Principles of Marketing [Human Social Sciences & Management Courses]</a></li>
<li><a href="">Computer Communications and Networking [Core Courses]</a></li>
<li><a href="">Internet of Things [Core Courses]</a></li>
<li><a href="">Introduction to Open Source Technologies-php,Mysql [Core Courses]</a></li>
<li><a href="">Software Engineering- I [Core Courses]</a></li>
<li><a href="">Professional Communication for Recruitment and Employability [Communication Skills]</a></li>
<li><a href="">Values and Ethics for Personal and Professional Development [Behavioural Science]</a></li>

<h1>Semester 5</h1>
<li><a href="">Fundamental of Cloud Computing & Enterprise [Specialisation Elective Courses]</a></li>
<li><a href="">Human Computer Interaction [Specialisation Elective Courses]</a></li>
<li><a href="">Image Processing [Specialisation Elective Courses]</a></li>
<li><a href="">Introduction to e-Governance [Specialisation Elective Courses]</a></li>
<li><a href="">Introduction to Enterprise Resource Planning [Specialisation Elective Courses]</a></li>
<li><a href="">IT Project Management [Specialisation Elective Courses]</a></li>
<li><a href="">Software Engineering- II [Specialisation Elective Courses]</a></li>
<li><a href="">Java Programming [Core Courses]</a></li>
<li><a href="">Unix Operating System and Shell Programming [Core Courses]</a></li>
<li><a href="">Receptive and Expressive Communication Skills [Communication Skills]</a></li>
<li><a href="">Group Dynamics and Team Building [Behavioural Science]</a></li>
    
<h1>Semester 6</h1>
<li><a href="">Animation and Gaming [Specialisation Elective Courses]</a></li>
<li><a href="">Fundamentals of E-commerce [Specialisation Elective Courses]</a></li>
<li><a href="">Fundamentals of Network Security [Specialisation Elective Courses]</a></li>
<li><a href="">Introduction to Mobile Computing [Specialisation Elective Courses]</a></li>
<li><a href="">Matlab Programming [Specialisation Elective Courses]</a></li>
<li><a href="">Python Programming [Specialisation Elective Courses]</a></li>
<li><a href="">Software Testing Techniques [Specialisation Elective Courses]</a></li>
<li><a href="">Visual .Net Technologies [Specialisation Elective Courses]</a></li>
<li><a href="">Web Technologies and Applications [Specialisation Elective Courses]</a></li>
<li><a href="">Data Warehousing and Mining [Core Courses]</a></li>
<li><a href="">Social Communication [Communication Skills]</a></li>
<li><a href="">Stress and Coping Strategies [Behavioural Science]</a></li>
</ul>
</div>
</div>



<div class="maincontent">
    <h1>Add Subject</h1>
    <br><br>
    <form name="form1" method="post" onSubmit="return check();">

    
        <input class="form-control" name="subname" placeholder="Enter Subject Name" type="text" id="subname">
        <input class="form-control" name="sem" placeholder="Enter Semester" type="text" id="sem">
    <br>
       
  <input class="btn btn-primary" type="submit" name="submit" value="Add" ><br><br>
   
</form></div><?php
                {
$sql=mysqli_query($con,"select * from subjects");	
	
	echo "<table class='table table-striped'>";
	echo "<tr><th class='text-primary'>ID</th><th class='text-primary'>Name</th>
    <th class='text-primary'>Semester</th>
	<th class='text-primary'>Update</th>
	<th class='text-primary'>Delete</th></tR>";
	
	while($result=mysqli_fetch_assoc($sql))
	{
$id=$result['sub_id'];
	
	echo "<tr>";	
	echo "<td>".$result['sub_id']. "</td>";
	echo "<td>".$result['sub_name']."</td>";
        echo "<td>".$result['sem']."</td>";
	echo "<td><a href='subupdate.php?sub_id=$id'><span class='fa fa-pencil-square-o'></span></a></td>";
	echo "<td><a href='subdelete.php?sub_id=$id'><span class='fa fa-trash-o'></span></a></td>";
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
     <script LANGUAGE="JavaScript">
function check() {
mt=document.form1.subname.value;
if (mt.length<1) {
alert("Please Enter Subject Name");
document.form1.subname.focus();
return false;
}
return true;
}
</script>
    <?php
 if(isset($_POST["submit"])){  
if(!empty($_POST['subname']))
 {  
    $subname=$_POST['subname'];  
    $sem=$_POST['sem'];
    $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,'major_project') or die("cannot select DB");  
    $query=mysqli_query($con,"SELECT * FROM subjects WHERE sub_name='".$subname."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO subjects(sub_name,sem) VALUES('$subname',$sem)";  
  
    $result=mysqli_query($con,$sql);  
        if($result){  
     $a="Successfully Added";
    } else {  
    $a="Failture"; 
    }  
  
    } else {  
   $a="Already Exists";
    }  
  
} else {  
    $a="All fields are required!";  
}  
}  
?> 
</body>
</html>
