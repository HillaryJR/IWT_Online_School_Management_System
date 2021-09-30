<?php 
	require'../../extra/html/config.php';
	session_start();
	
	$recordId = $_GET['id'];
	
	$sql = "DELETE FROM student WHERE StudentId ='$recordId'";
	
				
	if(mysqli_query($con,$sql)){
		echo "Student Record Deleted successfully";
		header("location:retreive.php");
	}else{
		echo "Oops!!! Something went wrong!!!";
	}
	mysqli_close($con);


?>