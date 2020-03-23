<?php 
/*if(isset($_POST['file'])){
$con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,'major_project') or die("cannot select DB");  

$image = $_POST['file'];
$img=base64_encode($image);
$str=rand(1,9999);
 $imagePathOnServer = "assets/img/$str.png";
 $insertQuery = "INSERT into images (image_path) values ('$imagePathOnServer')";
 
 if(mysqli_query($con, $insertQuery)) {

 file_put_contents($imagePathOnServer, base64_decode($img));
 }
}*/

$target_path = "assets/img/"; 
$str=rand(1,9999);
$target_path = $target_path.$str.".png"; 
$con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,'major_project') or die("cannot select DB"); 
$insertQuery = "INSERT into images (image_path) values ('$target_path')";
if(mysqli_query($con, $insertQuery)) {
if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) { 
 echo "File uploaded successfully!"; 
} else{ 
 echo "Sorry, file not uploaded, please try again!"; 
} 
}
?>
<html>
<head>
   <title>test</title> 
</head>
    <body>
    <form action="#" method="post" enctype="multipart/form-data"> 
 Select File: 
 <input type="file" name="fileToUpload"/> 
 <input type="submit" value="Upload Image" name="submit"/> 
</form>

    
    </body>
</html>
