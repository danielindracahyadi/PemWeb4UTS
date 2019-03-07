<?php
	session_start();

	$host = "localhost";
	$username = "root";
	$dbname = "mahasiswaDB";
	$password = "";

	if ( ! empty( $_POST ) ) {
	    if ( isset( $_POST['inEmail'] ) && isset( $_POST['inPass'] ) ) {
	        $emailCek = $_POST['inEmail'];
	        $passCek = $_POST['inPass'];
	        $con = new mysqli($host, $username, $password, $dbname);
	        $stmt = "SELECT * FROM user WHERE email = '$emailCek'";

	        $result = mysqli_query($con, $stmt);
	    	$user = mysqli_fetch_array($result);
	    	mysqli_close($con);
	    	$hash = $passCek . $user['salt'];
	    	$hash = md5($hash);
	    	//echo $user['pass'];
	    	if ( $hash == $user['pass'] ) {
	    		$_SESSION['id'] = $_POST['inEmail'];
	    	} else {
	    		echo "gagal";
	    	}
	    }
	}
	
?>