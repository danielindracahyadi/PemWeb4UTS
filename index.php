<?php 
	session_start();
 	require 'awal.php';
	if(isset($_SESSION['id'])){ 
		readfile('layout_disparity.php');
	}else{ 
		readfile('login.php');
	}
?>	