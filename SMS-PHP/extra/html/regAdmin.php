<!DOCTYPE html>

<html>

    <head>
	
		
		<meta charset = "utf-8">
		<meta name ="viewport" content = "width=device-width, initial-scale=1">
        
        <title>Registration Admin.</title>
		
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel = "stylesheet" href = "../css/r_admin.css"></link>
		<link rel = "stylesheet" href = "../css/r_admin2.css"></link>
		
        <script type="text/javascript" src="../JS/r_admin.js"></script>
		<script type="text/javascript" src="../JS/r_admin2.js"> </script>
		
 
    </head>

    <body>
       
	    <header>
		
			<h1><i><center>Govt.Science College Matale</center></i></h1>
	
			<?php 
				session_start();

				if(isset($_SESSION['uname'])) 
				 {
				 	echo "<a href='../../Asanka/html/logout.php'><button style='margin-left: 90%;' type='submit' id='logout' class='logout'>Log Out</button></a>";
				 }
				/*else
				{
					echo "<a href='../../Asanka/html/login.php'><button class='button' >Login</button></a>";
				}*/
			?>
	
		</header>
		
		
			
		<ul type = "disc" class = "topnav" id = "topnav">
			    <li><a href = "../../Chandula/html/home.php"  >Home</a></li>
				<li><a href = "../../Manujaya/html/event.php" >Events</a></li>
				<li><a href = "../../Nadun/HTML/ContactUs.php" > Contact Us</a></li>
				<li><a href = "../../Nadun/HTML/AboutUs.php">About Us</a></li>	
		
		</ul>
		
				
		
		<section>
		
			<nav style="height: 690px;">
			
					
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
					<table style = "margin-top:40px; margin-right:auto; margin-left:auto">
						<tr>
						
							<td>
								<a href="../../Nadun/HTML/StudentReg.php" target = "_blank" >
									<input type="button" class="sr" value="Student Registration" id="addmark"  ></a>
							</td>
							
							<td>	
								<a href="../../Nadun/HTML/TeacherReg.php" target = "_blank">
									<input type="button" class="tr" value="Teacher Registration" ></a><br />
							</td>
							
						</tr>
						
						<tr>
						
							<td>
								<a href="../../Nadun/HTML/retreive.php" target = "_blank">
									<input type="button" class="usd" value="Update Student Details" id="guide" ></a>
							</td>
							
							<td>	
								<a href="../../Nadun/HTML/retreive_t.php" target = "_blank">
									<input type="button" class="utd" value="Update Teacher Details" id="veiw-stu" ></a><br />
							</td>
							
						</tr>
						
						<tr>
						
							<td>
								<a href="../../Nadun/HTML/retreive.php" target = "_blank">
									<input type="button" class="rs" value="Remove Student" id="veiw-stu" ></a><br />
							</td>
							
							<td>
								<a href="../../Nadun/HTML/retreive_t.php" target = "_blank">
									<input type="button" class="rt" value="Remove Teacher " id="veiw-stu"  ></a><br />
								
							</td>
							
						</tr>
						
						<tr>
						
							<td>
								<a href="../../Nadun/HTML/assignClasses.php" target = "_blank">
									<input type="button" class="rs" value="Assign Classes " id="veiw-stu" ></a><br />
							</td>
							
							<td>
								<a href="../../Nadun/HTML/retreive_c.php" target = "_blank">
									<input type="button" class="rs" value="Edit Classes" id="veiw-stu" ></a><br />
							</td>
							
						</tr>
						
					</table>
				
			</article>
			
		</section>
		
		
		
		<footer style="margin-top: 5%;">
		
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