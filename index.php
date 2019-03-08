<?php 
	session_start();
 	require 'awal.php';
	if(isset($_SESSION['id'])){ 
		include('layout_disparity.php');
	}else{ 
		include('login.php');
	}
?>	