<?php
require 'config.php';

$id = $_POST['stid'];
$grade = $_POST['class'];
$maths  = $_POST['maths'];
$science = $_POST['science'];
$english  = $_POST['english'];
$term = "term3Mark";

if($grade=="10A" || $grade=="10B" || $grade=="10C" || $grade=="10D")
{
    $sql1 = "UPDATE studentmarks SET $term='$maths' WHERE studentId='$id' AND subCode='MA10'"; 
    $sql2 = "UPDATE studentmarks SET $term='$science' WHERE studentId='$id' AND subCode='SE10'"; 
    $sql3 = "UPDATE studentmarks SET $term='$english' WHERE studentId='$id' AND subCode='EN10'"; 
    
}
if($grade=="09A" || $grade=="09B" || $grade=="09C" || $grade=="09D")
{
    $sql1 = "UPDATE studentmarks SET $term='$maths' WHERE studentId='$id' AND subCode='MA09'"; 
    $sql2 = "UPDATE studentmarks SET $term='$science' WHERE studentId='$id' AND subCode='SE09'"; 
    $sql3 = "UPDATE studentmarks SET $term='$english' WHERE studentId='$id' AND subCode='EN09'"; 
}
if($grade=="08A" || $grade=="08B" || $grade=="08C" || $grade=="09D")
{
    $sql1 = "UPDATE studentmarks SET $term='$maths' WHERE studentId='$id' AND subCode='MA08'"; 
    $sql2 = "UPDATE studentmarks SET $term='$science' WHERE studentId='$id' AND subCode='SE08'"; 
    $sql3 = "UPDATE studentmarks SET $term='$english' WHERE studentId='$id' AND subCode='EN08'"; 
}
if($grade=="07A" || $grade=="07B" || $grade=="07C" || $grade=="07D")
{
    $sql1 = "UPDATE studentmarks SET $term='$maths' WHERE studentId='$id' AND subCode='MA07'"; 
    $sql2 = "UPDATE studentmarks SET $term='$science' WHERE studentId='$id' AND subCode='SE07'"; 
    $sql3 = "UPDATE studentmarks SET $term='$english' WHERE studentId='$id' AND subCode='EN07'"; 
}
if($grade=="06A" || $grade=="06B" || $grade=="06C" || $grade=="06D")
{  $sql1 = "UPDATE studentmarks SET $term='$maths' WHERE studentId='$id' AND subCode='MA06'"; 
   $sql2 = "UPDATE studentmarks SET $term='$science' WHERE studentId='$id' AND subCode='SE06'"; 
   $sql3 = "UPDATE studentmarks SET $term='$english' WHERE studentId='$id' AND subCode='EN06'"; 
}

if(mysqli_query($con,$sql1))
{
   echo "mark1 sucessfully added<br>";
}
if(mysqli_query($con,$sql2))
{
    echo "mark2 sucessfully added<br>";
}
if(mysqli_query($con,$sql3))
{
    echo "mark2 sucessfully added<br>";
    header("Location:term3.php");
}
else
{
    echo "Oops!!cannot insert mark";
}


?>