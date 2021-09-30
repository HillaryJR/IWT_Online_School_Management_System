<!DOCTYPE html>
<html>
<head>
	<title>Edit Student Marks</title>
	<meta charset = "utf-8">
	<meta name ="viewport" content = "width=device-width, initial-scale=1">
	<link rel = "stylesheet" href = "../css/auCss.css">
	<link rel="stylesheet" type="text/css" href="../css/editStu_2.css">
	<script type="text/javascript" src="../JS/calculations.js"></script>
	
</head>
<body>
	<header>		
		<h1 style="font-family: Candara;"><center>Govt.Science College Matale</center></h1>
			
	</header>
		
<hr/>
	
	<center><div id="main">
		<table id="mainT" border="1">
			<tr>
				<th>Subject</th>
				<th>Old Mark</th>
				<th colspan="2">New Mark</th>
			</tr>
			<tr>
				<td>Maths</td>
				<td id="s1">79</td>
				<td class="le"><input type="number" id="m1"></td> 
				<td class="ri"><button id="btn1" onclick="vMark()">Alter</button></td>
			</tr>
			<tr>
				<td>English</td>
				<td id="s2">80</td>
				<td class="le"><input type="number" id="m2"></td>
				<td class="ri"><button id="btn2" onclick="Mark1()">Alter</button></td>
			</tr>
			<tr>
				<td>Science</td>
				<td id="s3">65</td>
				<td class="le"><input type="number" id="m3"></td>
				<td class="ri"><button id="btn3" onclick="Mark2()">Alter</button></td>
			</tr>
			<tr>
				<td>Sinhala</td>
				<td id="s4">70</td>
				<td class="le"><input type="number" id="m4"></td>
				<td class="ri"><button id="btn4" onclick="Mark3()">Alter</button></td>
			</tr>
			<tr>
				<td>History</td>
				<td id="s5">65</td>
				<td class="le"><input type="number" id="m5"></td>
				<td class="ri"><button id="btn5" onclick="Mark4()">Alter</button></td>
			</tr>
			<tr>
				<td>Aesthetics</td>
				<td id="s6">85</td>
				<td class="le"><input type="number" id="m6"></td>
				<td class="ri"><button id="btn6" onclick="Mark5()">Alter</button></td>
			</tr>
			<tr>
				<td>Geography</td>
				<td id="s7">65</td>
				<td class="le"><input type="number" id="m7"></td>
				<td class="ri"><button id="btn7" onclick="Mark6()">Alter</button></td>
			</tr>
			<tr>
				<td>Commerce</td>
				<td id="s8">65</td>
				<td class="le"><input type="number" id="m8"></td>
				<td class="ri"><button id="btn8" onclick="Mark7()">Alter</button></td>
			</tr>
			<tr>
				<td>IT</td>
				<td id="s9">65</td>
				<td class="le"><input type="number" id="m9"></td>
				<td class="ri"><button id="btn9" onclick="Mark8()">Alter</button></td>
			</tr>
			<tr>
				<td>Health</td>
				<td id="s10">65</td>
				<td class="le"><input type="number" id="m10"></td>
				<td class="ri"><button id="btn10" onclick="Mark9()">Alter</button></td>
			</tr>
		</table>

		<p id="res"></p>

	</div></center>

</body>
</html>