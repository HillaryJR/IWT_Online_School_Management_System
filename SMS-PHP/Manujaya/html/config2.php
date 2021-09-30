<?php

	$servername = "localhost";
	$username = "root";
	$password  = "";
	$database = "schoolmanagementdb";
	//create connection_aborted
	
	$Subjectcode ="";
	$ClassId = "";
	$TeacherId = "";
	$Subjectname="";
	
	mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	
	try{	//Executes the code within try
		$connect = mysqli_connect($servername, $username, $password, $database);
	} catch (Exception $ex){	//If Code within try meets an exception code within catch will run
		echo "<script>alert('Error')</script>";
	}
	
	function getPosts()
	{
		$posts = array();
		$posts[0] = $_POST['Subjectcode'];
		$posts[1] = $_POST['ClassId'];
		$posts[2] = $_POST['TeacherId'];
		$posts[3] = $_POST['Subjectname'];
		return $posts;
	}
	
	// Search
	
	if(isset($_POST['search'])) 
	{
		$data = getposts();
		
		$search_Query = "SELECT * FROM subject WHERE Subjectcode = '$data[0]'";
		
		$search_Result = mysqli_query($connect, $search_Query);
		
		if($search_Result)
		{
			 if(mysqli_num_rows($search_Result))
			 {
				 while($row = mysqli_fetch_array($search_Result))
				 {
					 $Subjectcode = $row['Subjectcode'];
					 $ClassId = $row['ClassId'];
					 $TeacherId = $row['TeacherId'];
					 $Subjectname = $row['Subjectname'];
				 }
			 }else{
				 echo "<script>alert('Entered ID Dosen't Exsist or ID Not Entered')</script>";
			 }
		}else{
			echo "<script>alert('Result Error')</script>";
		}
	}
	
	// Add/Insert
	
	if(isset($_POST['insert']))
	{
		$data = getPosts();
		$insert_Query = "INSERT INTO subject(Subjectcode, ClassId, TeacherId, Subjectname) VALUES ('$data[0]','$data[1]','$data[2]','$data[3]')";
		try{
			$insert_Result = mysqli_query($connect, $insert_Query);
			
			if($insert_Result)
			{
				if(mysqli_affected_rows($connect) > 0)
				{
					echo "<script>alert('Data Inserted')</script>";
				}else{
					echo "<script>alert('Data Not Inserted')</script>";
				}
			}
		}catch (Exception $ex){
			echo "<script>alert('Entered Data Already Exsist Or Data Field is Empty ')</script>" .$ex->getMessage();
		}
	}
	
	// Delete
	
	if(isset($_POST['delete']))
	{
		$data = getPosts();
		$delete_Query = "DELETE FROM subject WHERE Subjectcode = '$data[0]' ";
		try{
			$delete_Result = mysqli_query($connect, $delete_Query);
			
			if($delete_Result)
			{
				if(mysqli_affected_rows($connect) > 0)
				{
					echo "<script>alert('Data Deleted')</script>";
				}else{
					echo "<script>alert('Data Not Deleted')</script>";
				}
			}
		}catch (Exception $ex){
			echo "<script>alert('Error Delete')</script>" .$ex->getMessage();
		}
	}
	
	// Update
	
	if(isset($_POST['update']))
	{
		$data = getPosts();
		$update_Query = "UPDATE subject SET ClassId='$data[1]',`TeacherId`='$data[2]',`Subjectname`='$data[3]' WHERE Subjectcode='$data[0]'";
		try{
			$update_Result = mysqli_query($connect, $update_Query);
			
			if($update_Result)
			{
				if(mysqli_affected_rows($connect) > 0)
				{
					echo "<script>alert('Data Updated')</script>";
				}else{
					echo "<script>alert('Data Not Updated')</script>";
				}
			}
		}catch (Exception $ex){
			echo "<script>alert('Error Update')</script>" .$ex->getMessage();
		}
	}
?>	