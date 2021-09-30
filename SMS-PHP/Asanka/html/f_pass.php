<?php 
	require '../../extra/html/config.php';

	session_start();

	$email = $_POST['email'];
	$id = $_POST['uname'];

	$_SESSION['uid'] = $id;

	$sql = "SELECT Email
			FROM student
			WHERE Email = '$email' AND StudentId = '$id'";

	$sql2 = "SELECT Email
			FROM teacher
			WHERE Email = '$email' AND TeacherId = '$id'";

	$res = $con->query($sql);
	$res1 = $con->query($sql2);

	if($res -> num_rows > 0)
	{
		header("Location:retry1.php");
	}
	/*else
	{
		header("Location:retry.php?de=f");
	}*/
	else if($res1 -> num_rows > 0)
	{
		header("Location:retry1.php");
	}
	else
	{
		session_destroy();
		header("Location:retry.php?de=f");
	}
	

?>