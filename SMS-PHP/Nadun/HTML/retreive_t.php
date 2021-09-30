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

	<header><center><label><em><u><h1>Current Teachers' Details.</h1></center></u></em></label></header>
	<br/><br/>

<center>
	
	<form method = "POST" action = "search_t.php">

	<input type = "search" name = "srcht" placeholder = "Search for Teachers..."/>
	<input type = "submit" value = "Search"/>

</form>

<a href = "TeacherReg.php"><button style = "float : right">Add new Teacher.</button></a><br/><br/>
			<div>
			
				<table border = "1" width = "100%">
				<tr>
					<th> Teacher ID </th>
					<th> First Name </th>
					<th> Last Name </th>
					<th> NIC </th>					
					<th> Email</th>
					<th> Mobile </th>
					
				</tr>
				<?php 

				
					$sql_t = "select * from teacher";
					$result_t = $con -> query($sql_t);
					
					
					if($result_t -> num_rows > 0 ){
						
						while($row = $result_t->fetch_assoc()){ 
							
							$tid = $row['TeacherId'];
							
							echo"<tr>
								<td>".$row['TeacherId']."</td>
								<td>".$row['fname']."</td>
								<td>".$row['lname']."</td>
								<td>".$row['Nic']."</td>
								<td>".$row['Email']."</td>							
								<td>".$row['phoneNum']."</td>																														
								<td><button type = 'submit'><a href ='edit_t.php?tid=$tid '>Edit</a></button></td>							
								<td><a href ='delete_t.php?id=$tid'><input type = 'button' value = 'Delete' onclick = 'return sure()'></a></td></tr>";													
								
							   				
						}
								
								
						
					}else{
						
						echo"<br/>0 results in student table!!!";
						
					}
				
				
					?>
				
				
				
				</table>
			
			
			
			
			
			
			</div>
	
		</center>
</body>	
</html>