<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<head>
<title> Shuttle: Travel along! </title>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-2018.css">

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

#darshan {
  height: 500px;
  padding-top: 50px;
}

#footer {
  background-color: #e3f2fd;
   height: 50px;
    font-family: 'Verdana', sans-serif;
    padding: 20px;
}

#photo {
  max-height: 400px;
  max-width: 250px;
  padding-top: 20px;
  padding-left: 20px;
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
      <li> <a href="./homepage_shuttle.php"> Home </a> </li>
      <li> <a href="#"> About </a> </li>
	  <li> <a href="./homepage_shuttle.php"> Logout </a> </li>
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
  $l = $row['type'];
  $a = $row['amount'];
  $s = $row1['source'];
  $d = $row1['destination'];
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
         <td align="center">Type: <?php echo "$l"; ?></td>
      </tr>
      <tr>
         <td align="center">Amount: <?php echo "$a"; ?></td>
      </tr>
      <tr>
         <td align="center">Latest Trip: <?php echo " $s to $d  "; mysqli_close ($conn);?></td>
      </tr>
   </table>
   <br>
   <br>
   <div class= "wrapper">
   </div>

      </div>
    </div>
  </div>
<!-- end of generic info-->
 <div class="col-md-4"align="center"> 
      <div class= "bg-light text-dark">
  
    <div class= "panel panel-info">
      <div class= "panel-heading">
        <h4 class= "panel-title"> Call a shuttle </h4>
      </div> 

    <div class= "panel panel-body" id="darshan">
<form id="form1" action="#" method="POST">
    <div class="form-group has-feedback">
    <label for="source">Source:</label>
    <input type="text" class="form-control" id= "source" name="source" placeholder="source">
    <i class="glyphicon glyphicon-user form-control-feedback"></i>
</div>
  <div class="form-group has-feedback">
    <label for="destination">Destination:</label>
    <input type="text" class="form-control" id="destination" name="destination" placeholder="destination">
     <i class="glyphicon glyphicon-envelope form-control-feedback"></i>
  </div>
  <h5><strong> Vehicle Type: </strong></h5>
   <div class="form-check">
      <label class="form-check-label" for="mini">
        <input type="radio" class="form-check-input" id="mini" name="mini" value="mini" checked>Mini Shuttle
      </label>
    </div>

    <div class="form-check">
      <label class="form-check-label" for="micro">
        <input type="radio" class="form-check-input" id="micro" name="mini" value="micro">Micro Shuttle
      </label>
    </div>
     <div>
     <h5><strong> Payment Mode: </strong></h5>
     <div class="form-check">
      <label class="form-check-label" for="cash">
        <input type="radio" class="form-check-input" id="cash" name="credit" value="cash" checked>Cash
      </label>
    </div>

    <div class="form-check">
      <label class="form-check-label" for="credit">
        <input type="radio" class="form-check-input" id="credit" name="credit" value="credit">Credit
      </label>
    </div>
  </div>

  <button name="add" type="submit" value="add" class="btn btn-primary">Submit</button>
    <button onclick="location.href='http://localhost/shuttle/user.php'" type="button" class="btn btn-primary" value="exit">
     Exit</button>
  </form>
  </div>
</div>
</div>
</div>

      <!--carousel type content-->
<div class="col-md-4" align="center"> 
      <div class= "bg-light text-dark">
  
    <div class= "panel panel-info">
      <div class= "panel-heading">
        <h4 class= "panel-title"> Shuttle types </h4>
      </div> 
<div class="w3-container w3-2018-sailor-blue w3-hover-black w3-animate-right" id="adv">
  <img id="photo" src="./images/micro.jpg">  
  <h2>Mini Shuttle</h2>
  <p>Mini Shuttle is the smallest yet most dearest child that will ensure that you'll have a comfortable ride.</p>
</div>
<div class="w3-container w3-2018-sailor-blue w3-hover-black w3-animate-right" id="adv">
  <img id="photo" src="./images/mini.jpg">  
  <h2>Micro Shuttle</h2>
  <p>Sturdy, smooth, and efficient, that is what Micro Shuttle offers you everytime.</p>
</div>
</div>
</div>
</div>
</div>

<?php


function randomName() {
    $names = array(
        'Gangadhar',
        'Raju',
        'Ismail',
        'Sukhpreet',
        'Ramesh',
        'Parshva',
        'Ninad',
        'Darshan',
        'Rushabh',
        'Nipun'
        // and so on

    );
    $random_name = $names[mt_rand(0, sizeof($names) - 1)];
    return $random_name;
}

if(isset($_POST['add']))
{

$fare= 15;
$driver= randomName();
$s= $_POST['source'];
$d= $_POST['destination'];
$m= $_POST['mini'];
$p= $_POST['credit'];
$server="localhost";
$username="root";
$password="";
$db="safar";
$conn = new mysqli($server,$username,$password,$db);
if($conn->connect_error){
    die("Connection failed".mysqli_connect_error());
}
else
{
/*echo 'successful';
echo $s;
echo $d;
echo $m;
echo $p;
echo $fare;
echo $driver;*/
$user= $_SESSION['logged_user'];
$conn->query ("INSERT INTO ride_details(cid,source,destination,p_mode,c_type,fare,dname,ride_time) VALUES ('$user','$s','$d','$p','$m','$fare','$driver',CURRENT_TIMESTAMP())");
$conn->query ("UPDATE customer SET amount=amount-'$fare' WHERE customer.cid='$user'");
mysqli_close($conn);
  echo '<script type="text/javascript">
        window.location="http://localhost/shuttle/first_page.php";
      </script>'; 
unset ($_POST['add']);
}
}
 ?>
</body>
</html>