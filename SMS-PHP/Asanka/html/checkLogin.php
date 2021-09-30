<?php 
	require '../../extra/html/config.php';

	session_start();

	$username = $_POST["uname"];
	$password = $_POST["pass"];

	if(preg_match("/ST/", $username))
	{
		$sql1 = "SELECT StudentId,password
				 FROM student
				 WHERE StudentId = '$username' AND password = '$password'";

		$res1 = $con->query($sql1);

		if($res1 -> num_rows > 0) 
		{
			while ($row = $res1->fetch_assoc()) 
			{
				if ($username==$row['StudentId'] && $password==$row['password']) 
				{
					$_SESSION['uname']=$row['StudentId'];

					if(isset($_SESSION['uname']))
					{
						header("Location:../../Radesh/html/student.php");
					}  
				}
				else
				{
					session_destroy();

					header("Location:login.php?msg=f");
				}
			}
		} 
		else
		{
			session_destroy();

			header("Location:login.php?msg=f");
		}
	}
	else if(preg_match("/TE/", $username))
	{
		$sql2 = "SELECT TeacherId,password 
				 FROM teacher
				 WHERE TeacherId = '$username' AND password = '$password'";

		$res2 = $con->query($sql2);

		if ($res2 -> num_rows > 0)
	    {
			while ($row = $res2->fetch_assoc())
			{
				if($username==$row['TeacherId'] && $password==$row['password'])
				{
					$_SESSION['uname']=$row['TeacherId'];

					if(isset($_SESSION['uname']))
					{
						header("Location:t_inter.php");
					}
				}
				else
				{
					session_destroy();

					header("Location:login.php?msg=f");
				}
			}
		}
		else
		{
			session_destroy();

			header("Location:login.php?msg=f");
		}
	}
	else if(preg_match("/Eadmin/", $username) && $password=="e123")
	{
		$_SESSION['uname']="Eadmin";

		if(isset($_SESSION['uname']))
		{
			header("Location:../../extra/html/evtAdmin.php");
		}
	}
	else if(preg_match("/Radmin/", $username) && $password=="r123")
	{
		$_SESSION['uname']="Radmin";

		if(isset($_SESSION['uname']))
		{
			header("Location:../../extra/html/regAdmin.php");
		}
	}
	else if(preg_match("/Sadmin/", $username) && $password=="s123")
	{
		$_SESSION['uname']="Radmin";

		if(isset($_SESSION['uname']))
		{
			header("Location:../../extra/html/subAdmin.php");
		}
	}
	else
	{
		session_destroy();

		header("Location:login.php?msg=f");
	}
 ?>