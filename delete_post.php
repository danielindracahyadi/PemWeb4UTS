<?php
$host = "localhost";
$username = "root";
$dbname = "disparity";
$password = "";

$varContentId = $_POST['isiContentId'];

$con = new mysqli($host, $username, $password, $dbname);

$queryDelete = "DELETE FROM content WHERE contentId = '$varContentId'";
$queryDeleteComment = "DELETE FROM comment WHERE contentId= '$varContentId'";
        
mysqli_query($con, $queryDelete);
mysqli_query($con, $queryDeleteComment);

echo $queryDelete;
?>
