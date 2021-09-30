<?php 
	require'../../extra/html/config.php';
	session_start();
	
	$recordId = $_GET['id'];
	
	$sql = "DELETE FROM teacher WHERE TeacherId = '$recordId'";
	
				
	if(mysqli_query($con,$sql)){
		echo "Teacher Record Deleted successfully";
		header("location:retreive_t.php");
	}else{
		echo "Oops!!! Something went wrong deleting teacher !!!";
	}
	mysqli_close($con);


?>