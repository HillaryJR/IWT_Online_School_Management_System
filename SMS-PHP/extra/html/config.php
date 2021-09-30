<?php

$server="localhost";
$userName="root";
$spassword="";
$db="schoolmanagementdb";

$con= new mysqli($server,$userName,$spassword,$db);

if ($con->connect_error){
	die("Connection Failed".$con->connect_error);

}
else
{
	//echo "Connection successful";
}

?>