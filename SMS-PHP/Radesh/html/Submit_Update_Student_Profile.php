<?php
	
	require '../../extra/html/config.php';
	
	$StudentIdS = $_POST["StudentId"];
	$fnameS = $_POST["fname"];
	$lnameS = $_POST["lname"];
	$EmailS = $_POST["Email"];
	$passwordS = $_POST["password"];
	$DOBS = $_POST["DOB"];
	$GenderS = $_POST["Gender"];
	
	$sql = "UPDATE student SET
							
							fname = '$fnameS',
							lname = '$lnameS',
							Email = '$EmailS',
							password = '$passwordS',
							DOB = '$DOBS',
							Gender = '$GenderS'
							WHERE StudentId = '$StudentIdS'";
							
	if(mysqli_query($con,$sql))
	{
		echo "<script>alert('Records updated successfully!!!')</script>";
		header("location:view_Profile_Student.php");
	}
	else
	{
		echo "<script>alert('error in updating the record!!!')</script>";
	}
	mysqli_close($con);
	
	
?>

