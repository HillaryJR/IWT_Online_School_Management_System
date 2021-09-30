<?php
require 'config.php';

$id = $_POST['stid'];
$grade = $_POST['class'];
$maths  = $_POST['maths'];
$science = $_POST['science'];
$english  = $_POST['english'];
$term = "term1Mark";

if($grade=="10A" || $grade=="10B" || $grade=="10C" || $grade=="10D")
{
    $sql = "INSERT INTO studentmarks 
    (studentId,subCode,$term) VALUES('$id','SE10','$science'),
                                    ('$id','MA10','$maths'),
                                    ('$id','EN10','$english')";

}
if($grade=="09A" || $grade=="09B" || $grade=="09C" || $grade=="09D")
{
    $sql = "INSERT INTO studentmarks 
    (studentId,subCode,$term) VALUES('$id','SE09','$science'),
                                    ('$id','MA09','$maths'),
                                    ('$id','EN09','$english'),";
}
if($grade=="08A" || $grade=="08B" || $grade=="08C" || $grade=="09D")
{
    $sql = "INSERT INTO studentmarks 
    (studentId,subCode,$term) VALUES('$id','SE08','$science'),
                                    ('$id','MA08','$maths'),
                                    ('$id','EN08','$english'),";
}
if($grade=="07A" || $grade=="07B" || $grade=="07C" || $grade=="07D")
{
    $sql = "INSERT INTO studentmarks 
    (studentId,subCode,$term) VALUES('$id','SE07','$science'),
                                    ('$id','MA07','$maths'),
                                    ('$id','EN07','$english'),";
}
if($grade=="06A" || $grade=="06B" || $grade=="06C" || $grade=="06D")
{
    $sql = "INSERT INTO studentmarks 
    (studentId,subCode,$term) VALUES('$id','SE06','$science'),
                                    ('$id','MA06','$maths'),
                                    ('$id','EN06','$english'),";
}

if(mysqli_query($con,$sql))
{
    echo "Sucess";
}
else
{
    echo "not sucess";
}


?>