<!DOCTYPE html>
<?php
require "config2.php";
?>
<html>
	<head>
		<Title>Subject Code Assign</Title>

<link rel="stylesheet" href="../src/addsub2.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
		
	</head>
<body>
		<fieldset>
			<center>
	
				<img src="../img/govt.png" height="100px" width="100px;" />
		
				<form name="fop" class="form" action="subcode.php" method="post">
		
					<p>Enter Subject Code</p>
						<input type="text" name="Subjectcode" placeholder="Code" value="<?php echo $Subjectcode;?>"><br>
				
					<p>Enter Class ID</p>
						<input type="text" name="ClassId" placeholder="Class ID" value="<?php echo $ClassId;?>"><br>
				
					<p>Enter Teacher ID</p>	
						<input type="text" name="TeacherId" placeholder="Teacher ID" value="<?php echo $TeacherId;?>"><br>
				
					<p>Enter Subject Name</p>	
						<input type="text" name="Subjectname" placeholder="Subject" value="<?php echo $Subjectname;?>"><br>
				
							<div>
								<input type="submit" name="insert" Value="Add" id="b1">
								<input type="submit" name="update" Value="Update" id="b1">
								<input type="submit" name="delete" Value="Delete" id="b1">
								<input type="submit" name="search" Value="Find" id="b1">
							</div>
				</form>
				<a href = "retrive.php"><button id="b1" style="width: 150px;">View Assigned Subjects</button></a>
			</center>
		</fieldset>
</body>
</html>