
 <?php
	require 'config.php';

	$name = $_POST['ename'];
	$desc = $_POST['edesc'];

	$sql = "INSERT INTO events (eventId,eventName,eventDescription) 
			VALUES ('','$name','$desc')";

	if($con->query($sql)===true)
	{
		header("Location:addEvent.php?msg=s");
	}
	else{
		header("Location:addEvent.php?msg=f");
	}
	mysqli_close($con);


?>
