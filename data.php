<?php  
session_start(); 
include("database.php");
if(!isset($_SESSION["sess_user"])){  
    header("location:index.php");  
} else { } 
header('Content-Type: application/json');
 
$user=$_SESSION["sess_user"];

$sqlQuery = "SELECT test_id,email,score,sub_name FROM results where email='$user'";

$result = mysqli_query($con,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($con);

echo json_encode($data);
?>