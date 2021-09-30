<?php 

	require('../../extra/html/config.php');
	session_start();

?>


<!DOCTYPE html>

<html>
<head>
	<title>Edit Teacher Registration Details.</title>
	<link rel = "stylesheet" href = "../CSS/Background.css"></link>
	<script>
		document.write(Date());
	</script>
	
	<script src = "../JS/ckeckbox.js"></script>
	<script>
		function nm1vali(){
			var name = document.getElementById("name1").value;
			var letters = /^[A-Za-z]+$/
			var msg;
			if(name.match(letters)){
				msg = "";				
			}
			else{				
				msg = "*Enter Characters only!!!";
			}
			 document.getElementById("err1").innerText= " " +msg+ " ";			
		}
		
		function nm2vali(){			
			var name = document.getElementById("name2").value;
			var letters = /^[A-Za-z]+$/
			var msg;
			if(name.match(letters)){				
				msg = "";				
			}
			else{				
				msg = "*Enter Characters only!!!";
			}
			 document.getElementById("err2").innerText= " " +msg+ " ";						
		}
		
		function conpass(){
			var pas = document.getElementById("psw").value;
			var cpas = document.getElementById("rpsw").value;
			if(pas != cpas){
				alert("Please re-enter the same password!!!");
				return false;
			}else{
			return true;
			}			
		}
		
		function passlen(){
			var pas = document.getElementById("psw").value;
			if(pas.length > 5){
				return true;
			}else{
				alert("Password must have at least 6 characters!!!");
				return false;
			}			
		}
		
		function idval(){
			var id = document.getElementById("tid").value;
			var pat = /^[TE0-9]{6}$/;
			var msg;
			if(pat.test(id)){
				msg = "";
			}else{
				msg = "*ID must be 'TE<4 numbers>'. Eg: TE0001";
			}
			 document.getElementById("iderr").innerText= " " +msg+ " ";
		}
		
		
	
	</script>
		
		
	
</head>

<header><h1><i><center><u>Teacher's Registration Form.</u></center></i></h1></header>


<body>


		<?php 
			
				

		
			$recordId =$_GET['tid'];
		
			$sql = "SELECT * FROM teacher WHERE TeacherId = '$recordId' ";
					
			$result = $con -> query($sql);
			
			
			if($result -> num_rows> 0){
				
				while($row = $result -> fetch_assoc()){
						
					$id = $row['TeacherId'];
					$fnm = $row['fname'];
					$lnm = $row['lname'];
					$nic = $row['Nic'];
					$email = $row['Email'];
					$pswd = $row['password'];
					$phn = $row['phoneNum'];							
																										
				
				}				
			}else{				
				echo"No records!!!";				
			}
			
			
			
		
		?>
	
	<fieldset>
	<form method = "POST" action = "subEdit_t.php" onsubmit = "return conpass() && passlen()">
		
		
		
		First Name : <br/>
		<input type = "text" name = "tfname" value = "<?php echo $fnm ?>" id = "name1" size= "100%" placeholder = "First Name" onkeyup = "nm1vali(name1)" required>
		<span style ="color : red" id = "err1"></span>
		<br/><br/>
		
	
		Last Name : <br/>
		<input type = "text" name = "tlname" value = "<?php echo $lnm ?>"  id = "name2" size= "100%" placeholder = "Last Name" onkeyup = "nm2vali(name2)" required>
		<span style ="color : red" id = "err2"></span>
		<br/><br/>
		
		Teacher ID : <span style ="color : red" id = "iderr"></span> <br/>
		<input type = "text" id = "tid" name = "tid" value = "<?php echo $id ?>" size= "100%"   onkeyup = "idval()" readonly> 		
		<br/><br/>
		
		
		
		NIC Number :<br/>
		<input type = "text" id = "nic" name = "tnic"  value = "<?php echo $nic ?>" size = "100%" pattern = "[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]V" required><span style ="color : red" id = "nicerr"></span> <br/>
		<br/><br/>
		
				
		Password :<br/>
		<input type = "password" name = "tpswd"  value = "<?php echo $pswd ?>" id = "psw" size = "100%"><br/><br/>
		
					
		Re-enter Password :<br/>
		<input type = "password" name = "rtpswd" value = "<?php echo $pswd ?>" id = "rpsw"  size = "100%"><br/><br/>
		
		
		E-mail :<br/>
		<input type = "text" name = "temail"  value = "<?php echo $email ?>" size = "100%" required>
		<br/><br/>
		
		Telephone Number :<br/>
		<input type = "number" name = "ttp"  value = "<?php echo $phn ?>" size = "100%" pattern = "[0-9]{10}" required >
		<br/><br/>
		
		
			
		<center><input type = "submit" name = "submit" value = "Update" id = "sbt"  >&nbsp &nbsp &nbsp &nbsp <input type = "reset" name = "Reset" value = "Reset"></center>
			
	</form>
	</fieldset>
	
</body>
</html>