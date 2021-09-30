<!DOCTYPE html>
<html>
<head>
	<title>Edit Student Marks</title>
	<meta charset = "utf-8">
	<meta name ="viewport" content = "width=device-width, initial-scale=1">
	<link rel = "stylesheet" href = "../css/auCss.css">
	<link rel="stylesheet" type="text/css" href="../css/editStudent_1.css">
	<script type="text/javascript" src="../JS/chkValidation.js"></script>
	
</head>
<body>
	<header>		
		<h1 style="font-family: Candara;  color : white"><center>Govt.Science College Matale.</center></h1>
		
	</header>
		
<hr/>
	

	<center><div id="main">
		<table border="1" id="mainT">
			<tr>
				<th colspan="2">Edit marks of student :</th>
			</tr>
			<tr>
				<td id="ent">Enter student ID</td>
				<td id="te"><input type="text" id="sid"></td>
			</tr>
			<tr>
				<td colspan="2" id="sbt"><input type="submit" id="btn" value="Search" onclick="checkAcc()"></td>
			</tr>
			<tr>
				<td colspan="2"><p id="res"></p></td>
			</tr>
		</table>

	</div></center>
</body>
</html>