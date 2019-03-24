<?php
  	session_start();
	
	$host = "localhost";
	$username = "root";
	$dbname = "disparity";
	$password = "";

	$idnya = $_SESSION['id'];
	$con = new mysqli($host, $username, $password, $dbname);
    $stmtselect = "SELECT * FROM usr WHERE email = '$idnya'";
    
    
    $result = mysqli_query($con, $stmtselect);
	$user = mysqli_fetch_array($result);

	$_SESSION['tag'] = $user['tag'];

	$target_dir = "img/";
	$target_file = $target_dir . $user['tag'].".png";

	$tagnya = $_SESSION["tag"];
	$stmtupdate = "UPDATE usr SET profilePicture = '$target_file' where tag = '$tagnya'";
	$result = mysqli_query($con, $stmtupdate);

	if($_FILES["fileToUpload"]["tmp_name"] == null)
	{
		header("Location: index.php");
		$message = "wrong answer";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
	else
	{
		$uploadOk = 0;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		if ($uploadOk == 0) {
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
		        header("Location: index.php");
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
	}
	
?>