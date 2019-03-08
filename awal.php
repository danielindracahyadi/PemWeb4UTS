<?php 
$host = "localhost";
$username = "root";
$dbname = "disparity";
$password = "";

$con = new PDO("mysql:host=$host",$username,$password);
$con->query("CREATE DATABASE DISPARITY");

$con = new PDO("mysql:host=$host;dbname=$dbname;",$username,$password);

$sqlCreate = "
CREATE TABLE usr (
    email VARCHAR(255) PRIMARY KEY NOT NULL,
    passUser VARCHAR(255) NOT NULL,
    tag VARCHAR(5), 
    profilePicture VARCHAR(100),
    salt varchar(8) NOT NULL,
    firstName VARCHAR(20) NOT NULL,
    lastName VARCHAR(20) NOT NULL,
    birthDate VARCHAR(20) NOT NULL,
    gender VARCHAR(10) NOT NULL
)";

$con->exec($sqlCreate);

$sqlCreate2 = "CREATE TABLE content(
	contentId int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	captionContent VARCHAR(350),
	picture VARCHAR(100),
	upVote int(10),
	downVote int(10),
	contentDate DATE,
	contentTime TIME,
    tag VARCHAR(5)
)";
$con->exec($sqlCreate2);

$sqlCreate3 = "CREATE TABLE comment (
	commentId int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	commentText VARCHAR(255),
	tag varchar(5),
	commentDate DATE,
	commentTime TIME,
	contentId int(6)
)";
$con->exec($sqlCreate3);

?>