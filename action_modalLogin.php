<?php
	session_start();

	$host = "localhost";
	$username = "root";
	$dbname = "disparity";
	$password = "";

	if ( ! empty( $_POST ) ) {
	    if ( isset( $_POST['email'] ) && isset( $_POST['psw'] ) ) {
	        $userCek = $_POST['email'];
	        $passCek = $_POST['psw'];
	        $con = new mysqli($host, $username, $password, $dbname);
	        $stmt = "SELECT * FROM usr WHERE email = '$userCek'";
	        
	        $result = mysqli_query($con, $stmt);
	    	$user = mysqli_fetch_array($result);
	    	$hash = $passCek . $user['salt'];

	    	$hash = md5($hash);
	    	//echo "gagal";
	    	if ( $hash == $user['passUser'] ) {
	    		$_SESSION['id'] = $_POST['email'];
	    	} else {
	    		echo "gagal";
	    	}
	    }
	}
	
?>