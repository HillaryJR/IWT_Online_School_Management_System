<?php
require '../../extra/html/config.php';
session_start();

if(isset($_POST['submit'])){	
	$tid = $_POST['tid'];
	$tfname = $_POST['tfname'];
	$tlname = $_POST['tlname'];
	$tnic = $_POST['tnic'];
	$email = $_POST['temail'];
	$tpswd = $_POST['tpswd'];
	$ttp = $_POST['ttp'];
	
	
	$EncryptPassword = md5($tpswd);
	
	// echo "<br>".$tid."<br>";
	// echo $tfname."<br>";
	// echo $tlname."<br>";
	// echo $tnic."<br>";
	// echo $email."<br>";
	// echo $EncryptPassword ."<br>";
	// echo $ttp."<br>";
	
	

	$sql_t = "INSERT INTO teacher(TeacherId,fname,lname,Nic,Email,password,phoneNum)
			VALUES('$tid','$tfname','$tlname','$tnic','$email','$tpswd ','$ttp')";
	if (mysqli_query($con,$sql_t)){		
		echo "<br>successfully Inserted to teachers' table..";	
		header("location:TeacherReg.php?msg=t");
	}
	else{		
		echo "<br>Oops!!! Cannot enter same teacher ID for two teachers!!!";		
	}
	
mysqli_close($con);
}

	
?>