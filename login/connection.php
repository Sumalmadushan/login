<?php

$servername = "localhost";
$username = "root";
$password= "root";
$db_name = "logindatabase"; 
$conn = new mysqli($servername, $username, $password, $db_name, 8000);

if($tonn->connect_error){
    die("Connection failed".$conn->connect_error);
}
echo " aaa";
?>