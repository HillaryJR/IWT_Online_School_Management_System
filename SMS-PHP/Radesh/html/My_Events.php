<?php
	require '../../extra/html/config.php';
	session_start();
	$id = $_SESSION['uname'];
?>

<!DOCTYPE html>
<html>
	<head>
<link rel = "stylesheet" href = "../css/final.css">			
		<title>Events_All</title>
		
		<style>
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
	My Events</h1></center>";
	
?>
		

		
		<center>
			<div>
				   
                    <table style='color: rgb(195, 167, 134);
						font-size:25px;
						font-align : center;
						color:white;
						background:#13083a9d;
						border:black solid;
						width : 800px;'
						border = 1
						align="center"
						>
                            
                       
					 
					<?php							
							
                            $sql1 = "SELECT s.eventId , e.eventName, e.eventDescription 
									FROM events e, studentevents s 
									WHERE e.eventId = s.eventId AND s.StudentId = '$id' ";
                            $result = $con->query($sql1);
							
			

                            if($result -> num_rows > 0)
                            {

                                    while($row = $result->fetch_assoc())
                                    {
										$eid = $row['eventId'];
                                       
                                        echo "<tr><td><center>" . $row['eventName'] . "</center></td><td><center>" . $row['eventDescription'] . "</center></td>
										<td><center><a href = 'Delete_Event.php?id=$id&eid=$eid'><button class='button button2' type = 'submit'> Leave </button></a></center></td></tr>";
                                       
                                    }

                            }
                         
                            else
                            {
                                	echo 
										"<center><h1 style='color: rgb(255, 55,55);
										font-size:25px;
										color : white;
										background:#ff4d4d;
										border:black solid;'>
					You have not Enrolled for any Event</h1></center>";
								
								    	 
                            }
                           
                            
                        
						
				  ?>
				 </table>

		<br>
				  <center><a href = 'Events_All.php'><button class='button button1' type = 'submit'> Enroll in New Events </button></a>
										</center>

	 
					
						
				</div>
			</div>
			
				
		</center>
	
	
	</body>

</html>