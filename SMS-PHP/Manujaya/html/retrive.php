<?php 

	require 'config.php';
	session_start();
?>

<html>
<head>
	<link rel="stylesheet" href="../src/retrive.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">

</head>



<body id="c1">
<center>
	<header><center><label><em><u><h1>Current Subject Details.</h1></center></u></em></label></header>
	<br/>
	
<form method = "POST" action = "search.php">

	<input type="text" name="Subjectcode" placeholder="Code" >
	<input type="submit" name="search" Value="Find"/>

</form>

			<div>
			
				<table border = "1" width = "100%">
				<tr>
					<th> Subject ID </th>
					<th> Class ID </th>
					<th> Teacher ID </th>
					<th> Subject </th>					
					
				</tr>
				<?php 

				
					$sql_t = "select * from subject";
					$result_t = $connect -> query($sql_t);
					
					
					if($result_t -> num_rows > 0 ){
						
						while($row = $result_t->fetch_assoc()){ 
							
							$tid = $row['Subjectcode'];
							
							echo"<tr>
								<td>".$row['Subjectcode']."</td>
								<td>".$row['ClassId']."</td>
								<td>".$row['TeacherId']."</td>
								<td>".$row['Subjectname']."</td>
								</tr>";													
								
							   				
						}
								
								
						
					}else{
						
						echo"<br/>0 results in subject table!!!";
						
					}
				
				
					?>
				
				
				
				</table>
			
			
			
			
			
			
			</div>
	
		</center>
</body>	
</html>