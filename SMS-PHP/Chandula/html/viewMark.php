<!DOCTYPE html>
<html>
	<head>

	<title>View Marks</title>
	
		
	<meta charset = "utf-8">
	<meta name ="viewport" content = "width=device-width, initial-scale=1">
	
	<link rel = "stylesheet" href = "../css/auCss.css">
	<link rel="stylesheet" type="text/css" href="../css/viewMarkStyles.css">
	<script type="text/javascript" src="../JS/calculations.js"></script>
	

	</head>
	
	<body>
	
		<header>
		
			<h1 style="font-family: Candara;"><center>Govt.Science College Matale.</center></h1>

			
		
		
		</header>
		
		<hr/>
		

		<script type="text/javascript">
		
		</script>

		<center><div id="main">
			<table border="1" id="markTable">
				<tr>
					<th class="le">Subject</th>
					<th class="ri">Marks</th>
				</tr>
				<tr>
					<td class="le">Maths</td>
					<td class="ri" id="d1">80</td>
				</tr>
				<tr>
					<td class="le">English</td>
					<td  class="ri"id="d2">75</td>
				</tr>
				<tr>
					<td class="le">Science</td>
					<td class="ri" id="d3">85</td>
				</tr>
				<tr>
					<td class="le">Sinhala</td>
					<td class="ri" id="d4">70</td>
				</tr>
				<tr>
					<td class="le">History</td>
					<td class="ri" id="d5">65</td>
				</tr>
				<tr>
					<td  class="le">Aesthetics</td>
					<td  class="ri" id="d6">80</td>
				</tr>
				<tr>
					<td class="le">Geography</td>
					<td class="ri" id="d7">70</td>
				</tr>
				<tr>
					<td class="le">Commerce</td>
					<td class="ri" id="d8">75</td>
				</tr>
				<tr>
					<td class="le">IT</td>
					<td class="ri" id="d9">50</td>
				</tr>
				<tr>
					<td class="le">Health</td>
					<td class="ri" id="d10">70</td>
				</tr>
				<tr style="border: none;">
					<td><button onclick="calcTotal()">Total</button></td>
					<td><button onclick="calcAvg()">Average</button></td>
				</tr>				

			</table>
			<div id="calC">
				<p id="tot"></p>
				<br />
				<p id="ave"></p>
				<br />

			</div>			


		</div></center>


	</body>
	</html>
		