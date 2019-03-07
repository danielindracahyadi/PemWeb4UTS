<?php
	session_start();

	$host = "localhost";
	$username = "root";
	$dbname = "mahasiswaDB";
	$password = "";
	$dict = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$res = "";
	for($i=0; $i<8;$i++){
		$res .= $dict[rand(0,strlen($dict)-1)];
	}

        $emailCek = $_POST['inEmailReg'];
        $passCek = $_POST['inPassReg'];
        $hash = $passCek . $res;
    	$hash = md5($hash);

        $con = new mysqli($host, $username, $password, $dbname);
        $queryAdd = "INSERT INTO user (email, pass, salt) VALUES ('$emailCek', '$hash', '$res')";
        echo $queryAdd;
        mysqli_query($con, $queryAdd);
        mysqli_close($con);

    	$_SESSION['id'] = $_POST['inEmailReg'];
	
?>