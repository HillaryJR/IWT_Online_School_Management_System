<?php 

	require('../../extra/html/config.php');
	session_start();

?>


<!DOCTYPE html>

<html>
<head>
	<title>Teacher Registration Form.</title>
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

<a href = "retreive_t.php"><button style = "float : right">View Registered Teachers.</button></a><br/><br/>	
	<fieldset>
	<form method = "POST" action = "addedtech.php" onsubmit = "return conpass() && passlen()">
		
		<?php 
			if(isset($_GET["msg"])){
				$res = $_GET["msg"];
				if($res == 't'){
					echo"<h2 style = 'color:green; font-family:Candara;font-size:30px;'> Details added to the Teacher table successfully.Enter next Teacher</h2>";
				}else{
					echo"<h2 style = 'color:green; font-family:Candara;font-size:30px;'> Oops!!! Something went wrong!!!</h2>";
			    }
			}
			
		
		?>
		
		First Name : <br/>
		<input type = "text" name = "tfname" id = "name1" size= "100%" placeholder = "First Name" onkeyup = "nm1vali(name1)" required>
		<span style ="color : red" id = "err1"></span>
		<br/><br/>
		
	
		Last Name : <br/>
		<input type = "text" name = "tlname" id = "name2" size= "100%" placeholder = "Last Name" onkeyup = "nm2vali(name2)" required>
		<span style ="color : red" id = "err2"></span>
		<br/><br/>
		
		Teacher ID : <span style ="color : red" id = "iderr"></span> <br/>
		<input type = "text" id = "tid" name = "tid"  pattern = "TE[0-9][0-9][0-9][0-9]" size= "100%"   onkeyup = "idval()" required> 		
		<br/><br/>
		
		
		
		NIC Number :<br/>
		<input type = "text" id = "nic" name = "tnic" size = "100%" pattern = "[0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9]V" required><span style ="color : red" id = "nicerr"></span> <br/>
		<br/><br/>
		
				
		Password :<br/>
		<input type = "password" name = "tpswd" id = "psw" size = "100%"><br/><br/>
		
					
		Re-enter Password :<br/>
		<input type = "password" name = "rtpswd" id = "rpsw"  size = "100%"><br/><br/>
		
		
		E-mail :<br/>
		<input type = "text" name = "temail" size = "100%" required>
		<br/><br/>
		
		Telephone Number :<br/>
		<input type = "number" name = "ttp" size = "100%" pattern = "[0-9]{10}" required >
		<br/><br/>
		
		
		<br/><br/>
		<big><em>Is the teacher has appropriate Qualifications ?</em></big> &nbsp &nbsp &nbsp  <input type = "checkbox" name = "check" id = "chk" onclick = "chkAgree()">
		<br/><br/><br/><br/>
			
		<center><input type = "submit" name = "submit" value = "Submit" id = "sbt"  disabled>&nbsp &nbsp &nbsp &nbsp <input type = "reset" name = "Reset" value = "Reset"></center>
			
	</form>
	</fieldset>
	
</body>
</html>