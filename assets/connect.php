<?php
$servername="mysql-pawelj.alwaysdata.net";
$username="pawelj";
$password="Jachimowski0719";
$database="pawelj_baza";
$conn=new mysqli($servername,$username,$password,$database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
