<?php
session_start();
$host = "localhost";
$username = "root";
$dbname = "disparity";
$password = "";

$con = new mysqli($host, $username, $password, $dbname);

$varComment = $_POST['isiComment'];
$idnya = $_SESSION['id'];
$queryNama = "SELECT * FROM usr WHERE email='$idnya'";
$hasil = $con->query($queryNama);
echo $queryNama;
if(is_array($hasil) || is_object($hasil)){
	foreach ($hasil as $key1){
		$tag = $key1['tag'];

		$komenId = $_POST['idKonten'];

		$queryComment = "INSERT INTO comment (commentText, tag, commentDate, commentTime, contentId) VALUES ('$varComment','$tag', null, null, '$komenId')";
		        
		mysqli_query($con, $queryComment);
	}
}
?>
