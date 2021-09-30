<?php 

	require '../../extra/html/config.php';
	session_start();
	
if(isset($_POST['submit'])){
	$sid = $_POST['sid'];
	$sfname = $_POST['sfname'];
	$slname = $_POST['slname'];
	$email = $_POST['email'];
	$pswd = $_POST['spswd'];
	$clzid = $_POST['classId'];
	$dob = $_POST['sdob'];
	$gen = $_POST['gen'];
	
	$EncryptPassword = md5($pswd);
	$pnic = $_POST['gnic'];
	
	$gfname = $_POST['gfname'];
	$glname = $_POST['glname'];
	$ono = $_POST['gotp'];
	$mno = $_POST['gmtp'];
	$address = $_POST['address'];
	
	
	
			
		
	
	$sql2 = "INSERT INTO student(StudentId,fname,lname,Email,password,ClassId,DOB,Gender)
			VALUES('$sid','$sfname','$slname','$email','$pswd','$clzid','$dob','$gen')";	
	if (mysqli_multi_query($con,$sql2)){		
		
		echo "<br>successfully Inserted to student table..";
		
	}
	else{		
		echo "<br>Oops!!! class ID is not set OR cannot repeat student ID!!!";		
	}	

	$sql1 = "INSERT INTO parent
			VALUES('$pnic','$sid','$gfname','$glname','$ono','$mno','$address');";	
	if (mysqli_multi_query($con,$sql1)){
		
		echo "<br>successfully Inserted to parents' table..";
		header("location:StudentReg.php?msg=t");
	}
	else{		
		echo "<br>Oops!!! something went wrong with parents' table connection!!!";		
	}		
	
	

mysqli_close($con);
}	
	
?>
<!--<html>
<head>
	
		<script>
			function sure(){
				var con = confirm("Are you sure?");
				if(con){
					return true;
					
				}else{
					return false;
				}
			}
			
		</script>
</head>

<body>
<center>
			<div>
			
				<table border = "1" width = "100%">
				<tr>
					<th> Student ID </th>
					<th> First Name </th>
					<th> Last Name </th>
					<th> Email </th>
					<th> ClassId </th>
					<th> DOB</th>
					<th> Gender </th>
					<th> Guardian's NIC </th>
					<th> Guardian's First Name </th>
					<th> Guardian's Last Name </th>
					<th> Office/Home Phone </th>
					<th> Mobile Number </th>
					<th> Address </th>
					
				</tr>
				
				<?php 
				
					// echo $sid."<br>";
					// echo $sfname."<br>";
					// echo $slname."<br>";
					// echo $email."<br>";
					// echo $EncryptPassword."<br>";
					// echo $clzid."<br>";
					// echo $dob."<br>";
					// echo $gen."<br>";
					// echo $pnic."<br>";
					// echo $gfname."<br>";
					// echo $glname."<br>";
					// echo $ono."<br>";
					// echo $mno."<br>";
					// echo $address."<br>";
					
				
					// $sql_s = "select * from student";
					// $result_s = $con -> query($sql_s);
					// $sql_p = "select * from parent";
					// $result_p = $con -> query($sql_p);
					
					// if($result_s -> num_rows > 0 && $result_p -> num_rows > 0){
						
						// while($row = $result_s->fetch_assoc()){
							
							// $sid = $row['StudentId'];
							
							// echo"<tr>
								// <td>".$row['StudentId']."</td>
								// <td>".$row['fname']."</td>
								// <td>".$row['lname']."</td>
								// <td>".$row['Email']."</td>
								// <td>".$row['ClassId']."</td>							
								// <td>".$row['DOB']."</td>							
								// <td>".$row['Gender']."</td>";
								
							// while($row = $result_p->fetch_assoc()){	
																						
								// echo"<td>".$row['Nic']."</td>
									// <td>".$row['fname']."</td>
									// <td>".$row['lname']."</td>
									// <td>".$row['office_no']."</td>
									// <td>".$row['mob_no']."</td>							
									// <td>".$row['address']."</td>																		
									// <td><button type = 'submit'><a href ='EditRecords.php?id=$sid '>Edit</a></button></td>							
									// <td><a href ='DeleteRecords.php?id=$sid'><input type = 'button' value = 'Delete' onclick = 'return sure()'></a></td></tr>";													
								// break;
							// }   				
						// }
								
								
						
					// }else{
						
						// echo"<br/>0 results in student table!!!";
						
					// }
				
				
				?>
				
				
				
				</table>
			
			
			
			
			
			
			</div>
	
		</center>
</body>	
</html>-->