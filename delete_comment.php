<?php
$host = "localhost";
$username = "root";
$dbname = "disparity";
$password = "";

$varCommenttId = $_POST['isiCommentId'];

$con = new mysqli($host, $username, $password, $dbname);

$queryDeleteComment = "DELETE FROM comment WHERE commentId= '$varCommenttId'";
        
mysqli_query($con, $queryDeleteComment);

echo $queryDeleteComment;
?>
