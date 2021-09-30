<?php
	require '../../extra/html/config.php';
	session_start();
	$id = $_SESSION['uname'];

?>
<!DOCTYPE html>
<html>
<head>
	
	<link rel = "stylesheet" href = "../css/final.css">	
		
	<style>
			table td{width : 400;}

	div{
		 background-color: lightgrey;
		 background-image : url("images/background9.jpg");
		 background-size : cover;
		 background-attachment : fixed;
		 background-position : center;
		  width: 1000px;
		  border: 15px solid #002080;
		  padding: 100px 30px	;
		  margin: 20px;
		}
	
	
	</style>
</head>

<body>

	<?php
		echo "<center><h1 style='color: rgb(195, 167, 134);
								font-size:35px;
								color : white;
								background:#13083a9d;
								border:black solid;'>
			Student Profile</h1></center>";
	
	?>
	<Marquee style = "color:white;">Govt.Science College Matale</Marquee>
	<hr/>	
	

	<center>
			<div>
				<table border = "1px" id = "tableStaff" width= 1000
				
						style='color: rgb(195, 167, 134);
						font-size:25px;
						color:white;
						background:#13083a9d;
						border:black solid;'>
					
				<?php
                           // $sid = $_POST['sid'];
                           $sql = "SELECT * FROM student WHERE StudentId = '$id'";
                            $result = $con->query($sql);

                            if($result -> num_rows > 0)
                            {

                                    while($row = $result->fetch_assoc())
                                    {
											$id = $row['StudentId'];
                                       echo "<tr><td> " . "Student ID" . "</td><td>" . $row['StudentId'] . "</td></tr>
                                        <tr><td> " . "First Name" . "</td><td>" . $row['fname'] . "</td></tr>
                                        <tr><td> " . "Last Name" . "</td><td>" . $row['lname'] . "</td></tr>
                                        <tr><td> " . "Email" . "</td><td>" . $row['Email'] . "</td></tr>
										<tr><td> " . "Password" . "</td><td>" . $row['password'] . "</td></tr>
                                        <tr><td> " . "DOB" . "</td><td>" . $row['DOB'] . "</td></tr>
                                        <tr><td> " . "Gender" . "</td><td>" . $row['Gender'] . "</td></tr></table>";

										}

                            }
                            else	
                            {
                                echo "no Data";
                            }
                        
                            
							echo "<br>
											<a href='Edit_Profile_Student.php?id=$id'><button class='button button1' type='submit'>Edit Details</button></a>";										
                                    
                        ?>
						
						
			
			</div>
		</center>
	
	
</body>
</html>