<?php 

	require'../../extra/html/config.php';
	session_start();
	
	$clzid = $_POST['classId'];
	$tid = $_POST['tid'];
	
	
	
	
	
	$sql_c = "UPDATE class SET 				
				TeacherId = '$tid'			
				WHERE ClassId = '$clzid'";
				
	if(mysqli_query($con,$sql_c)){
		echo "Records updated successfully";
		header("location:retreive_c.php");
		
	}else{
		echo "Oops!!!This Teacher isn't exist in the data base or already has assigned to a class. !!!";
	}
	

	
	
	mysqli_close($con);
?>