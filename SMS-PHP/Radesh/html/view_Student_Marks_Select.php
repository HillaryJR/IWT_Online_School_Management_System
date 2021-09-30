<?php
	require '../../extra/html/config.php';
	session_start();
	$id = $_SESSION['uname'];

?>
<!DOCTYPE html>
<html>
<head>
	
		<link rel = "stylesheet" href = "../css/final.css">
	<link rel = "stylesheet" href = "/css/projectstyles.css">

	<style>
			table td{width : 400px;}
	</style>
	<script>
	
	</script>
	<style>
	#div1{
 background-color: lightgery;
 background-image : url("images/background9.jpg");
 background-size : cover;
 background-attachment : fixed;
 background-position : center;
  width: 1000px;
  border: 15px solid #002080;
  padding: 100px 30px	;
  margin: 20px;
}

	</style>
</head>

<body>
	<header>
	
		
		
		
	</header>
<?php
echo "<center><h1 style='color: rgb(195, 167, 134);
						font-size:35px;
						color : white;
						background:#13083a9d;
						border:black solid;'>
	Student Marks</h1></center>";
	
?>
	<Marquee style = "color : white;font-size:25px;">Govt.Science College Matale</Marquee>
	<hr/>	

						
			
			<center>
			<div id="div1" class =  "dropdown">
			<!--<table style="color: rgb(195, 167, 134);
						font-size:25px;
						color:white;
						background:#13083a9d;
						border:black solid;
						/*width : 200px"
						border = "1">-->
						<center>
						<form method = "post" action="view_Student_Marks.php">
							
								<select name="marks" class="dropbtn">
							<div class="dropdown-content">
									<option class="dropdown-content" value="term1Mark">Term 1</option>
									<option class="dropdown-content" value="term2Mark">Term 2</option>
									<option class="dropdown-content" value="term3Mark">Term 3</option>
							</div>		
								</select>
							
								<br><br><br>
							<a href = "view_Student_Marks.php?id=$id"><button class="button button1" type = 'submit'>View Marks</button></a>									

						</form>
						</center>
							
			</div>
			</center>
	
	
</body>
</html>