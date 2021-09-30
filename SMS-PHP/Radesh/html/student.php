<!DOCTYPE html>

<html>

    <head>
	
		
		<meta charset = "utf-8">
		<meta name ="viewport" content = "width=device-width, initial-scale=1">
        
        <title>Student's Interface.</title>
		
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></link>
        <link rel="stylesheet" href="../css/stu_stylesheet1.css"></link>	
		<link rel = "stylesheet" href = "../css/stu_inter.css"></link>
		
		
		<script type="text/javascript" src="../js/myscriptR.js"></script>
		 <script type="text/javascript" src="../js/nadunR.js"> </script>	
       <style>
       		#logout{
       			background-color: rgb(207,0,0);
       		}
       		#logout:hover{
       			background-color:rgb(235,16,16);
       		}
       		header{
       			background-size  : 180px 180px;
       		}
       		.topnav{
       			padding: 8px;
       		}

       </style>
		   
    </head>

    <body>
       
	    <header>
		
			<h1><i><center>Govt.Science College Matale.</center></i></h1>
	
			<div class="name" style="margin-left: 90%;">
				<?php 
					require '../../extra/html/config.php';
					session_start();
					$id = $_SESSION['uname'];

					$sql = "SELECT fname,lname
							FROM student
							WHERE StudentId='$id'";

					$res = $con->query($sql);

					if($res-> num_rows > 0)
					{
						while ($row=$res->fetch_assoc()) 
						{
							echo "<a style='text-decoration:none; font-size:20px;color:white;' href='view_Profile_Student.php'>".$row['fname']." ".$row['lname']."<br>".$id."</a>";
						}
					}
				 ?>
				 <a href="../../Asanka/html/logout.php"><button style="margin-left: 20%;" type="submit" id="logout" class="logout"><b>Log Out</b></button></a>
			</div>
	
		</header>
		
		
			
		<ul type = "disc" class = "topnav" id = "topnav">
			    <li><a href = "../../Chandula/html/home.php" target = "_self" >Home</a></li>
				<li><a href = "../../Manujaya/html/event.php" target = "_self">Events</a></li>
				<li><a href = "../../Nadun/HTML/ContactUs.php" target = "_self"> Contact Us</a></li>
				<li><a href = "../../Nadun/HTML/AboutUs.php" target = "_self">About Us</a></li>	
		
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
				
				<a href="view_Student_Marks_Select.php" target = "_blank">
					<input type="button" class="addmark" value="My Marks" id="addmark" ></a>
					
				<a href="view_Subjects.php" target = "_blank">
					<input type="button" class="veiw" value="My Subjects" ></a><br />
				
				<a href="Staff_Contacts_For_Students_new1.php" target = "_blank">
					<input type="button" class="stu" value="Staff contacts"  ></a>
					<!--?id=$id-->
				<a href = "view_Profile_Student.php" target = "_blank">
				<input type = "button" class = "stu" value = "View My Profile"></a>
				
				<a href="Events_All.php" target = "_blank">
					<input type="button" class="addmark" value="My Events" id="addmark" ></a>
			</article>
			
		</section>
		
		
		
		<footer>
		
			<p id = "txt"><i><em><b>Copyright 2019 &copy INNOVATION SKYLINE. All rights received.</b></em></i></p>
			
			<a href = "https://www.facebook.com" target = "_blank">
				<img id = "sm" src = "../../img/fb.png" >
			</a>
						
			<a href = "https://www.instagram.com" target = "_blank">
				<img id = "sm" src = "../../img/ins.png" >
			</a>
						
			<a href = "https://www.twitter.com" target = "_blank">
				<img id = "sm" src = "../../img/twit.png" >
			</a>
						
			<a href = "https://www.whatsapp.com" target = "_blank">
				<img id = "sm" src = "../../img/wz.png" >
			</a>
			
		
		
		</footer>
		
		
	
       

    </body>


</html>