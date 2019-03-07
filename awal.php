<?php 
$host = "localhost";
$username = "root";
$dbname = "disparity";
$password = "";

$conn = new PDO("mysql:host=$host",$username,$password);
$conn->query("CREATE DATABASE DISPARITY");

$conn = new PDO("mysql:host=$host;dbname=$dbname;",$username,$password);

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

$conn->exec($sqlCreate);

$sqlCreate2 = "CREATE TABLE content(
	contentId VARCHAR(255) PRIMARY KEY NOT NULL,
	captionContent VARCHAR(350),
	picture VARCHAR(100),
	upVote VARCHAR(255),
	downVote VARCHAR(255),
	commentId INTEGER,
	contentDate DATE,
	contentTime TIME,
    tag INTEGER,
    username VARCHAR(255) NOT NULL
)";
$conn->exec($sqlCreate2);

$sqlCreate3 = "CREATE TABLE comment (
	commentId VARCHAR(255) PRIMARY KEY NOT NULL,
	commentText VARCHAR(255),
	tag INTEGER,
	commentDate DATE,
	commentTime TIME,
	contentId VARCHAR(255),
    username VARCHAR(255)
)";
$conn->exec($sqlCreate3);


?>