<?php 
	require'../../extra/html/config.php';
	session_start();
	
	$recordId = $_GET['id'];
	
	$sql = "DELETE FROM class WHERE ClassId = '$recordId'";
	
				
	if(mysqli_query($con,$sql)){
		echo "Teacher Record Deleted successfully";
		header("location:retreive_c.php");
	}else{
		echo "<br/>Oops!!! Something went wrong deleting classes.!!!";
	}
	mysqli_close($con);


?>