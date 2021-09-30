<?php 

	require'../../extra/html/config.php';
	session_start();
	
	$tid = $_POST['tid'];
	$tfname = $_POST['tfname'];
	$tlname = $_POST['tlname'];
	$tnic = $_POST['tnic'];
	$email = $_POST['temail'];
	$tpswd = $_POST['tpswd'];
	$ttp = $_POST['ttp'];
	
	
	
	$sql_t = "UPDATE teacher SET 
				
				fname = '$tfname',
				lname = '$tlname',
				Nic = '$tnic',
				Email = '$email',				
				password = '$tpswd',
				phoneNum  = '$ttp'
				
				WHERE TeacherId = '$tid'";
				
	if(mysqli_query($con,$sql_t)){
		echo "Records updated successfully";
		header("location:retreive_t.php");
		
	}else{
		echo "Oops!!! Something went wrong!!!";
	}
	

	
	
	mysqli_close($con);
?>