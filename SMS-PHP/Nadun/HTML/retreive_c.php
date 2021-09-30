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

	<header><center><label><em><u><h1>Current Classes and Class Teachers.</h1></center></u></em></label></header>
	<br/><br/>

<center>

<form method = "POST" action = "search_c.php">

	<input type = "search" name = "srchc" placeholder = "Search for Classes..."/>
	<input type = "submit" value = "Search"/>
</form>
	

<a href = "assignClasses.php"><button style = "float : right">Add new class.</button></a><br/><br/>
			<div>
			
				<table border = "1" width = "100%">
				<tr>
					<th> Class ID </th>
					<th> Teacher ID </th>
					
					
				</tr>
				<?php 

				
					$sql_c= "select * from class";
					$result_c = $con -> query($sql_c);
					
					
					if($result_c -> num_rows > 0 ){
						
						while($row = $result_c->fetch_assoc()){
							
							$cid = $row['ClassId'];
							
							echo"<tr>
								<td>".$row['ClassId']."</td>
								<td>".$row['TeacherId']."</td>
																																					
								<td><button type = 'submit'><a href ='edit_c.php?id=$cid '>Edit</a></button></td></tr>";								
								// <td><a href ='delete_c.php?id=$cid'><input type = 'button' value = 'Delete' onclick = 'return sure()'></a></td>	-->											
								
							   				
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