<?php 

	require '../../extra/html/config.php';
	session_start();
?>

<html>
<head>
	<link rel = "stylesheet" href = "../CSS/Background.css"></link>
		<script>
			function sure(){
				var con = confirm("Are you sure?");
				if(con){
					return true;
					
				}else{
					return false;
				}
			}
			
		</script>
</head>

<body>
<header><center><label><em><u><h1>Current Students' Details.</h1></center></u></em></label>

</header>
<br/><br/>

<center>
<form method = "POST" action = "search_s.php">

	<input type = "search" name = "srch" placeholder = "Search for students..."/>
	<input type = "submit" value = "Search"/>

</form>
	
<a href = "StudentReg.php"><button style = "float : right">Add new Student.</button></a><br/><br/>
				

			<div>
			
				<table border = "1" width = "100%" >
				<tr>
					<th> Student ID </th>
					<th> First Name </th>
					<th> Last Name </th>
					<th> Email </th>
					<th> ClassId </th>
					<th> DOB</th>
					<th> Gender </th>
			
					<th> Guardian's NIC </th>
					<th> Guardian's First Name </th>
					<th> Guardian's Last Name </th>
					<th> Office/Home Phone </th>
					<th> Mobile Number </th>
					<th> Address </th>
					
					
					
				</tr>
				<?php 
					
				
					$sql_s = "SELECT * FROM student s, parent p
							  WHERE s.StudentId = p.studentId
							  ORDER BY s.StudentId";
					$result_s = $con -> query($sql_s);
					//$sql_p = "select * from parent";
					//$result_p = $con -> query($sql_p);
					
					if($result_s -> num_rows > 0){
						
						while($row = $result_s->fetch_assoc()){
							
							$sid = $row['StudentId'];
							
							
							echo"<tr>
								<td>".$row['StudentId']."</td>
								<td>".$row['fname']."</td>
								<td>".$row['lname']."</td>
								<td>".$row['Email']."</td>
								<td>".$row['ClassId']."</td>							
								<td>".$row['DOB']."</td>							
								<td>".$row['Gender']."</td>
								<td>".$row['Nic']."</td>
								<td>".$row['pfname']."</td>
								<td>".$row['plname']."</td>
								<td>".$row['office_no']."</td>
								<td>".$row['mob_no']."</td>							
								<td>".$row['address']."</td>";
																				
								
								
							/*while($row = $result_p->fetch_assoc()){	
							
								
								
																						
								echo"<td>".$row['Nic']."</td>
									<td>".$row['fname']."</td>
									<td>".$row['lname']."</td>
									<td>".$row['office_no']."</td>
									<td>".$row['mob_no']."</td>							
									<td>".$row['address']."</td>";																		
																						
								break;
							}*/
								echo"<td><button type = 'submit'><a href ='edit_s.php?id=$sid'>Edit</a></button></td>							
									<td><a href ='delete_s.php?id=$sid'><input type = 'button' value = 'Delete' onclick = 'return sure()'></a></td></tr>";
						}
								
								
						
					}
					else{
						
						echo"<br/>0 results in student table!!!";
						
					}
				
				
					?>
				
				
				
				</table>
			
			
			
			
			
			
			</div>
	
		</center>
</body>	
</html>