<?php

$sname="localhost";
$user="root";
$pass="";
$db_name="oms";

$conn=mysqli_connect($sname,$user,$pass,$db_name);

if($conn) {
	echo "success";
}
else{
	die("Error".mysqli_connect_error());
}

?>