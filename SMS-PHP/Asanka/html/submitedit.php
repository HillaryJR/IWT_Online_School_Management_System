<?php
    require '../../extra/html/config.php';

	$id =$_POST['id'] ;
    $fname =$_POST['fname'] ;
    $lname =$_POST['lname'] ;
    $nic =  $_POST['nic'] ;
    $email =$_POST['email'] ;
    $pno =$_POST['num'] ; 

    $sql = "UPDATE teacher SET email='$email', lname='$lname', phoneNum='$pno' WHERE teacherId='$id'";

    if(mysqli_query($con,$sql))
    {
        header("Location:TeacherProfile.php");
    }
    else
    {
        echo "error";
    }


?>