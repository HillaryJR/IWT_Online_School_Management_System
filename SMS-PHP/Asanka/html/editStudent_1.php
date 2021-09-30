<!DOCTYPE html>
<html>
<head>
	<title>Edit Student Marks</title>
	<meta charset = "utf-8">
	<meta name ="viewport" content = "width=device-width, initial-scale=1">
	<link rel = "stylesheet" href = "../../chandula/css/auCss.css">
	<link rel="stylesheet" type="text/css" href="../../chandula/css/editStudent_1.css">
	<link  href="../css/stylesheet.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" >
	<script>
                function closewin()
                {
                    window.close('chooseterm.php');
                }

        </script>
	
</head>
<body>		

	
	<form method="post" action="EditAndDelete.php">
	
	<center>
	<div class="bog">
		<table  id="mainT" class="pro" >
			<tr>
				<th colspan="2">Edit marks of student </th>
			</tr>
			<tr>
				<td id="ent">Enter student ID</td>
				<td id="te"><input type="text" id="sid" name="sid" pattern="ST+[0-9][0-9][0-9][0-9]" requierd></td>
				</tr>
				<tr>
				<td id="ent">Choose Term</td>
                <td><select class="Term" name="term" style="margin-left:15px;">
				<option value="term1Mark">1st-Term</option>
                <option value='term2Mark'>2nd-Term</option>
                <option value='term3Mark'>3rd-Term</option>
                </select></td></tr>			
		</table><br>
		<td colspan="2" id="sbt"><input type="submit"  name='ddf' id="btn" value="Search" ></td>
		<td colspan="2" id="sbt"><input type="button"  name='ddf' id="btn" value="Close" onclick="closewin()" style="background:red" ></td>
	</div>
	</center>
	</form><br>
	
	
</body>
</html>
