<html>
    <head>
  
        <title>
            Teacher Profile
        </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link  href="../css/stylesheet.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" >
        <script>
                function closewin()
                {
                    window.close('chooseterm.php');
                }

        </script>

    </head>

    <body >
    <center>
    <table class="pro" align="center" >

                 			
			
			<?php
                    require '../../extra/html/config.php';
                    session_start();
                    $id = $_SESSION['uname'];
					$sql="SELECT * FROM teacher WHERE teacherId='$id'";
					
					$result=$con->query($sql);
					
					if($result -> num_rows > 0)
					{
						
						while($row = $result->fetch_assoc())
						{
                                                  
							$id = $row['TeacherId'] ;
                            $fname = $row['fname'] ;
                            $lname = $row['lname'] ;
                            $nic = $row['Nic'] ;
                            $email = $row['Email'] ;
                            $pno = $row['phoneNum'] ; 
                          
                        }

                    }
				
			?>
                            <tr><td>TeacherID</td><td><?php echo $id?></td></tr>
                            <tr><td>First Name</td><td><?php echo $fname?></td></tr>
                            <tr><td>Last Name</td><td><?php echo $lname?></td></tr>
                            <tr><td>NIC</td><td><?php echo $nic?></td></tr>
                            <tr><td>Email</td><td><?php echo $email?></td></tr>
                            <tr> <td>Phone Number</td><td><?php echo $pno?></td></tr>  
			
            </table><br>
            <a href="editdetails.php"><input type='button' value='Edit Details' class="tup"><input type="button" class="tup" value="close window" style='background:orange;color:black' onclick='closewin()'><br />
        </center>
	
    </body>

</html>