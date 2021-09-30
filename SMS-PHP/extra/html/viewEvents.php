
<!DOCTYPE html>

<html>

    <head>
	
		
		<meta charset = "utf-8">
		<meta name ="viewport" content = "width=device-width, initial-scale=1">
        
        <title>Event Management Admin</title>
		
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel = "stylesheet" href = "../css/e_admin.css"></link>
		<link rel = "stylesheet" href = "../css/e_admin2.css"></link>
		<link rel="stylesheet" href="../css/viewEvents1.css"></link>
		
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
		
			<h1 style="font-family: Calibri;"><i><center>Govt.Science College Matale</center></i></h1>
	
			<!--<img src="../../img/ty.jpg" height="150" width="auto" class="profile-img" id="propic" align="right" onclick="openprofile()">
						<a href="../../Asanka/html/logout.php">  
				<input type="button" style="margin-left: 90%;" value="Logout" id="logout" class="logout"></a>-->
	
		</header>
		
		<center><h1 style="padding:3px;font-size: 60px;background-color: rgb(3,0,109); color: white; width: 74%;border:4px white solid ; font-family: Candara;">Current Events</h1></center>

		<center>
			<div id="mainD">
				<?php 
					if(isset($_GET["msg"]))
					{
						$result=$_GET["msg"];
	                      if($result=='s')
	                      {
	                        echo "<h2 style='background-color:rgb(3,0,109);color:white;font-family:Candara;font-size: 25px;'>Event Updated Successfully</h3>";
	                      }
	                      else
	                        {
	                          echo "<h2 style='background-color:rgb(3,0,109);color:white;;font-size: 25px;'>Error! Event Not Updated!</h3>";
	                      }
					}
				?>
				<?php 
					if(isset($_GET["msg1"]))
					{
						$result=$_GET["msg1"];
	                      if($result=='s')
	                      {
	                        echo "<h2 style='background-color:rgb(3,0,109);color:white; font-family:Candara;font-size: 25px;'>Event Deleted Successfully</h3>";
	                      }
	                      else
	                        {
	                          echo "<h2style='background-color:rgb(3,0,109);color:white;font-size: 25px;'>Error! Event Not Deleted!</h3>";
	                      }
					}
				?>
				<table id="mainT" border="1">
					<tr>
						<th style="background-color: rgb(3,0,109);">Event ID</th>
						<th style="background-color: rgb(3,0,109);">Event Name</th>
						<th style="background-color: rgb(3,0,109);">Event Description</th>
						<th style="background-color: rgb(3,0,109);" colspan="2"></th>
					</tr>
					<?php
						require "config.php";

						$sql = "SELECT * FROM events" ;
						$result = $con->query($sql) ;

						if($result -> num_rows > 0)
						{
							while($row = $result->fetch_assoc())
							{
								$rid = $row['eventId'];
								echo "<tr><td>".$row['eventId']."</td>".
									 "<td>".$row['eventName']."</td>".
									 "<td>".$row['eventDescription']."</td>".
									 "<td><center><a style='text-decoration:none;color:white;' href='editEvent.php?id=$rid'><button id='editB' type='submit'><b>EDIT</b></button></a></center></td>".
									 "<td><center><a style='text-decoration:none;color:white;' href='delEvent.php?id=$rid'><button id='delB' type='submit'><b>DELETE</b></button></a></center></td></tr>";
							}
						}
						else
						{
							echo "No records to show";
						}
					echo "</table>";

					?>
				</table>
			</div>
		</center>

	</body>
	</html>