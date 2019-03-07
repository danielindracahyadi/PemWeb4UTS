<?php
	session_start();

	$host = "localhost";
	$username = "root";
	$dbname = "disparity";
	$password = "";
	$dict = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$res = "";
	for($i=0; $i<8;$i++){
		$res .= $dict[rand(0,strlen($dict)-1)];
	}
	$tag = "";
	for($i=0; $i<5;$i++){
		$tag .= $dict[rand(0,strlen($dict)-1)];
	}
		$firstName = $_POST['fnameReg'];
		$lastName = $_POST['lnameReg'];
        $email = $_POST['emailReg'];
        $pass = $_POST['pswReg'];
        $date = $_POST['bdayReg'];
        $gender = $_POST['genderReg'];
        $hash = $pass . $res;
    	$hash = md5($hash);

        $con = new mysqli($host, $username, $password, $dbname);
        $queryAdd = "INSERT INTO usr (email, passUser, tag, profilePicture, salt, firstName, lastName, birthDate, gender) VALUES ('$email', '$hash', '$tag', NULL, '$res', '$firstName', '$lastName', '$date', '$gender')";
        
        mysqli_query($con, $queryAdd);
        

    	$_SESSION['id'] = $_POST['emailReg'];
		echo $queryAdd;
?>