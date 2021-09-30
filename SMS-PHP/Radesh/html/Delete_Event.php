<?php
	//Delete_Events.php
	//delete values from DB
	require '../../extra/html/config.php';
	
	$StudentId = $_GET['id'];
	$eid = $_GET['eid'];

	$sql = "DELETE FROM studentevents WHERE StudentId = '$StudentId' AND eventId =  $eid";

	if(mysqli_query($con,$sql))
	{
		echo"<script>alert('Record deleted successfully')</script>";
		header("location:My_Events.php");
	}
	else
	{
		echo "<script>alert('ERROR')</script>";
	}

	$sql2 = "SELECT * FROM studentevents";
	$result = $con ->query($sql2);
	
	
	if($result -> num_rows > 0)
	{
		while($row = $result -> fetch_assoc())
		{
			echo $row["StudentId"]."-".$row["eventId"]."<br>";
		}
	}
	else
	{
		
		echo 
						"<center><h1 style='color: rgb(255, 55,55);
						font-size:25px;
						color : white;
						background:#ff4d4d;
						border:black solid;'>
	You have not Enrolled for Any Event</h1></center>";
	
	$con->close();
	}

?>