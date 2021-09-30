<html>
<head>
<link  href="../css/stylesheet.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" >
</head>
<body>
            <?php
                    require '../../extra/html/config.php';
                    session_start();
                    $id= $_SESSION['uname'];
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
            <form method="post" action="submitedit.php">
        <center>
            <table class="pro">

                            <tr><td>TeacherID</td><td><input type="text" name="id" value='<?php echo $id?>' readonly></td></tr>
                            <tr><td>First Name</td><td><input type="text" name="fname" value='<?php echo $fname?>' readonly></td></tr>
                            <tr><td>Last Name</td><td><input type="text" name="lname" value='<?php echo $lname?>' ></td></tr>
                            <tr><td>NIC</td><td><input type="text" name="nic" value='<?php echo $nic?>' readonly></td>></tr>
                            <tr><td>Email</td><td><input type="email" name="email" value='<?php echo $email?>'></td></tr>
                            <tr><td>Phone Number</td><td><input type="text" name="num" value='<?php echo $pno?>'></td></tr>   
			
            </table><br><input type='submit' value='Update Details' class="tup">
        </center>
</body>        

<html>