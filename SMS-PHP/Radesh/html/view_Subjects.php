<?php
	require '../../extra/html/config.php';
	session_start();
	$id = $_SESSION['uname'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Subjects</title>
	
	<link rel = "stylesheet" href = "../css/final.css">			

</head>

<body>

	<?php
echo "<center><h1 style='color: rgb(195, 167, 134);
						font-size:35px;
						color : white;
						background:#13083a9d;
						border:black solid;'>
	Student Subjects</h1></center>";
	
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
						<th>Subject Code</th>
						<th>Subject Name</th>				
					</tr>
					
					<!--retrieve data from DB-->
					<?php
					
					$sql = "SELECT st.Subjectcode,st.Subjectname
							FROM Student s, Subject st
							WHERE s.ClassId = st.ClassId AND s.StudentId = '$id'";
					$result =$con->query($sql);
					
					 if($result -> num_rows > 0)
					 {
						while($row = $result->fetch_assoc())	//read data row by row 
						{
							
							 echo "<tr>
									<td><center>".$row['Subjectcode']."</center></td>
									<td><center>".$row['Subjectname']."</center></td>
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