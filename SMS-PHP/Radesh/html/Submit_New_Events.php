

	<?php
		//Submit_New_Events.php
		//adding new values to the DB
		require '../../extra/html/config.php';
		session_start();

		$id = $_SESSION['uname'];
		
		 $StudentId = $_GET['id'];
		 $eid = $_GET['eid'];
		
		
		$sql = "INSERT INTO 
						studentevents(StudentId,eventId)		
						VALUE('$StudentId','$eid')";

		if(mysqli_query($con,$sql))
		{
			echo"<script>alert('Record inserted successfully')</script>";
			 header("location:Events_All.php");
		}
		else
		{
			
			header("location:Events_All.php?msg=f");
			
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
			echo "no result";
		}
		
		$con->close();


	?>