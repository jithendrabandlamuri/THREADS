<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<title> Threads </title>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
.detail
{
	height:500px;
}

#pholder {
	max-height: 100px;
	max-width: 100px;
}

.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}

.wrapper {
	text-align: center;
}

#info {

}

#footer {
  background-color: #e3f2fd;
   height: 50px;
    font-family: 'Verdana', sans-serif;
    padding: 20px;
}
</style>
</head>
<body style="background-color: powderblue;">
<!--header-->
  <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <div class= "navbar-header">
        <button type= "button" class="navbar-toggle" data-toggle= "collapse" data-target= "#bs-shuttle-navbar-collapse-1">
          <span class= "sr-only"> Toggle navigation </span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
         </button>
      <a class="navbar-brand" href="#"> Threads</a> 
    </div>
  <div class= "collapse navbar-collapse navbar-right" id="bs-shuttle-navbar-collapse-1">
    <ul class= "nav navbar-nav">
       <ul class= "nav navbar-nav">
   
      <li> <a href="./homepage.php"> Logout </a> </li>
      
    </ul>
    </ul>
    </div>  
  </div>
</nav>
<!--end of navbar-->
<!--generic info-->
<div class= "container-fluid">
 <div class= "col-md-4" >
  <div class= "panel panel-info" id="info" >
      <div class= "panel-heading">
        <h4 class= "panel-title" align="center"> Your Information </h4>
      </div> 

<?php 

//$_SESSION['logged_user']=1;
//session_start();
$server="localhost";
$username="root";
$password="";
$db="safar";
$v = mt_rand(1,10);
$v = $GLOBALS['v'];
$r = 1;
$t= $_SESSION['logged_user'];
$conn = new mysqli($server,$username,$password,$db);
if($conn->connect_error){
    die("Connection failed".mysqli_connect_error());
}
  $result= $conn->query ("SELECT * FROM customer where cid = '$t'");
  $row = $result->fetch_assoc();
  $result4= $conn->query ("SELECT * FROM admin where admin.cid='$r'");


  //echo mysqli_num_rows($result1);
  /*if (mysqli_num_rows($result)>0)
  {
    $count= mysqli_num_rows($result);
  }
 while($row = $res1->fetch_assoc()) 
{*/

  $n = $row['name'];
  $e = $row['email'];
  $g = $row['type'];



?>
 
 
<div class= "panel panel-body detail">
      <img id="pholder" class= "center" src="./images/placeholder.png">
      <br>
      <br>
      <table class = "table">
      <tr>
         <td align="center">Name: <?php echo "$n"; ?></td>
      </tr>
      
      <tr>
         <td align="center">E-mail: <?php echo "$e"; ?></td>
      </tr>
            <tr>
         <td align="center">Type: <?php echo "$g";?></td>
      </tr>
     

   </table>
   <br>
   <br>
   <div class= "wrapper">
   <button onclick="location.href='http://localhost/Threads/user.php'" type="button" class="btn btn-success" value="exit">Exit</button>
   </div>
      </div>
    </div>
</div>


<!-- end of generic info-->
<div class="col-md-8">
  <div class="panel panel-success">
    <div class="panel-heading" align="center"><b>Order Tracking</b></div>
    <div class="panel-body log">
      <img src="images/track.png" style="float:right;width:800px;height:500px;" alt="track your shuttle">
<!-- <script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
var myCenter=new google.maps.LatLng(12.971058, 79.163709);
var x=new google.maps.LatLng(12.971231, 79.161992);
var x1=new google.maps.LatLng(12.970852, 79.159525);
var x2=new google.maps.LatLng(12.973252, 79.164251);
var x4=new google.maps.LatLng(12.969523, 79.156000);
var x3=new google.maps.LatLng(12.969667, 79.155161);
var marker, marker1, marker2, marker3, marker4, marker5;

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:17,
  mapTypeId:google.maps.MapTypeId.SATELLITE
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  animation:google.maps.Animation.BOUNCE
  });
var marker1=new google.maps.Marker({
  position:x,
  animation:google.maps.Animation.BOUNCE
  });
var marker2=new google.maps.Marker({
  position:x1,
  animation:google.maps.Animation.BOUNCE
  });
var marker3=new google.maps.Marker({
  position:x2,
  animation:google.maps.Animation.BOUNCE
  });
var marker4=new google.maps.Marker({
  position:x3,
  animation:google.maps.Animation.BOUNCE
  });
var marker5=new google.maps.Marker({
  position:x4,
  animation:google.maps.Animation.BOUNCE
  });
marker.setMap(map);
marker1.setMap(map);
marker2.setMap(map);
marker3.setMap(map);
marker4.setMap(map);
marker5.setMap(map);
/*var myTrip=[x,x1,x2,x4,x3];
var flightPath=new google.maps.Polyline({
  path:myTrip,
  strokeColor:"#FF0000",
  strokeOpacity:0.8,
  strokeWeight:4
  });
*/
flightPath.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
<div id="googleMap" style="width:1024px;height:720px;"></div>
</body>
</html>

 -->

<!--<div id="googleMap" style="width:1024px;height:720px;"></div>

<p>Click the button to get your coordinates.</p>

<button onclick="getLocation()">Try It</button>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
function showPosition(position) {
  var latlon = position.coords.latitude + "," + position.coords.longitude;

  var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="+latlon+"&zoom=14&size=400x300&sensor=false&key=YOUR_:KEY";

  document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
}
</script>
-->

</html>




