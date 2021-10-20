<?php session_start(); 
?>
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

<script type="text/javascript">
  function displaydel()
  {
    alert("Account Deleted");
  }
  function displaych()
  {
    alert("Account Modified");
  }
</script>

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
      <a class="navbar-brand" href="#"> Threads </a> 
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
$t= $_SESSION['logged_user'];
$conn = new mysqli($server,$username,$password,$db);
if($conn->connect_error){
    die("Connection failed".mysqli_connect_error());
}
else{ $result= $conn->query ("SELECT * FROM customer where cid = '$t'");
  $row = $result->fetch_assoc();
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
}
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
   <button name="delete" type="submit" value="delete" class="btn btn-primary" onclick="displaydel()">Delete Account</button>
   </div>
      </div>
    </div>
</div>

<?php
if(isset($_POST['delete']))
{
  //session_start();
$t= $_SESSION['logged_user'];
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
echo 'successful';
$conn->query ("DELETE FROM customer WHERE cid=$t");
unset ($_POST['delete']);
}
}
?>
<div class="col-md-8">
  <div class="panel panel-success">
    <div class="panel-heading" align="center"><b>Account Modification Options</b></div>
    <div class="panel-body log">

<div class= "panel panel-body">
<form id="form1" action="#" method="POST">
  <div class="form-group has-feedback">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email" id= "email" placeholder="Email">
    <i class="glyphicon glyphicon-user form-control-feedback"></i>
    </div>
    <div class="form-group has-feedback">
    <label for="newname">New Name</label>
    <input type="text" class="form-control" name="newname" id= "newname" placeholder="New Name">
    <i class="glyphicon glyphicon-user form-control-feedback"></i>
    </div>
  <div class="form-group has-feedback">
    <label for="newpass">New Password</label>
    <input type="newpass" class="form-control" id="newpass" name="newpass" placeholder="New Password">
     <i class="glyphicon glyphicon-envelope form-control-feedback"></i>
  </div>

  <button name="modify" type="submit" value="modify" class="btn btn-primary" onclick="displaych()">Submit</button>
  <button onclick="location.href='http://localhost/Threads/admin.php'" type="button" class="btn btn-primary" value="exit">
     Exit</button>
  </form>
</div>

    </div>
  </div>
</div>
</div>

</body>
</html>

<?php
if (isset($_POST['modify']))
{
  //session_start();
  $_SESSION['logged_user'];
  $server="localhost";
$username="root";
$password="";
$db="safar";
$conn = new mysqli($server,$username,$password,$db);
if($conn->connect_error){
    die("Connection failed".mysqli_connect_error());
}
else {
  $u= $_POST["email"];
  $e= $_POST["newname"];
  $l= $_POST["newpass"];
  $sql1="update customer set name='$e', password='$l' where email='$u'";
  //$result1=mysqli_query($conn,$sql1);
  //$row1 = mysqli_fetch_assoc($result1);
  $result1= $conn->query ("update customer set name='$e', password='$l' where email='$u'");
  $row1 = $result->fetch_assoc();
  
  if (mysqli_num_rows($result1)>0)
    {
       $_SESSION['logged_user']= $row1['cid'];
       echo 'Success';
    } 
  else 
    {
        echo 'Fail'; 
    }   
  unset ($_POST['modify']);
}

}



?>