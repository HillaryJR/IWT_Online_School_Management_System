<?php
require '../../extra/html/config.php';
session_start();

$id=$_SESSION['sid'];
$term=$_SESSION['term'];

$subcode=$_SESSION['subcode'];
$j = $_SESSION['i'];

for($i=0;$i<$j;$i++)
{

    $mark=$_POST[$i];
    $scode=$subcode[$i];
    $sql = "INSERT INTO studentmarks (studentId,subCode,term1Mark) VALUES ('$id','$scode',$mark) ";
    if(mysqli_query($con,$sql))
    {
        header("Location:beforeterm1.php");
    }
    else
    {
       header("Location:errorterm1.php?msg=Cannot Add Mark!!!!!");
    }
}


?>