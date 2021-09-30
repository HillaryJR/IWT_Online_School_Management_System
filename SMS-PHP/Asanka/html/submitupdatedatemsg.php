<?php
    require '../../extra/html/config.php';

    session_start();  
                                                
    $sid = $_SESSION['sid'];

    $term = $_SESSION["term"];

    $subcode = $_SESSION['subcode'];

    $mark = $_POST["updamark"];

    $sql = "UPDATE studentmarks SET $term=$mark WHERE studentId='$sid' AND subCode='$subcode'";

    if(mysqli_query($con,$sql))
    {
        
       header("location:sucessfull.php");

    }
    else
    {
        echo "update not sucess";
    }




?>