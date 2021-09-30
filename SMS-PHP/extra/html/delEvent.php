<?php
	require 'config.php';
?>
<!DOCTYPE html>

<html>

    <head>
	
		
		<meta charset = "utf-8">
		<meta name ="viewport" content = "width=device-width, initial-scale=1">
        
        <title>Event Management Admin</title>
		
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel = "stylesheet" href = "../css/e_admin.css"></link>
		<link rel = "stylesheet" href = "../css/e_admin2.css"></link>
		<link rel="stylesheet" href="../css/delEvents.css"></link>
		
        <script type="text/javascript" src="../JS/e_admin.js"></script>
		<script type="text/javascript" src="../JS/e_admin2.js"> </script>
		
		<style>
			#logout{
	       			background-color: rgb(207,0,0);
	       			border: 2px white solid;
	       			margin-left: 90%;
	       		}
       		#logout:hover{
       				background-color:rgb(235,16,16);
       		}       		
		</style>
 
    </head>

    <body>
       
	    <header>
		
			<h1><i><center>Govt.Science College Matale</center></i></h1>
	
			<!--<img src="../../img/ty.jpg" height="150" width="auto" class="profile-img" id="propic" align="right" onclick="openprofile()">-->
						<a href="../../Asanka/html/logout.php">  
				<input type="button" style="margin-left: 90%;" value="Logout" id="logout" class="logout"></a>
	
		</header>

		<?php

			$recordId = $_GET['id'];

			$sql = "SELECT * FROM events WHERE eventId = $recordId" ;
			$result = $con -> query($sql) ;

			if($result -> num_rows > 0)
			{
				while($row = $result -> fetch_assoc())
				{
					$eid = $row['eventId'];
					$name = $row['eventName'];
					$desc = $row['eventDescription'];
				}
			}
			else
			{
				echo "No such record" ;
			}

		?>
		<center>
		<div id="mainD">
			<form method="POST" action="subEventDel.php">
				<table id="mainT">
					<tr>
						<th>Event ID</th>
						<td><input type="text" id="eventId" name="eventId" value=<?php echo $eid ?> readonly></td>
					</tr>
					<tr>
						<th>Event Name</th>
						<td><input type="text" id="ename" name="ename" value=<?php echo $name ?> readonly></td>
					</tr>
					<tr>
						<th>Event Description</th>
						<td id="desc"><textarea id="description" name="description"><?php echo $desc ?></textarea></td>
					</tr>
					<tr>
						<td colspan="2" id="btn"><button id="delete" type="submit">Delete</button></td>
					</tr>

				</table>
				
			</form>
		</div>
	</center>

	</body>
	</html>