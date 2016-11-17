<?php
$server = "localhost";
$user = "root";
$password = "root";

$db = new mysqli($server, $user, $password);

if($db->connect_error) {
  die("Connection Failed" . mysqli_connect_error());
}

$sql = "create database if not exists myDB";

if($db->query($sql) == false) {
  echo "Could not create database. " . mysqli_error($db);
}

//Create table
$sql = "create table if not exists contact (
    firstName varchar(50) not null, 
    lastName varchar(50) not null,
    email varchar(100) not null,
    message varchar(300) not null,
    submissionDate timestamp
  )";

$db->query($sql);

$tempFirstName = $_POST['firstName'];
$tempLastName = $_POST['lastName'];
$tempEmail = $_POST['email'];
$tempMessage = $_POST['message'];

$firstName = mysqli_real_escape_string($db, $tempFirstName);
$lastName = mysqli_real_escape_string($db, $tempLastName);
$email = mysqli_real_escape_string($db, $tempEmail);
$message = mysqli_real_escape_string($db, $tempMessage);

$sql = "insert into contact (firstName, lastName, email, message, submissionData) values ('$firstName', '$lastName', '$email', '$message', now())";

if($db->query($sql) == false) {
  echo "ERROR: sql query failed.";
} else {
  echo "Success!";
}

mysqli_close($db);