<?php
$userid=$_GET["userid"];
$con=mysqli_connect("localhost","root","","safar");
if($con)
{
	$query1="SELECT * FROM ride_details WHERE cid=$userid";
	$result1=mysqli_query($con,$query1);
	while($row=mysqli_fetch_assoc($result1))
	{
		$cid=$row["cid"];
		$rid=$row["rid"];
		if($cid==$userid)
		{
			$query2="DELETE FROM ride_details WHERE rid=$rid";
			$result2=mysqli_query($con,$query2);
			if($result2)
			{
				//
			}
			else{
				echo "Error";
			}
		}
	}


	$query="DELETE FROM customer WHERE cid=$userid";
	$result=mysqli_query($con,$query);
	if($result)
	{
		$message="Deleted";
		header("Location:homepage.php?message=".$message);
	}
	else{
		echo "Error in deletion";
	}
}
else{
	echo mysqli_error($con);
}

?>