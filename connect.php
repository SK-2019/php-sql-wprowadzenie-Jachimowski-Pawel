<?php
$conn=new mysqli($_SERVER['pass'],$_SERVER['userpass'],$_SERVER['password'],$_SERVER['datapass']);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
}
?>
