<!DOCTYPE html>

<html>

    <head>
	
		
		<meta charset = "utf-8">
		<meta name ="viewport" content = "width=device-width, initial-scale=1">
        
        <title>Subject Management Admin.</title>
		
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel = "stylesheet" href = "../css/s_admin.css"></link>
		<link rel = "stylesheet" href = "../css/s_admin2.css"></link>
		
        <script type="text/javascript" src="../JS/s_admin.js"></script>
		<script type="text/javascript" src="../JS/s_admin2.js"> </script>
		
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
		
			<h1><i><center>Govt.Science College Matale.</center></i></h1>
	
			<?php 
				session_start();

				if(isset($_SESSION['uname'])) 
				 {
				 	if(preg_match("/ST/", $_SESSION['uname']))
					{
						echo "<div class='name' style='margin-left: 85%; font-family: Calibri;font-size: 20px;border:none;padding:5px;'>
							<a href='../../Radesh/html/student.php'><b>".$_SESSION['uname']."</b></a></div>";
					}
					else if(preg_match("/TE/", $_SESSION['uname']))
					{
						echo "<div class='name' style='margin-left: 85%; font-family: Calibri;font-size: 20px;border:none;padding:5px;'>
							<a href='../../Asanka/html/t_inter.php'><b>".$_SESSION['uname']."</b></a></div>";
					}

				 	echo "<a href='../../Asanka/html/logout.php'><button style='margin-left: 90%;' type='submit' id='logout' class='logout'>Log Out</button></a>";
				 }
				else
				{
					echo "<a href='../../Asanka/html/login.php'><button style='padding:0px;height:40px;margin-top:-10px;' class='button' >Login</button></a>";
				}
			?>
	
		</header>
		
		
			
		<ul type = "disc" class = "topnav" id = "topnav">
			    <li><a href = "../../Chandula/html/home.php" target="_self" >Home</a></li>
				<li><a href = "../../Manujaya/html/event.php" target="_self">Events</a></li>
				<li><a href = "../../Nadun/HTML/ContactUs.php" target="_self"> Contact Us</a></li>
				<li><a href = "../../Nadun/HTML/AboutUs.php" target="_self">About Us</a></li>	
		
		</ul>
		
				
		
		<section>
		
			<nav>
			
					
				<div id = "FullCalander">
					<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
					<link rel="stylesheet" href="../../Calander/demo.css"/>
					<link rel="stylesheet" href="../../Calander/theme2.css"/>
				  
				  
					<div id="caleandar">

					</div>

					<script type="text/javascript" src="../../Calander/caleandar.js"></script>
					<script type="text/javascript" src="../../Calander/demo.js"></script>
						
				</div>


			
			</nav>
		
			<article>
					<table style = "margin-left:auto; margin-right:auto">
						<tr>
						
							<td>
								<a href="../../Manujaya/html/subcode.php" target = "_blank" >
									<input type="button" class="sr" value="Add Subject" id="addmark"  ></a>
							</td>

						</tr>
						
						<tr>
						
							<td>
								<a href="../../Manujaya/html/subcode.php" target = "_blank">
									<input type="button" class="usd" value="Edit Subject" id="guide" ></a>
							</td>
						
						</tr>
						
						<tr>
						
							<td>
								<a href="../../Manujaya/html/subcode.php" target = "_blank">
									<input type="button" class="rs" value="Delete Subject" id="veiw-stu" ></a><br />
							</td>
							
						</tr>
						
					</table>
				
			</article>
			
		</section>
		
		
		
		<footer>
		
			<p id = "txt"><i><em><b>Copyright 2019 &copy INNOVATION SKYLINE. All rights received.</b></em></i></p>
			
			<a href = "https://www.facebook.com" target = "_blank">
				<img id = "sm" src = "../../img/fb.png" >
			</a>
						
			<a href = "https://www.instagram.com"  target = "_blank">
				<img id = "sm" src = "../../img/ins.png" >
			</a>
						
			<a href = "https://www.twitter.com"  target = "_blank">
				<img id = "sm" src = "../../img/twit.png" >
			</a>
						
			<a href = "https://www.whatsapp.com"  target = "_blank">
				<img id = "sm" src = "../../img/wz.png" >
			</a>
			
		
		
		</footer>
		
		
	
       

    </body>


</html>