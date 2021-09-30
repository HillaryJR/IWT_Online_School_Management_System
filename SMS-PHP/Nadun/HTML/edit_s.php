<?php 

	require('../../extra/html/config.php');
	session_start();
	
	
?>

<!DOCTYPE html>

<html>
<head>
	<title>Edit Student Registration Details.</title>
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
				msg = "*Enter Letters only!!!";
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
				msg = "*Enter Letters only!!!";
			}
			 document.getElementById("err2").innerText= " " +msg+ " ";			
		}
		
		function nm3vali(){			
			var name = document.getElementById("name3").value;
			var letters = /^[A-Za-z]+$/
			var msg;
			if(name.match(letters)){				
				msg = "";				
			}
			else{				
				msg = "*Enter Letters only!!!";
			}
			 document.getElementById("err3").innerText= " " +msg+ " ";			
		}
		
		function nm4vali(){			
			var name = document.getElementById("name4").value;
			var letters = /^[A-Za-z]+$/
			var msg;
			if(name.match(letters)){				
				msg = "";				
			}
			else{				
				msg = "*Enter Letters only!!!";
			}
			 document.getElementById("err4").innerText= " " +msg+ " ";			
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
			var id = document.getElementById("sid").value;
			var pat = /^[ST0-9]{6}$/;
			var msg;
			if(pat.test(id)){
				msg = "";
			}else{
				msg = "*ID must be 'ST<4 numbers>'. Eg: ST0001";
			}
			 document.getElementById("iderr").innerText= " " +msg+ " ";
		}
	
	
		</script>
		
</head>

<header><h1><i><center><u>Edit Student's Registration Details.</u></center></i></h1></header>


<body>

	
		<?php 
			
			
		
			$recordId = $_GET['id'];
			
			
			
			$sql1 = "SELECT* FROM student WHERE StudentId = '$recordId'";
			$sql2 = "SELECT* FROM parent WHERE studentId = '$recordId'";
			
		
			$result1 = $con -> query($sql1);
			$result2 = $con -> query($sql2);
			
			
			if($result1 -> num_rows > 0 || $result2 -> num_rows > 0){
				
				while($row = $result1 -> fetch_assoc()){
						
					$id = $row['StudentId'];
					$fnm = $row['fname'];
					$lnm = $row['lname'];
					$email = $row['Email'];
					$pswd = $row['password'];
					
					// $enc = base64_encode($pswd);
					// $dec = base64_decode($pswd);
					
					$clzid = $row['ClassId'];							
					$dob = $row['DOB'];						
					$gen = $row['Gender'];																						
				
				}				
			}else{				
				echo"No records!!!";				
			}
			
			
			
			
			if($result2 -> num_rows > 0 || $result1 -> num_rows > 0){
				
				while($row = $result2 -> fetch_assoc()){
																							
					$nic = $row['Nic'];					
					$pfnm = $row['pfname'];
					$plnm = $row['plname'];
					$ono = $row['office_no'];
					$mno = $row['mob_no'];						
					$adrs = $row['address'];	
					
				}				
			}else{				
				echo"No records!!!";				
			}
		
		
		
		?>

	
	<fieldset >
	<form method = "POST" action = "subEdit_s.php" onsubmit = "return conpass() && passlen()">
	
		
		
		First Name : <br/>
		<input type = "text" name = "sfname" value = "<?php echo $fnm ?>"  id="name1" size = "100%" placeholder = "First Name" onkeyup= "nm1vali()" ><span style ="color : red"id = "err1"></span><br/><br/> 
		
		Last Name :<br/>
		<input type = "text" name = "slname" value = "<?php echo $lnm ?>" id="name2" size = "100%" placeholder = "Last Name"  onkeyup= "nm2vali()" required><span style ="color : red"id = "err2"></span><br/><br/> 
		
		
		Student ID : <span style ="color : red"id = "iderr"></span><br/>
		<input type = "text" id = "sid" value = "<?php echo $id ?>" name = "sid" pattern = "ST[0-9]{6}" size = "100%" onkeyup= "idval()"readonly>
		<br/><br/>
		
		Date of Birth :<br/>
		<input type = "date"  value = "<?php echo $dob ?>" name = "sdob" required>
		<br/><br/>
		
		Gender : &nbsp &nbsp
		Male<input type = "radio" name = "gen" value = "Male" <?php if($gen == 'M')echo 'checked = checked';?> > &nbsp Female<input type = "radio" name = "gen" value = "Female"<?php if($gen == 'F')echo 'checked = checked';?> >
		<br/><br/>
		
		Class ID : <select id = "classId" name = "classId">
					<option> <?php echo $clzid ?></option>
					<option>01A</option><option>01B</option><option>01C</option><option>01D</option>
					<option>02A</option><option>02B</option><option>02C</option><option>02D</option>
					<option>03A</option><option>03B</option><option>03C</option><option>03D</option>
					<option>04A</option><option>04B</option><option>04C</option><option>04D</option>
					<option>05A</option><option>05B</option><option>05C</option><option>05D</option>
					<option>06A</option><option>06B</option><option>06C</option><option>06D</option>
					<option>07A</option><option>07B</option><option>07C</option><option>07D</option>
					<option>08A</option><option>08B</option><option>08C</option><option>08D</option>
					<option>09A</option><option>09B</option><option>09C</option><option>09D</option>
					<option>10A</option><option>10B</option><option>10C</option><option>10D</option>
					<option>11A</option><option>11B</option><option>11C</option><option>11D</option>
					<option>12A</option><option>12B</option><option>12C</option><option>12D</option>
					<option>13A</option><option>13B</option><option>13C</option><option>13D</option>
					
					
				</select><br/><br/>
				
		Password :<br/>
		<input type = "password" name = "spswd" value = "<?php echo $pswd ?>" id = "psw" size = "100%"><span class = "help-block"><br/><br/>
		
					
		Re-enter Password :<br/>
		<input type = "password" name = "rspswd"  value = "<?php echo $pswd ?>" id = "rpsw" size = "100%"><span class = "help-block"><br/><br/>
		
		E-mail :<br/>
		<input type = "email" name = "email"  value = "<?php echo $email ?>" size = "100%" required>
		<br/><br/>
		
		Address : <br/>
		<textarea name = "address" rows = "8" cols = "54"  required><?php echo $adrs?></textarea>
		<br/><br/>

		
		Gurdian's First Name :<br/> 
		<input type = "text" name = "gfname" value = "<?php echo $pfnm ?>" id="name3" size = "100%" placeholder = "First Name " onkeyup= "nm3vali()" required><span style ="color : red"id = "err3"></span><br/><br/> 
		<br/><br/>
		
		Gurdian's Last Name : <br/>
		<input type = "text" name = "glname" value = "<?php echo $plnm ?>" id="name4" size = "100%" placeholder = "Last Name"  onkeyup= "nm4vali()" required><span style ="color : red"id = "err4"></span><br/><br/> 
		<br/><br/>
		
		
		Gurdian's NIC:<br/> 		
		<input type = "text" id = "nic" value = "<?php echo $nic ?>" name = "gnic" size = "100%"  pattern = "[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]V" required><span style ="color : red" id = "nicerr"></span><br/><br/> 
		<br/><br/>
		
	
		Gurdian's Phone <br>
		Office/Home : <input type = "number" value = "<?php echo $ono ?>" name = "gotp" size = "100%" pattern = "[0-9]{10}" required>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
		Mobile :	<input type = "number" value = "<?php echo $mno ?>" name = "gmtp" size = "100%" pattern = "[0-9]{10}" required>
		<br/><br/><br/><br/><br/><br/>
		
		
			
		<center><input type = "submit" name = "submit" value = "Update" id = "sbt"  >&nbsp &nbsp  <input type = "reset" name = "Reset" value = "Reset"></center>
			
	</form>
	</fieldset>
	


	
</body>
</html>