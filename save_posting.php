<?php
session_start();
$host = "localhost";
$username = "root";
$dbname = "disparity";
$password = "";

$varPost = $_POST['isiPost'];
$tag = $_SESSION['tag'];

$con = new mysqli($host, $username, $password, $dbname);

$queryPost = "INSERT INTO content (captionContent, picture, upVote, downVote, contentDate, contentTime, tag) VALUES ('$varPost', NULL, 0, 0, NULL, NULL, '$tag')";
        
mysqli_query($con, $queryPost);
//$con->exec($queryPost);
echo $queryPost;
?>
