<?php
	require 'config.php';
?>

<!DOCTYPE html>

<html>

    <head>
	
		
		<meta charset = "utf-8">
		<meta name ="viewport" content = "width=device-width, initial-scale=1">
        
        <title>Student's Interface.</title>
		
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></link>
        <link rel="stylesheet" href="../css/stu_stylesheet.css"></link>	
		<link rel = "stylesheet" href = "../css/stu_inter.css"></link>
		
		
		<script type="text/javascript" src="../js/myscriptR.js"></script>
		 <script type="text/javascript" src="../js/nadunR.js"> </script>	
       
		   
    </head>

    <body>
       
	    <header>
		
			<h1><i><center>Govt.Science College Matale.</center></i></h1>
	
			<img src="../../img/n.JPG" height="150" width="auto" class="profile-img" id="propic" align="right" onclick="openprofile()">
		  
			<div class="name">A.P.Kalindu</div>

			<a href="../../Chandula/html/home.php">  
				<input type="button" value="logout" id="logout" class="logout" onclick = "return logOut()"></a>
	
		</header>
		
		
			
		<ul type = "disc" class = "topnav" id = "topnav">
			    <li><a href = "../../Chandula/html/home.php" target = "_blank" >Home</a></li>
				<li><a href = "../../Manujaya/html/event.php" target = "_blank">Events</a></li>
				<li><a href = "../../Nadun/HTML/ContactUs.php" target = "_blank"> Contact Us</a></li>
				<li><a href = "../../Nadun/HTML/AboutUs.php" target = "_blank">About Us</a></li>	
		
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

				<center>
			<div>
				<table border = "1" width "100%">
					<tr>
						<th>Student Id</th>
						<th>fname</th>
						<th>lname</th>
						<th>Email</th>
						<th>Password</th>
						<th>Class ID</th>
						<th>DOB</th>
						<th>Gender</th>
						<th>Parent NIC</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					
					<!--retrieve data from DB-->
					<?php
					
					$sql = "SELECT * FROM student WHERE StudentId = 'ST0001'";
					$result =$conn->query($sql);
					
					 if($result -> num_rows > 0)
					 {
						while($row = $result->fetch_assoc())	//read data row by row 
						{
							$id = $row['StudentId'];
							 echo "<tr>
			 						<td>".$row['StudentId']."</td>
									<td>".$row['fname']."</td>
									<td>".$row['lname']."</td>
									<td>".$row['Email']."</td>
									<td>".$row['password']."</td>
									<td>".$row['ClassId']."</td>
									<td>".$row['DOB']."</td>
									<td>".$row['Gender']."</td>
									<td>".$row['Parent_Nic']."</td>
<td><button type = 'submit'><a href = 'EditRecord.php?id=$id'>Edit</a></button></td>
<td><button type = 'submit'><a href = 'DeleteRecord.php?id=$id'>Delete</a></button></td>

								</tr>";
						}
						 
					 }
					 else
					{
						echo "0 results";
					}
					?>
					
					
				</table>
			</div>
		</center>
			
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