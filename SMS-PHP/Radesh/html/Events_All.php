<?php
	require '../../extra/html/config.php';
	session_start();
	$id = $_SESSION['uname'];
?>

<!DOCTYPE html>
<html>
	<head>
<link rel = "stylesheet" href = "../css/final.css">			
		<title>My Events</title>
		
		<style>
	div{
		 background-color: lightgrey;
		 background-image : url("images/background9.jpg");
		 background-size : cover;
		 background-attachment : fixed;
		 background-position : center;
		  width: 1000px;
		  border: 15px solid #002080;
		  padding: 100px 30px	;
		  margin: 20px;
		}

	</style>
	</head>
	
	<body>
		
	<?php
		echo "<center><h1 style='color: rgb(195, 167, 134);
								font-size:35px;
								color : white;
								background:#13083a9d;
								border:black solid;'>
								School Events</h1></center>";
	
?>
		

		
		<center>
			<div>
			<?php
				if(isset($_GET["msg"]))
				{
					if($_GET["msg"]=='f')
					{
						echo 
						"<center><h1 style='color: rgb(255, 55,55);
						font-size:25px;
						color : white;
						background:#ff4d4d;
						border:black solid;'>
						You Have Already Enrolled in this Event</h1></center>";
					}
				}
				?>
				<table style='color: rgb(195, 167, 134);
						font-size:25px;
						color:white;
						background:#13083a9d;
						border:black solid;'
						border = "1"
						>
					<tr>
						<th>Event</th>
						<th>Description</th>
						
					</tr>
					
					<!--retrieve data from DB-->
					<?php
					
					$sql = "SELECT * FROM events
							ORDER BY eventName";
					$result =$con->query($sql);
					
					 if($result -> num_rows > 0)
					 {
						while($row = $result->fetch_assoc())	//read data row by row 
						{
							$eid = $row['eventId'];
							 echo "<tr>
			 						<td>".$row['eventName']."</td>
									<td>".$row['eventDescription']."</td>
									<td><a href = 'Submit_New_Events.php?id=$id&eid=$eid'><button class='button button1' type = 'submit'>  Enroll  </button></a></td>
									</tr>";
						}
						 
					 }
					 else
					{
						echo "0 results";
					}
					?>
					
					
				</table>
				
					
		<br><br>
		<br><center><a href = 'My_Events.php.?id=$id & eid=$eid'><button class="button button1" type = 'submit'>View My Events</button></a></center>					
						
				</div>
			</div>
			
				
		</center>
	
	
	</body>

</html>