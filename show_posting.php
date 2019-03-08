<?php
//session_start();

$host = "localhost";
$username = "root";
$dbname = "disparity";
$password = "";

$con = new mysqli($host, $username, $password, $dbname);
$result = mysqli_query($con, $stmt);
$user = mysqli_fetch_array($result);

$queryPribadi = "SELECT * from usr";


$queryContent = "SELECT * FROM content";
$result = $con->query($queryContent);
$count = 1;
foreach ($result as $row) {


?>