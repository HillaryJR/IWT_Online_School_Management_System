<?php
	require '../../extra/html/config.php';
	session_start();
	$id = $_SESSION['uname'];

?>
<!DOCTYPE html>
<html>
<head>
	
	<title>Edit_Profile_Student</title>
<link rel = "stylesheet" href = "../css/final.css">
	<style>
			table td{width : 400;}
	</style>
	<script>
		function fnmvali()
		{
			var name = document.getElementById("Fname").value;
			var letters = /^[A-Za-z]+$/
			var msg;
			if(name.match(letters))
			{
				msg = "";
			}
			else
			{
				msg = "*Enter letters only!!!";
			}
			document.getElementById("err1").innerText = " " + msg + " ";
		}
		
				function lnmvali()
		{
			var name = document.getElementById("Lname").value;
			var letters = /^[A-Za-z]+$/
			var msg;
			if(name.match(letters))
			{
				msg = "";
			}
			else
			{
				msg = "*Enter letters only!!!";
			}
			document.getElementById("err2").innerText = " " + msg + " ";
		}
	</script>
	<style>
	div{
 background-color: lightgrey;
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

	<hr/>	
	<?php

		$sql = "SELECT * FROM student WHERE StudentId='$id'";
		
		$result = $con -> query($sql);
		
		if($result -> num_rows > 0)
		{
			//take each row data to variable - according to id
			while($row = $result -> fetch_assoc())
			{
				$StudentId= $row['StudentId'];
				$fname = $row['fname'];
				$lname = $row['lname'];
				$Email = $row['Email'];
				$password = $row['password'];
				$DOB = $row['DOB'];
				$Gender = $row['Gender'];
				
				
				
			}
			
		}
		else
		{
			echo "no result";
		}
		
		?>
		
		
		<center>
		<div>
		<table style='color: rgb(195, 167, 134);
						font-size:25px;
						color:white;
						background:#13083a9d;
						border:black solid;'
						border = 1>
		<form method="POST" action="Submit_Update_Student_Profile.php">
		<!-- id="Fname" onkeyup = "fnmvali()" required><span style = "color : red" id = "err1-->
		<tr>
			<td><label>First Name</label></td>
			<td><input type="text" size = "50" name="fname"   value="<?php echo $fname ?>" id="Fname" onkeyup = "fnmvali()" required><span style = "color : red" id = "err1"></span></td>
		</tr>
		<tr>
			<td><label>Last Name </label></td>
			<td><input type='text'  size = "50" name="lname"   value="<?php echo $lname ?>" id="Lname" onkeyup = "lnmvali()" required><span style = "color : red" id = "err2"></span></td>
		</tr>
		<tr>	
			<td><label>Email</label></td>
			<td><input type='email'  size = "50" name="Email" value="<?php echo $Email ?>" ></td>
		</tr>	
		<tr>
			<td><label>password </label></td>
			<td><input type='text'  size = "50" name="password" value="<?php echo $password ?>" ></td>
		</tr>
		<tr>
			<td><label>Date Of Birth</label></td>
			<td><input type='date'  size = "50" name="DOB" value="<?php echo $DOB ?>" ></td>
		</tr>	
		<tr>	
			<td><label>Gender </label></td>
			<td>Male<input type = "radio" name = "Gender" value = "Male"<?php if($Gender == 'M') echo 'checked = checked';?>>
					Female<input type = "radio" name = "Gender" value = "Female"<?php if($Gender == 'F') echo 'checked = checked';?>>
			</td>
	 
		</tr>
		</div>
		<tr>
		<td><label>Student ID</label></td>
			<td><input type="text" name="StudentId" value="<?php echo $StudentId ?>" readonly></td>
			<br>
		</tr>
			</table>
			<br><br>
			<button class="button button1" type="submit">Update Profile</button>
			</form>
		</center>


	
	
</body>
</html>