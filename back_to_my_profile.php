<?php
	session_start();

	$host = "localhost";
	$username = "root";
	$dbname = "disparity";
	$password = "";

	$idnya = $_SESSION['id'];
	$con = new mysqli($host, $username, $password, $dbname);
    $stmt = "SELECT * FROM usr WHERE email = '$idnya'";
    
    $result = mysqli_query($con, $stmt);
	$user = mysqli_fetch_array($result);

	$_SESSION['tag'] = $user['tag'];
	//echo "gagal";
?>