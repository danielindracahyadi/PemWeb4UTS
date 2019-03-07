<?php 
session_start();
$_SESSION['header'] = "Students";

$host = "localhost";
$username = "root";
$dbname = "disparity";
$password = "";

$conn = new PDO("mysql:host=$host",$username,$password);
$conn->query("CREATE DATABASE DISPARITY");

$conn = new PDO("mysql:host=$host;dbname=$dbname;",$username,$password);

$sqlCreate = "
CREATE TABLE usr (
    username VARCHAR(255) PRIMARY KEY NOT NULL,
    passUser VARCHAR(255) NOT NULL,
    tag INTEGER, 
    email VARCHAR(255) NOT NULL,
    profilePicture VARCHAR(2000),
    salt varchar(8) NOT NULL
)";

$conn->exec($sqlCreate);

$sqlCreate2 = "CREATE TABLE content(
	contentId VARCHAR(255) PRIMARY KEY NOT NULL,
	captionContent VARCHAR(1000),
	picture VARCHAR(2000),
	upVote VARCHAR(255),
	downVote VARCHAR(255),
	commentId INTEGER,
	contentDate DATE,
	contentTime TIME,
    tag INTEGER,
    username VARCHAR(255) NOT NULL,
    FOREIGN KEY (username) REFERENCES usr(username)
)";
$conn->exec($sqlCreate2);

$sqlCreate3 = "CREATE TABLE comment (
	commentId VARCHAR(255) PRIMARY KEY NOT NULL,
	commentText VARCHAR(255),
	tag INTEGER,
	commentDate DATE,
	commentTime TIME,
	contentId VARCHAR(255),
    username VARCHAR(255),
	FOREIGN KEY (username) REFERENCES usr(username),
	FOREIGN KEY (contentId) REFERENCES content(contentId)
)";
$conn->exec($sqlCreate3);


?>