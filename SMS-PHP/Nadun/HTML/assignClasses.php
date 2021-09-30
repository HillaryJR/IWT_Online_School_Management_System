<?php 

	require('../../extra/html/config.php');
	session_start();

?>



<html>
<head>
	<link rel = "stylesheet" href = "../CSS/Background.css"></link>
	<script>
		function cidval(){
			var id = document.getElementById("clzid").value;
			var pat = /^[ST0-9]{6}$/;
			var msg;
			if(pat.test(id)){
				msg = "";
			}else{
				msg = "*ID must be 'ST<4 numbers>'. Eg: ST0001";
			}
			 document.getElementById("clziderr").innerText= " " +msg+ " ";
		}
	
		function tidval(){
			var id = document.getElementById("tid").value;
			var pat = /^[TE0-9]{6}$/;
			var msg;
			if(pat.test(id)){
				msg = "";
			}else{
				msg = "*ID must be 'TE<4 numbers>'. Eg: TE0001";
			}
			 document.getElementById("tiderr").innerText= " " +msg+ " ";
		}
	
	</script>
</head>
	
	
	<header><center><label><em><u><h1>Assign Classes and Class Teachers.</h1></center></u></em></label></header>
	<br/><br/>

<body>

<a href = "retreive_c.php"><button style = "float : right">View Registered classes.</button></a>

	<center>
		<div id = "content">
		<form method = "POST" action = "addedClasses.php"><br/><br/>
	
		<?php 
			if(isset($_GET["msg"])){
				$res = $_GET["msg"];
				if($res == 't'){
					echo"<h2 style = 'color:green; font-family:Candara;font-size:30px;'> Details added to the class table successfully.Enter next class.</h2>";
				}else{
					echo"<h2 style = 'color:green; font-family:Candara;font-size:30px;'> Oops!!! Something went wrong!!!</h2>";
			    }
			}
			
		
		?>	
		
		
		<h3>
		Class ID : <select id = "classId" name = "classId">
					
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
					
					
				</select><br/><br/><br/><br/>
		
		Teacher ID : <span style ="color : red" id = "tiderr"></span> <br/>
		<input type = "text" id = "tid" name = "tid"  pattern = "TE[0-9][0-9][0-9][0-9]" size= "100%"   onkeyup = "tidval()" required> 		
		<br/><br/><br/><br/><br/>
		
		<input type = "submit" name = "submit" id = "submit" value = "Add class"/> &nbsp &nbsp &nbsp &nbsp
		<input type = "reset" name = "rst" id = "rst" value = "Reset"/>
		</h3>
		</form>
		</div>
	</center>


</body>
</html>