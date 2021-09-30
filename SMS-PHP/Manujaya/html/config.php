<?php

	$servername = "localhost";
	$username = "root";
	$password  = "";
	$database = "schoolmanagementdb";
	//create connection_aborted
	
	$Subjectcode ="";
	$ClassId = "";
	$TeacherId = "";
	$Subjectname="";
	
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	
	try{	//Executes the code within try
		$connect = mysqli_connect($servername, $username, $password, $database);
	} catch (Exception $ex){	//If Code within try meets an exception code within catch will run
		echo "<script>alert('Error')</script>";
	}
?>