<?php 

	require '../../extra/html/config.php';
	session_start();
	
	$result = $_POST['srcht'];
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

	<header><center><label><em><u><h1>Searched results for teacher <?php echo $result ?>.</h1></center></u></em></label></header>
	<br/><br/>

<center>


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
					
					
					
					$sql_t = "select * from teacher WHERE TeacherId LIKE '$result' OR Nic LIKE '$result' OR fname LIKE '$result'OR lname LIKE '$result'";
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
						
						echo"<br/><div style = 'color : red'><h2>Teacher ID $search is does not exist in the data base !!!</h2></div><br/><br/>";
						
					}
				
				
					?>
				
				
				
				</table>
			
			
			
			
			
			
			</div>
	
		</center>
</body>	
</html>