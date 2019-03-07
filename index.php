<?php 
	session_start();
	if(isset($_SESSION['id'])){ 
		require 'layout_disparity.php';
	}else{ 
		require 'login.php';  	
	}
?>