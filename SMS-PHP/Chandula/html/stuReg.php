<!DOCTYPE html>
<html>
<head>
	<title>School Management System</title>
</head>
<?php 
	include 'library/header.php'
?>
<link rel="stylesheet" type="text/css" href="css/stuRegstyles.css">
<script type="text/javascript" src="js/chkValidation.js"></script>

<div class="main">
	<center><form id="mainf">
		<legend style="font-family: Candara; 
					   font-size: 40px;
					   font-weight: bolder;"><u>Student Registration Form</u></legend>
		<table width="900px">
			<tr>
				<td class="left">First Name</td>
				<td class="right"><input type="text" class="name" id="fname"></td>
			</tr>
			<tr>
				<td class="left">Last Name</td>
				<td class="right"><input type="text" class="name" id="lname"></td>
			</tr>
			<tr>
				<td class="left">Admission Number</td>
				<td class="right"><input type="text" class="name" id="adno"></td>
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
				<td class="left">Grade</td>
				<td class="right"><select>
						<option>Year 06</option>
						<option>Year 07</option>
						<option>Year 08</option>
						<option>Year 09</option>
						<option>Year 10</option>
						<option>Year 11</option>
				</select></td>
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
				<td class="left">Parent/Guardian's First Name</td>
				<td class="right"><input type="text" class="name"></td>
			</tr>
			<tr>
				<td class="left">Parent/Guardian's Last Name</td>
				<td class="right"><input type="text" class="name"></td>
			</tr>
			<tr>
				<td class="left">Parent/Guardian's NIC</td>
				<td class="right"><input type="text" id="nic"></td>
			</tr>
			<tr>
				<td class="left">Parent/Guardian's Phone No.</td>
				<td class="right"><input type="text" id="pNo"></td>
			</tr>
			<tr>
				<td class="left">Parent/Guardian's Email</td>
				<td class="right"><input type="email" id="pemail" class="emai"></td>
			</tr>
			<tr>
				<td class="left" colspan="2" style="font-size: 18px; text-align: center;">
					<input type="checkbox" id="fees" onclick="checkBtn()"><i>The student has paid his/her registration fees</i></td>
			</tr>
			<tr>
				<td colspan="2"><center><input type="submit" id="addS" value="Add Student" disabled=""></center></td>
			</tr>

		</table>
	</form><center>
	

</div>

</body>
</html>