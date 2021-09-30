<?php
	require 'config.php';

	$id = $_POST['eventId'];
	$name = $_POST['ename'];
	$desc = $_POST['description'];

	$sql = "UPDATE events
			SET eventName = '$name',
				eventDescription = '$desc'
			WHERE eventId = '$id'";

	if($con->query($sql)===true)
	{
		header("Location:viewEvents.php?msg=s");
	}
	else{
		header("Location:viewEvents.php?msg=f");
	}

	mysqli_close($con);


?>