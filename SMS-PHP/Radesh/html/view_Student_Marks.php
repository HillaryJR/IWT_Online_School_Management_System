<!DOCTYPE HTML>
<html>
    <head>
    
        <title>
            Edit Student Marks
        </title>
       <link rel = "stylesheet" href = "../css/final.css">
		<script type="text/javascript" src="../JS/calculations.js"></script>
	
        <style>
            .pro td{
                    width:200px;

            }
			
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
	Student Marks</h1></center>";
	
?>
<Marquee style = "color : white;font-size:25px;">Govt.Science College Matale</Marquee>
	<hr/>
        <center>
          <div>
                    <table style='color: rgb(195, 167, 134);
						font-size:25px;
						font-align : center;
						color:white;
            /*border-collapse: collapse;*/
						background:#13083a9d;
						border:black solid;
						width : 500px;'
						border = 1
						align="center"
						id="markTable"
						>
                            
                       <?php
                       		require '../../extra/html/config.php';
                       		session_start();
			
							$id = $_SESSION['uname'];
                            $term = $_POST['marks'];
                                                  
                            $sql = "SELECT s.Subjectname , sm.$term
                                    FROM studentmarks sm , subject s 
                                    WHERE s.Subjectcode = sm.subCode AND sm.studentId='$id'  ";
                            $result = $con->query($sql);
                            

                            if($result -> num_rows > 0)
                            {
									$tot = 0;
									$count = 0;
                                    while($row = $result->fetch_assoc())
                                    {
                                       
                                        echo "<tr><td><center>" . $row['Subjectname'] . "</center></td><td><center>" . $row[$term] . "</center></td></tr>";
										$tot += $row[$term];
										$count++;
                                    }
									$avg = $tot/$count;
									
								echo "<tr><td colspan = '2' style = 'background-color : red' ><center>Your Total is : ".$tot."</center></td></tr>";
								echo "<tr><td colspan = '2' style = 'background-color : red'><center>Your Average is : ".$avg."</center></td></tr>";
                            }
                         
                            else
                            {
                                echo "Marks not uploaded";
                            }
                           
                            
                        ?>
                  
                    </table>
						
					
					 
				<p id="tot"></p>
				<br />
				<p id="ave"></p>
				<br />

			

       
      
    
       </div>
       </center>
       
       
         
    </body>

</html>