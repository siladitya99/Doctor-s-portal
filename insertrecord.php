<?php

include 'testphp.php';
$name = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['pass'];

$sql = "INSERT INTO user (Username,Email,Password)  
          VALUES('$name','$email','$pass')"; 
    if (mysqli_query($conn, $sql)) 
{ 
    echo "Records inserted successfully."; 
} 
else
{ 
    echo "ERROR: Could not able to execute $sql. "
        .mysqli_error($conn); 
} 
  
mysqli_close($conn); 



?>