<?php
session_start();
date_default_timezone_set('Asia/Kolkata');
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'lawyer';   
$con = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>