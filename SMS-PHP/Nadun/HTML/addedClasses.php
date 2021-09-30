<?php
require '../../extra/html/config.php';
session_start();

if(isset($_POST['submit'])){
	
	$clzid = $_POST['classId'];
	$tid = $_POST['tid'];
	
	
	
	
	// echo $clzid."<br>";
	// echo "<br>".$tid."<br>";
	
	
	
	

	$sql_c = "INSERT INTO class(ClassId,TeacherId)
			VALUES('$clzid','$tid')";
			
	if (mysqli_query($con,$sql_c)){		
		echo "<br>successfully Inserted to class table..";	
		header("location:assignClasses.php?msg=t");
	}
	else{		
		echo "<br>Oops!!! Cannot repeat Class ID and Teacher ID or Teacher ID doesn't exist in data base!!!";		
	}
	
mysqli_close($con);
}

	
?>