<?php
require '../../extra/html/config.php';
session_start();

$id=$_SESSION['sid'];
$term=$_SESSION['term'];

$subcode=$_SESSION['subcode'];
$subcode=$_SESSION['subcode'];
$j =  $_SESSION['i'];

for($i=0;$i<$j;$i++)
{

    $mark=$_POST[$i];
    $scode=$subcode[$i];
    $sql = "UPDATE studentmarks SET $term=$mark WHERE studentId='$id' AND subCode='$scode' ";
    if(mysqli_query($con,$sql))
    {
        header("Location:beforeterm2.php");
    }
    else
    {
        echo "ERROR!!Cannot add mark";
    }
}


?>