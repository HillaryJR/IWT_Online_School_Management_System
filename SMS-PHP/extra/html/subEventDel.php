<?php
	require 'config.php';

	$id = $_POST['eventId'];

	$sql = "DELETE FROM events
			WHERE eventId = '$id'" ;

	if($con -> query($sql)===true)
	{
		header("Location:viewEvents.php?msg1=s");
	}
	else
	{
		header("Location:viewEvents.php?msg1=f");
	}

	mysqli_close($con);
?>