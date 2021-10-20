<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<title> Shuttle: Travel along! </title>
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
      <a class="navbar-brand" href="#"> Shuttle </a> 
    </div>
  <div class= "collapse navbar-collapse navbar-right" id="bs-shuttle-navbar-collapse-1">
    <ul class= "nav navbar-nav">
       <ul class= "nav navbar-nav">
      <li> <a href="./user.php"> Home </a> </li>
	<li> <a href="./about.html"> About </a> </li>
      <li> <a href="./homepage_shuttle.php"> Logout </a> </li>
      
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
$t= $_SESSION['logged_user'];
$conn = new mysqli($server,$username,$password,$db);
if($conn->connect_error){
    die("Connection failed".mysqli_connect_error());
}
  $result= $conn->query ("SELECT * FROM customer where cid = '$t'");
  $row = $result->fetch_assoc();
  $result1= $conn->query ("SELECT * FROM ride_details where cid = '$t' ORDER BY rid DESC LIMIT 1");
  $row1 = $result1->fetch_assoc();
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

//mysqli_close($conn);

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
   <button onclick="location.href='http://localhost/shuttle/book.php'" type="button" class="btn btn-success" value="book">
     Call Shuttle</button>
   </div>
      </div>
    </div>
</div>

<!-- end of generic info-->
<div class="col-md-8">
  <div class="panel panel-success">
    <div class="panel-heading" align="center"><b>Dashboard</b></div>
    <div class="panel-body log">
    <a href="AccountChange.php"><h5 style="color:black;">Modify Account</h5></a>
    <a href="AccountChange.php"><h5 style="color:black;">Delete Account</h5></a>	
    <a href="payment.php"><h5 style="color:black;">Add Amount</h5></a>
    <a href="GPS Tracking.php"><h5 style="color:black;">Number of shuttles available</h5></a>
      
    </div>
  </div>
</div>
</div>

</body>
</html>




