<?php
	session_start();

	$host = "localhost";
	$username = "root";
	$dbname = "disparity";
	$password = "";

	$tagcek = $_POST['name_visit_profile'];
	
	$con = new mysqli($host, $username, $password, $dbname);
	$stmt = "SELECT * FROM usr WHERE tag = '$tagcek'";

	$result = mysqli_query($con, $stmt);
	$user = mysqli_fetch_array($result);
	
	$_SESSION['tag'] = $user['tag'];

	$tagnya = $_SESSION['tag'];

	// echo "<script type='text/javascript'>alert('$tagnya');</script>";

	include('layout_disparity.php');
?>