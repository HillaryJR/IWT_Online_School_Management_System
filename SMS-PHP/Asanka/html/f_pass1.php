<?php
	require '../../extra/html/config.php';
		session_start();

		$id = $_SESSION['uid'];
		$pass1 = $_POST['pass1'];
		$pass2 = $_POST['pass2'];
		

		if($pass1 === $pass2)
		{
			if(preg_match("/ST/", $id))
			{
				$sql = "UPDATE student
						SET password = '$pass2'
						WHERE StudentId = '$id'";
				if(mysqli_query($con,$sql))
				{
					header("Location:login.php?pr=s");
				}
			}
			else if(preg_match("/TE/", $id))
			{
				$sql1 = "UPDATE teacher
						SET password = '$pass2'
						WHERE TeacherId = '$id'";
				if(mysqli_query($con,$sql1))
				{
					header("Location:login.php?pr=a");
				}
			}
			else
			{
				header("Location:login.php?pr=f");
			}
		}
		else
		{
			header("Location:retry1.php");
		}

		/*if(preg_match("/ST/", $id) && $pass1 == $pass2)
		{
			$sql = "UPDATE student
					SET password = '$pass1'
					WHERE StudentId = '$id'";

			if(mysqli_query($con,$sql))
			{
				header("Location:login.php?pr=s");
			}
			else
			{
				header("Location:login.php?pr=f");
			}
		}
		/*else
			{
				header("Location:login.php?pr=f");
			}
		*/

		/*else if(preg_match("/TE/", $id) && $pass1 == $pass2)
		{
			$sql1 = "UPDATE teacher
					SET password = '$pass1'
					WHERE TeacherId = '$id'";

			if(mysqli_query($con,$sql1))
			{
				header("Location:login.php?pr=s");
			}
			else
			{
				header("Location:login.php?pr=f");
			}
		}
		else
			{
				header("Location:login.php?pr=f");
			}*/

?>