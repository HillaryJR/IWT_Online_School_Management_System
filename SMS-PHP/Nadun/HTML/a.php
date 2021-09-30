<?php 

	require'../../extra/html/config.php';
	session_start();
	
	$sfname = $slname = $gfname = $glname = '';
	
	
	
	
		$sfname = test_input($_POST['sfname']);
		if (!preg_match("/^[a-zA-Z ]*$/",$sfname)) {
		  echo"Only letters and white space allowed";
		}
		
		$slname = test_input($_POST['slname']);
		if (!preg_match("/^[a-zA-Z ]*$/",$slname)) {
		  echo"Only letters and white space allowed";
		}
		
		$gfname = test_input($_POST['gfname']);
		if (!preg_match("/^[a-zA-Z ]*$/",$gfname)) {
		  echo"Only letters and white space allowed";
		}
		
		$glname = test_input($_POST['glname']);
		if (!preg_match("/^[a-zA-Z ]*$/",$glname)) {
		  echo"Only letters and white space allowed";
		  
		}
		
		function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);
		return $data;
		}
		
		if(isset($_POST['email']) == true && empty($_POST['email']) == false){
			
			$email = $_POST['email'];
			
			if(filter_var($email,FILTER_VALIDATION_EMAIL) == false){
				
				echo "Invalid E-mail!!!";
				
			}
			
		}
	
	
?>