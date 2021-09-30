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

		<header><center><label><em><u><h1>Assign new Class Teacher.</h1></center></u></em></label></header>
		<br/><br/>

<body>


		<?php 
			
				

		
			$recordId =$_GET['id'];
		
			$sql = "SELECT* FROM class WHERE ClassId = '$recordId' ";
					
			$result = $con -> query($sql);
			
			
			if($result->num_rows > 0){
				
				while($row = $result -> fetch_assoc()){
						
					$clzid = $row['ClassId'];
					$tid = $row['TeacherId'];
												
																										
				
				}				
			}else{				
				echo"No records!!!";				
			}
			
			
			
		
		?>
	<center>
		<div id = "content">
		<form method = "POST" action = "subEdit_c.php"><br/><br/>
	
		
		
		<h3>
		Class ID : <input type = "text" id = "classId" name = "classId" value ="<?php echo $clzid ?>" readonly>
					
					
				</select><br/><br/><br/><br/>
		
		Teacher ID : <span style ="color : red" id = "tiderr"></span> <br/>
		<input type = "text" id = "tid" name = "tid"  value = "<?php echo $tid ?>" size= "100%"   onkeyup = "tidval()" required> 		
		<br/><br/><br/><br/><br/>
		
		<input type = "submit" name = "submit" id = "submit" value = "Save changes"/> &nbsp &nbsp &nbsp &nbsp
		<input type = "reset" name = "rst" id = "rst" value = "Reset"/>
		</h3>
		</form>
		</div>
	</center>


</body>
</html>