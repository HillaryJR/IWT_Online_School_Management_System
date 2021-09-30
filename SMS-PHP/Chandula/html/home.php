<!DOCTYPE html>
<html>
	<head>

		<title>Home page.</title>
		
			
		<meta charset = "utf-8">
		<meta name ="viewport" content = "width=device-width, initial-scale=1">
		
		<link rel = "stylesheet" href = "../css/cssHome.css"></link>
		<link rel="stylesheet" type="text/css" href="../css/homeStyles1.css">
		<!--<link rel = "stylesheet" href = "../../Asanka/css/t_inter.css"></link>-->
		<style>
			#logout{
	       			background-color: rgb(207,0,0);
	       			border: 2px white solid;
	       		}
       		#logout:hover{
       				background-color:rgb(235,16,16);
       		}       		
		</style>

	</head>

	
	<body>
	
		<header>
		
			<h1><i><center>Govt.Science College Matale</center></i></h1>
	
			<?php 
				session_start();

				if(isset($_SESSION['uname'])) 
				 {
				 	if(preg_match("/ST/", $_SESSION['uname']))
					{
						echo "<div class='name' style='margin-left: 85%;margin-top:0%; font-family: Calibri;font-size: 20px;border:none;padding:5px;'>
							<a style='color:white;text-decoration:none;' href='../../Radesh/html/student.php'><b>".$_SESSION['uname']."</b></a></div>";
					}
					else if(preg_match("/TE/", $_SESSION['uname']))
					{
						echo "<div class='name' style='margin-left: 83%; font-family: Calibri;font-size: 20px;border:none;padding:5px;'>
							<a style='color:white;text-decoration:none;' href='../../Asanka/html/t_inter.php'>".$_SESSION['uname']."</a></div>";
					}

				 	echo "<a href='../../Asanka/html/logout.php'><button style='margin-left: 90%;padding : 15px; font-size:17px;' type='submit' id='logout' id='logout'><b>Log Out</b></button></a>";
				 }
				else
				{
					echo "<a href='../../Asanka/html/login.php'><button style='padding:15px;height:40px;margin-top:-10px;' id='logout' ><b>Login</b></button></a>";
				}
			?>
		
		</header>
		
		
			
		<ul type = "disc" class = "topnav" id = "topnav">
			    <li><a class = "crnt" href = "#">Home</a></li>
				<li><a href = "../../Manujaya/html/event.php">Events</a></li>
				<li><a href = "../../Nadun/HTML/ContactUs.php">Contact Us</a></li>
				<li><a href = "../../Nadun/HTML/AboutUs.php">About Us</a></li>	
		
		</ul>
		
				
		
		<section>
		
			<article>
								
				<br>
				<!--<center><img id = "imgslide" src="../Nadun/CSS/img/home2.jpg" width="75%" height="500px" ></center>-->
								
				<!--Background Slider -->
				<div class="slider">
				<div class="load">
				</div>
				<div class="content">
				</div>
				</div>

				<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
				
				<br>
				
				<div id="desc" height="600px">
					<table id="de">
						<tr>
							<td id="about">
								<center><h1 style="font-size: 30px;">Description About School</h1></center>
								<p style="font-size: 20px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							</td>
							<td id="cal">
								<center><img src="../images/prin.jfif" style="height: 175px; width: 250px; border: 2px black solid;">
								<p><b>Mr.Tom Judy (Principal)<b></p>
								
					<!--Calander-->			
							<td id="cal1">
								<div id = "FullCalander">
									<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
									<link rel="stylesheet" href="../../Calander/demo.css"/>
									<link rel="stylesheet" href="../../Calander/theme2.css"/>
								  
								  
									<div id="caleandar">

									</div>

									<script type="text/javascript" src="../../Calander/caleandar.js"></script>
									<script type="text/javascript" src="../../Calander/demo.js"></script>
									
							</div>
							</td>	
								
						</center>
					</table>
				</div>
				
				<div id="events">
					<h1 style="font-size: 35px;"><u>Upcoming Events :</u></h1>
					<table id="eve" border="1">
							<?php  
							require '../../extra/html/config.php'; //config file

							$sql = "SELECT * FROM events";

							$result = $con->query($sql) ;

							if($result -> num_rows > 0)
							{
								while($row = $result->fetch_assoc())
								{
									echo "<tr><td class='td1' style='font-size:30px;'><a  style='text-decoration:none;color:white;' href='../../Manujaya/html/event.php'>".$row['eventName']."</td></tr>";
										 
								}
							}	
							?>
					</table>
				</div>

									<br>
								
							</td>
						</tr>
					</table>
				</div>
				
				<div class = "container">	
						<img src = "../../img/cri.jpg" style ="height: 300px; width: 500px; border: 2px black solid;margin-left: 0%;">
							
							<div class = "content"> 
								<h1> &nbsp Annual <big> BIG</big> &nbsp match.</h1>
								<p>&nbsp The biggest cricket war in matale district.</p>
							
							</div>																		
							
				</div>
				
				<br/><br/><br/>
				
				<div class = "container">	
						<img src = "../../img/party.jpg" style ="height: 300px; width: 500px; border: 2px black solid;margin-left: 0%;">
							
							<div class = "content"> 
								<h1> &nbsp 16' badge get together.</h1>
								<p>&nbsp Successfully held in Grand mountain hotel Matale.</p>
							
							</div>																		
							
				</div>
				
			</article>
			
		</section>
		
		
		
		<footer>
		
			<p id = "txt"><i><em><b>Copyright 2019 &copy INNOVATION SKYLINE. All rights received.</b></em></i></p>
			
			<a href = "https://www.facebook.com">
				<img id = "sm" src = "../../img/fb.png" >
			</a>
						
			<a href = "https://www.instagram.com">
				<img id = "sm" src = "../../img/ins.png" >
			</a>
						
			<a href = "https://www.twitter.com">
				<img id = "sm" src = "../../img/twit.png" >
			</a>
						
			<a href = "https://www.whatsapp.com">
				<img id = "sm" src = "../../img/wz.png" >
			</a>
			
		
		
		</footer>


</body>
</html>