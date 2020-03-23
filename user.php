<?php   
session_start();  
include("database.php");
if(!isset($_SESSION["sess_user"])){  
    header("location:index.php");  
} else {  
    

    $query=mysqli_query($con,"select Last_Activity from users where F_Name='".$_SESSION['sess_user']."'");
     while($row = mysqli_fetch_assoc($query))
        {
            $act=$row['Last_Activity'];
            
        }
    $date = strtotime($act); 
    
 $user=$_SESSION['sess_user'];   
 $sql = "SELECT * FROM `images` WHERE `username`= '$user'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

    $image = $row['image_path'];


?>  
<!doctype html>  
<html>  
<head>  
<title>User Panel</title>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.com/libraries/Chart.js" type="application/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" integrity="sha256-PHcOkPmOshsMBC+vtJdVr5Mwb7r0LkSVJPlPrp/IMpU=" crossorigin="anonymous" />
   
    <style>
    .sidenav {
  height: 100%; /* 100% Full-height */
  width: 300px; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
 	background: linear-gradient(to right, #FF4B2B, #FF416C);/* Black*/

   /* Place content 60px from the top */

}
        .sidenav a {
  padding: 8px 8px 8px 12px;
  text-decoration: none;
  font-size: 20px;
  color:white;
  display: block;
  transition: 0.3s;
}

.sidenav .active{
    background-color:black;
    color: white;
    
}
/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #f1f1f1;
    background-color:darkgray;
    text-decoration: none;
}

.sidenav .links{padding-top: 300px;padding-left: 20px}


/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

        .main_content{position: absolute;margin-left: 400px;top: 10%;width: 70%}
        
        .mynav{position: absolute;left: 30%;top: 0;width: 70%}
        .mynav button{}
        
    </style>
</head>  
<body>  
   
         <div class="sidenav animated slideInLeft">
         <div class="brand my-5 text-center">
       <img src='<?php echo $image;?>'  style="height: 150px;width: 150px;border-radius:100%">
             <h3 class="text-white"><?=$_SESSION['sess_user'];?></h3>
       </div>
  <a href="#" class="btn2 active"><span class="fa fa-line-chart">       Dashboard</span></a>
             <a href="subjects.php" class="btn2"><span class="fa fa-book">  Subjects</span></a>
     
  <a href="settings.php" class="btn2"><span class="fa fa-gear">  Settings</span></a>
        
</div> 
    <div class="main_content animated fadeIn">
        
    <h1>Dashboard</h1><br><br>
      <div class="conatiner">
        <div class="row">
          <div class="col-sm-3 mx-3" style="background-color:#e84118;box-shadow:0px 2px 20px 1px">
              <img src="assets/img/Award.png" class="my-4 float-left" style="height:100px;width:100px">
              <h5 class=" text-center my-5">Achievements</h5>
              
            </div>
            <div class="col-sm-3 mx-3" style="background-color:#8c7ae6;box-shadow:0px 2px 20px 1px">
                <span class="fa fa-money my-4 float-left" style="font-size:100px"></span>
              <h5 class=" text-center my-5">Fees</h5>
            </div>
            <div class="col-sm-3 mx-3" style="background-color:#f9ca24;
box-shadow:0px 2px 10px 1px">
             <img src="assets/img/login.png" class="my-4 float-left" style="height:80px;width:80px">
            
                  <h5 class="float-right mx-3 my-5" style="color:black;font-size:15px;font-family:cursive"><?php echo date('d-M h:i:s', $date); ?></h5>
            </div>
          
          </div>
        
        
        </div> 
         <div id="chart-container" style="height: 270px; width: 60%;margin-top:50px;">
        <canvas id="graphCanvas"></canvas>
    </div>
    </div>
    <div class="mynav">
     <a href="index.php"><button class="btn btn-danger float-right mx-5 my-3">Logout</button></a>
    </div>
    
<script type="text/javascript" src="assets/js/login/Chart.min.js"></script>
  <script type="text/javascript" src="assets/js/login/jquery.min.js"></script>  
      <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("data.php",
                function (data)
                {
                    console.log(data);
                     var name = [];
                    var marks = [];

                    for (var i in data) {
                        name.push(data[i].sub_name);
                        marks.push(data[i].score);
                    }

                    var chartdata = {
                        labels: name,
                        datasets: [
                            {
                                label: 'Results',
                                backgroundColor: 'grey',
                                borderColor: 'black',
                                hoverBackgroundColor: 'black',
                                hoverBorderColor: '#666666',
                                data: marks
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");

                    var barGraph = new Chart(graphTarget, {
                        type: 'line',
                        data: chartdata
                    });
                });
            }
        }
        </script>
  
</body>  
</html>  
<?php  
}  
?>  