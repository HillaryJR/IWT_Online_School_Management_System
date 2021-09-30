<!DOCTYPE html>

<html>

    <head>
	
		
		<meta charset = "utf-8">
		<meta name ="viewport" content = "width=device-width, initial-scale=1">
        
        <title>Teacher's Interface.</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link  href="../css/stylesheet.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="../js/myscript.js"></script>
		<script type="text/javascript" src="../js/nadun.js">
		
        </script>
		
		
		<link rel = "stylesheet" href = "../css/t_inter.css"></link>
		   
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
							FROM teacher
							WHERE TeacherId='$id'";

					$res = $con->query($sql);

					if($res-> num_rows > 0)
					{
						while ($row=$res->fetch_assoc()) 
						{
							echo "<a style='text-decoration:none; font-size:20px;color:white;' href='TeacherProfile.php' target='_blank'>".$row['fname']." ".$row['lname']."<br>".$id."</a>";
						}
					}
				 ?>
				 <a href="../../Asanka/html/logout.php"><button style="margin-left: 0%;" type="submit" id="logout" class="logout"><b>Log Out</b></button></a>
			</div>
	
		</header>
		
		
			
		<ul type = "disc" class = "topnav" id = "topnav">
			    <li><a href = "../../Chandula/html/home.php" >Home</a></li>
				<li><a href = "../../Manujaya/html/event.php">Events</a></li>
				<li><a href = "../../Nadun/HTML/ContactUs.php"> Contact Us</a></li>
				<li><a href = "../../Nadun/HTML/AboutUs.php">About Us</a></li>	
		
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
				
				<a href="chooseTerm.php" target = "_blank" >
					<input type="button" class="addmark" value="Add Marks" id="addmark"  ></a>
					
				
				<a href="TeacherProfile.php" target = "_blank">
					<input type="button" class="veiw" value="Veiw Profile" ></a>
				
				<a href="../../Manujaya/html/guide.php" target = "_blank">
					<input type="button" class="guide" value="Teacher's Guide" id="guide" ></a>
				
				<a href="editStudent_1.php" target = "_blank">
					<input type="button" class="stu" value="Edit Marks" id="veiw-stu" ></a>

				
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