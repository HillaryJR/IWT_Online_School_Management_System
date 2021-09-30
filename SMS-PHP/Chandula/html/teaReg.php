
<html>
<head>
	<title>Teacher Registration Form.</title>
			
		<link rel="stylesheet" type="text/css" href="css/teacherRegstyles.css">
		<script type="text/javascript" src="javascript/checkbox.js"></script>
</head>

<body>
		
		<ul type = "disc" class = "topnav" id = "topnav">
			    <li><a href = "home.html" target = "_blank" >Home</a></li>
				<li><a href = "../Manujaya/html/event.html" target = "_blank">Events</a></li>
				<li><a href = "../Nadun/HTML/ContactUs.html" target = "_blank"> Contact Us</a></li>
				<li><a href = "../Nadun/HTML/AboutUs.html" target = "_blank">About Us</a></li>	
		
		</ul>
	
<div class="main">
	<center><form id="mainf">
		<legend style="font-family: Candara; 
					   font-size: 40px;
					   font-weight: bolder;"><u>Teacher Registration Form</u></legend>
		<table width="900px" height="600px
		">
			<tr>
				<td class="left">First Name</td>
				<td class="right"><input type="text" class="name" id="fname"></td>
			</tr>
			<tr>
				<td class="left">Last Name</td>
				<td class="right"><input type="text" class="name" id="lname"></td>
			</tr>
			<tr>
				<td class="left">NIC Number</td>
				<td class="right"><input type="text" id="nic"></td>
			</tr>
			<tr>
				<td class="left">Date of Birth</td>
				<td class="right"><input type="date" id="dob"></td>
			</tr>
			<tr>
				<td class="left">Gender</td>
				<td class="right" id="gen"><input type="radio" name="gender">Male<br />
					<input type="radio" name="gender">Female</td>
			</tr>
			<tr>
				<td class="left">Email</td>
				<td class="right"><input type="email" id="email" class="emai"></td>
			</tr>
			<tr>
				<td class="left">Address</td>
				<td class="right"><textarea></textarea></td>
			</tr>
			<tr>
				<td class="left">Additional Qualifications</td>
				<td class="right"><input type="text" class="name" id="q1"><br>
					<input type="text" class="name" id="q2"><br>
					<input type="text" class="name" id="q3">
				</td>
			</tr>
			<tr>
				<td colspan="2" id="button"><center><input type="submit" id="addS" value="Add Teacher" disabled=""></center></td>
			</tr>

		</table>
	</form><center>
	

</div>

</body>
</html>