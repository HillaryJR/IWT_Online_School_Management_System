<!DOCTYPE html>
<html>
	<head>

	<title>About Us.</title>
	
		
	<meta charset = "utf-8">
	<meta name ="viewport" content = "width=device-width, initial-scale=1">
	
	<link rel = "stylesheet" href = "../CSS/auCss.css"></link>
	<link rel="stylesheet" type="text/css" href="../../Chandula/css/homeStyles1.css"></link>
	<style>
		#topnav{				
			margin-top : 0px;
			padding: 10px;
			list-style-type : none;
			background-color : red;
			opacity : 0.8;
		    filter : alpha(opacity=50);
			overflow : auto;
			position : -webkit-sticky;
			position : sticky;				
		}
		#topnav li a {				
				float: left;
				color : white;
				text-decoration : none;
				display : block;
				text-align : center;
				padding : 16px;	
		}

		.topnav li a:hover{				
				background-color : black;
		}
		.topnav .crnt {				
				background-color :  #000000 ;
		}
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
							<a style='color:white;text-decoration:none;' href='../../Radesh/html/student.php'><b>".$_SESSION['uname']."</b></a></div>";
					}
					else if(preg_match("/TE/", $_SESSION['uname']))
					{
						echo "<div class='name' style='margin-left: 85%; font-family: Calibri;font-size: 20px;border:none;padding:5px;'>
							<a style='color:white;text-decoration:none;' href='../../Asanka/html/t_inter.php'><b>".$_SESSION['uname']."</b></a></div>";
					}

				 	echo "<a href='../../Asanka/html/logout.php'><button style='margin-left: 90%;padding : 15px;font-size:17px;' type='submit' id='logout'>Log Out</button></a>";
				 }
				else
				{
					echo "<a href='../../Asanka/html/login.php'><button style='padding:15px;height:40px;margin-top:-10px;' id='logout'><b>Login</b></button></a>";
				}
			?>
			
		
		
		</header>
		
		
			
		<ul type = "disc" class = "topnav" id = "topnav">
			    <li><a href = "../../Chandula/html/home.php">Home</a></li>
				<li><a href = "../../Manujaya/html/event.php">Events</a></li>
				<li><a href = "ContactUs.php">Contact Us</a></li>
				<li><a class = "crnt" href = "#">About Us</a></li>	
		
		</ul>
		
				
		
		<section>
		
			<nav>
			
					
				<div id = "FullCalander">
					<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
					<link rel="stylesheet" href="calander/demo.css"/>
					<link rel="stylesheet" href="calander/theme2.css"/>
				  
				  
					<div id="caleandar">

					</div>

					<script type="text/javascript" src="calander/caleandar.js"></script>
					<script type="text/javascript" src="calander/demo.js"></script>
						
				</div>


			
			</nav>
		
			<article>
				
				<div class = para>
					<h1><center><i><u>Govt.Science College Matale.</u></i></center></h1>
					
					
					<p>Starting from 1976 until now we have made lot of sucsessfull students who have won the world.Our School is a government
					school which located in Matale town near Matale General Hospital.Main speciality of our school is it's from grade 10 to 13.Only Science,Maths 
					and Tecnological subjects can be studied here.Our school has so many facilities for our students to do their studies properly.Former 
					principal Mr.K.D.Atipola is very popular among the province and also he is very honest,kind and talented teacher.Now Mrs.A.Perera
					is our honorable principal. </p>
					
					<p>Starting from 1976 until now we have made lot of sucsessfull students who have won the world.Our School is a government
					school which located in Matale town near Matale General Hospital.Main speciality of our school is it's from grade 10 to 13.Only Science,Maths 
					and Tecnological subjects can be studied here.Our school has so many facilities for our students to do their studies properly.Former 
					principal Mr.K.D.Atipola is very popular among the province and also he is very honest,kind and talented teacher.Now Mrs.A.Perera
					is our honorable principal. </p>
				</div>
				
				<iframe style = "margin-top : -15px " width="875" height="453" src="https://www.youtube.com/embed/1fQKu-IP0wg?autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			
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

























