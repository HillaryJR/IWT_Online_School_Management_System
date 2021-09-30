<!Doctype html>
<html>
<head>
<title>Events</title>
<link rel="stylesheet" href="../src/event1.css">

		
	<meta charset = "utf-8">
	<meta name ="viewport" content = "width=device-width, initial-scale=1">
	
	<link rel = "stylesheet" href = "../src/bgManu.css"></link>
	<link rel="stylesheet" type="text/css" href="../../Chandula/css/homeStyles1.css">
	<!--<link rel = "stylesheet" href = "../../Chandula/css/cssHome.css"></link>-->
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

				 	echo "<a href='../../Asanka/html/logout.php'><button style='margin-left: 90%;padding : 15px;font-size:17px;' type='submit' id='logout' id='logout'><b>Log Out</b></button></a>";
				 }
				else
				{
					echo "<a href='../../Asanka/html/login.php'><button style='padding:15px;height:40px;margin-top:-10px;' id='logout'><b>Login</b></button></a>";
				}
			?>
			
		
		
	</header>
	
	
			
		<ul type = "disc" class = "topnav" id = "topnav">
			    <li><a href = "../../Chandula/html/home.php">Home</a></li>
				<li><a class = "crnt"  href = "#">Events</a></li>
				<li><a href = "../../Nadun/HTML/ContactUs.php">Contact Us</a></li>
				<li><a href = "../../Nadun/HTML/AboutUs.php">About Us</a></li>	
		
		</ul>
		
				
	
			
	<section>
		<div class="leftBox">
			<div class="content">
			<h1>Events And Announcements</h1>
			<p>Stay Updated and Follow the Events And Announcements in order to stay in touch with the school current
				Situations and to carry on Both your Academic and Extra Activities without any Delay or Problems.Some Details can undergo 
				different changes without prior warnings!</p>
			</div>
			
			<br/>
			
			<iframe width="560" height="315" src="https://www.youtube.com/embed/vE5pVtLjlb4?autoplay=1 " frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" loop allowfullscreen></iframe>
			
		</div>
		<div class="events">
			<ul>
				<!--<li>
					<div class="time">
						<h2>24<br /><span>February</span></h2>
					</div>
					<div class="details">
						<h3>Annual School Inter House Sport Meet</h3>
						<p>This Year Our School Management Committee has Deicided to Commence the School Inter House Sport Meet Earlier.
							</p>
						<a href="#">View Details</a>
					</div>
					<div style="clear:both;"></div>
				</li>
				<li>-->
					<!--<div class="time">
						<h2>05<br /><span>March</span></h2>
					</div>
					<div class="details">
						<h3>Song Fiesta</h3>
						<p>After Working hard for your sportsmeet, you will now have the time to join the Song Fiesta and enjoy the rest of the day. Featuring 
						one of the best Musical Bands in Sri Lanka</p>
						<a href="#">View Details</a>
					</div>
					<div style="clear:both;"></div>
				</li>
				<li>
					<div class="time">
						<h2>15<br /><span>March</span></h2>
					</div>
					<div class="details">
						<h3>Inter School Big Match</h3>
						<p>It's Time to Find out whos got what it takes to bring the Big Match Trophy to thier School and shine in Pride.Get ready to 
							Witness the Most Intense Match of the Year! </p>
						<a href="#">View Details</a>
					</div>
					<div style="clear:both;"></div>
				</li>-->
					<?php  
							require '../../extra/html/config.php'; //config file

							$sql = "SELECT * FROM events";

							$result = $con->query($sql) ;

							if($result -> num_rows > 0)
							{
								while($row = $result->fetch_assoc())
								{
									echo "<li style='height:150px; width:800px;background-color:rgba(0,0,0,0); color:white;font-family:Candara;'><div style='background-color:rgba(0,0,0,.8);' class='details'>
										  <h3><u>".$row['eventName']."</u></h3>
										  <p>".$row['eventDescription']."</p></div>
										  <div style='clear:both;'></div></li>";
										 
								}
							}	
							?>
			</ul>
		</div>
		
	</section>
			
		
		
		<hr/>
		
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
