<?php 

	require'../../extra/html/config.php';
	session_start();
	
	$sid = $_POST['sid'];
	$sfname = $_POST['sfname'];
	$slname = $_POST['slname'];
	$email = $_POST['email'];
	$pswd = $_POST['spswd'];
	
	
	$clzid = $_POST['classId'];
	$dob = $_POST['sdob'];
	$gen = $_POST['gen'];
	
	
	$pnic = $_POST['gnic'];
	
	$gfname = $_POST['gfname'];
	$glname = $_POST['glname'];
	$ono = $_POST['gotp'];
	$mno = $_POST['gmtp'];
	$address = $_POST['address'];
	
	
	$sql_s = "UPDATE student SET 
				
				fname = '$sfname',
				lname = '$slname',
				Email = '$email',				
				password = '$pswd',				
				ClassId  = '$clzid',
				DOB  = '$dob',
				Gender  = '$gen'
				WHERE StudentId = '$sid'";
				
	if(mysqli_query($con,$sql_s)){
		echo "Records updated successfully";
		
	}else{
		echo "Oops!!! Something went wrong!!!";
	}
	

	$sql_p = "UPDATE parent SET 
				Nic = '$pnic',
				pfname = '$gfname',
				plname = '$glname',
				office_no = '$ono',
				mob_no  = '$mno',
				address  = '$address'
				WHERE studentId = '$sid'";
				
	if(mysqli_query($con,$sql_p)){
		echo "Records updated successfully";
		header("location:retreive.php");
	}else{
		echo "Oops!!! Something went wrong!!!";
	}			
	
	
	
	mysqli_close($con);
?>