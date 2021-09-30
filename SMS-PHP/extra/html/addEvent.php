<!DOCTYPE html>

<html>

    <head>
	
		
		<meta charset = "utf-8">
		<meta name ="viewport" content = "width=device-width, initial-scale=1">
        
        <title>Add Event</title>
		
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel = "stylesheet" href = "../css/e_admin.css"></link>
		<link rel = "stylesheet" href = "../css/e_admin2.css"></link>
		<link rel="stylesheet" type="text/css" href="../css/addEventStyles.css">
		
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
		
			<h1><i><center>Govt.Science College Matale.</center></i></h1>
	
			<!--<img src="../../img/ty.jpg" height="150" width="auto" class="profile-img" id="propic" align="right" onclick="openprofile()">
	
			<a href="../../Asanka/html/logout.php">  
				<input type="button" value="Logout" id="logout" class="logout"></a>-->
	
		</header>
		
		
			
		<!--<ul type = "disc" class = "topnav" id = "topnav">
			    <li><a href = "../../Chandula/html/home.php">Home</a></li>
				<li><a href = "../../Manujaya/html/event.php">Events</a></li>
				<li><a href = "../../Nadun/HTML/ContactUs.php"> Contact Us</a></li>
				<li><a href = "../../Nadun/HTML/AboutUs.php">About Us</a></li>	
		
		</ul>-->

		<center>
		<table border="1">
			<tr>
				<td style="background-color: rgb(13,12,105);color: white;" id="ttitle"><b>Add Event</b></td>
			</tr>
			<tr>
				<td style="background-color: rgb(126,124,242);">
					<div id="formdiv">
					<form method="post" action="subNewEvent.php">
						<br><br><br>
						<?php 
							if(isset($_GET["msg"]))
							{
								$result=$_GET["msg"];
			                      if($result=='s')
			                      {
			                        echo "<h2 style='color:green;font-family:Candara;font-size: 30px;'>Details Added Successfully</h2>";
			                      }
			                      else
			                        {
			                          echo "<h2 style='color:red;font-size: 30px;'>Error! Details Not Saved!</h2>";
			                      }
							}
						?>
						<label>Event Name</label><br>
						<input type="text" name="ename" id="ename"><br><br><br><br>
						<label>Event Description</label><br>
						<textarea cols="20" name="edesc" id="edesc"></textarea><br><br><br>
						<input type="submit" name="evsbt" id="evsbt" value="Add Event">


					</form>
				</div>
				</td>
			</tr>
		</table>
	</center>