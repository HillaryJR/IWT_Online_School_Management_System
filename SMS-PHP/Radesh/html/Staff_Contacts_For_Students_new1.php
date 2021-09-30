<?php
	require '../../extra/html/config.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Staff Contacts</title>
	
	<link rel = "stylesheet" href = "../css/final.css">			
	
	<script>
	
	</script>
	<style>
	div{
 background-color: #404040;
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
	Staff Contacts</h1></center>";
	
?>
	
	
	
<marquee  direction="left" height="100px" 

	style = 'color : white; font-size : 25px'>
	<i>Govt.Science College Matale
</i></marquee>
	<hr/>	
 
	
		<center>
			<div>
				<table border = "1px" id = "tableStaff" width= 1000
				
						style='color: rgb(195, 167, 134);
						font-size:25px;
						color:white;
						background:#13083a9d;
						border:black solid;'>
					<tr>
						<th>Final Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th>Phone Number</th>
						
					</tr>
					
					<!--retrieve data from DB-->
					<?php
					
					$sql = "SELECT * FROM teacher";
					$result =$con->query($sql);
					
					 if($result -> num_rows > 0)
					 {
						while($row = $result->fetch_assoc())	//read data row by row 
						{
							$id = $row['TeacherId'];
							 echo "<tr>
									<td>".$row['fname']."</td>
									<td>".$row['lname']."</td>
									<td>".$row['Email']."	</td>
									<td>".$row['phoneNum']."</td>
								</tr>";
						}
						 
					 }
					 else
					{
						echo "0 results";
					}
					?>
					
					
				</table>
			</div>
		</center>
	
	
</body>
</html>