<?php
session_start();
error_reporting(1);
$user=$_SESSION["sess_user"];
include("database.php");
extract($_POST);
extract($_GET);
extract($_SESSION);
    

/*$rs=mysql_query($con,"select * from mst_question where test_id=$tid",$cn) or die(mysql_error());
if($_SESSION[qn]>mysql_num_rows($rs))
{
unset($_SESSION[qn]);
exit;
}*/
if(isset($subid2) || isset($testid))
{
$_SESSION[sid]=$subid2;
$_SESSION[tid]=$testid;
$_SESSION[sname]=$subname;
       $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,'major_project') or die("cannot select DB");
$rs1=mysqli_query($con,"select test_name from tests where test_id=$tid;");
$row1=mysqli_fetch_array($rs1);  
$msg=$row1[2];
header("location:quiz.php");
}
if(!isset($_SESSION[sid]) || !isset($_SESSION[tid]))
{
	header("location: index.php");
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>

<body>
    
    <div class="" style="width:100%;position:absolute;top:0px;height:100px;background-color:black">
    <h1 class="text-white my-3 mx-3">ExamRag</h1>
    
    </div>
<?php


 $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,'major_project') or die("cannot select DB");  
$query="select * from questions";

$rs=mysqli_query($con,"select * from questions where test_id=$tid") or die(mysqli_error());
if(!isset($_SESSION[qn]))
{
	$_SESSION[qn]=0;
	mysqli_query("delete from useranswer where sess_id='" . session_id() ."'") or die(mysqli_error());
	$_SESSION[trueans]=0;
	
}
else
{	
		if($submit=='Next Question' && isset($ans))
		{ $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,'major_project') or die("cannot select DB");  
				mysqli_data_seek($rs,$_SESSION[qn]);
				$row= mysqli_fetch_row($rs);	
				mysqli_query($con,"insert into useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysqli_error());
				if($ans==$row[7])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				$_SESSION[qn]=$_SESSION[qn]+1;
		}
		else if($submit=='Get Result' && isset($ans))
		{
				mysqli_data_seek($rs,$_SESSION[qn]);
				$row= mysqli_fetch_row($rs);	
				mysqli_query($con,"insert into useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysqli_error());
				if($ans==$row[7])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				echo "<h1 class=head1> Result</h1>";
				$_SESSION[qn]=$_SESSION[qn]+1;
				echo "<Table align=center><tr class=tot><td>Total Question<td> $_SESSION[qn]";
				echo "<tr class=tans><td>True Answer<td>".$_SESSION[trueans];
				$w=$_SESSION[qn]-$_SESSION[trueans];
				echo "<tr class=fans><td>Wrong Answer<td> ". $w;
				echo "</table>";
				mysqli_query($con,"insert into results(email,test_id,test_date,score,sub_name) values('$user',$tid,'".date("d/m/Y")."',$_SESSION[trueans],'$sname')") or die(mysqli_error());
				echo "<a style='position:absolute;top:50%;left:45%;' href=user.php><h4>Go back to Dashboard</h4></a>";
				unset($_SESSION[qn]);
				unset($_SESSION[sid]);
				unset($_SESSION[tid]);
				unset($_SESSION[trueans]);
				exit;
		}
}
$rs=mysqli_query($con,"select * from questions where test_id=$tid",$cn) or die(mysqli_error());
if($_SESSION[qn]>mysqli_num_rows($rs)-1)
{
unset($_SESSION[qn]);
echo "<h1 class=head1>No Questions Inserted</h1>";
session_destroy();
echo "Please <a href=index.php> Start Again</a>";

exit;
}
mysqli_data_seek($rs,$_SESSION[qn]);
$row= mysqli_fetch_row($rs);
echo "<div style='background-color:#dcdde1' class='mx-5 py-5'>";    
echo "<form name=myfm method=post action=quiz.php>";
echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
$n=$_SESSION[qn]+1;
echo "<tR><td><span class=style2>Question ".  $n .": $row[2]</style><br><br>";
echo "<tr><td class=style8><input type=radio name=ans value=1> $row[3]";
echo "<tr><td class=style8> <input type=radio name=ans value=2> $row[4]";
echo "<tr><td class=style8><input type=radio name=ans value=3> $row[5]";
echo "<tr><td class=style8><input type=radio name=ans value=4> $row[6]";
echo "</div>";
if($_SESSION[qn]<mysqli_num_rows($rs)-1)
echo "<tr><td><input class='btn btn-danger' style='height:40px;margin-top:20px' type=submit name=submit value='Next Question'></form>";
else
echo "<tr><td><input style='background-color:red;color:white;height:40px;margin-top:20px' type=submit name=submit value='Get Result'></form>";
echo "</table></table>";

    ?>
</body>
</html>
