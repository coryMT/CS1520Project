<?php
$server = "localhost";
$user = "root";
$password = "root";

$db = mysqli_connect($server, $user, $password);

if($db->connect_error) {
  die("Connection Failed" . mysqli_connect_error());
}

if(!mysqli_select_db($db, 'myDB')) {
  $sql = "create database if not exists myDB";
  if(!mysqli_query($db, $sql)) {
    echo "Could not create database. " . mysqli_error($db);
  }
}

//Create table
$sql2 = "create table if not exists contact (
    firstName varchar(50) not null, 
    lastName varchar(50) not null,
    email varchar(100) not null,
    message varchar(300) not null,
    submissionDate timestamp
  )";

if(!mysqli_query($db, $sql2)) {
  echo "Could not create table. " . mysqli_error($db);
}

$tempFirstName = $_POST['firstName'];
$tempLastName = $_POST['lastName'];
$tempEmail = $_POST['email'];
$tempMessage = $_POST['message'];

$firstName = mysqli_real_escape_string($db, $tempFirstName);
$lastName = mysqli_real_escape_string($db, $tempLastName);
$email = mysqli_real_escape_string($db, $tempEmail);
$message = mysqli_real_escape_string($db, $tempMessage);

$sql3 = "insert into contact (firstName, lastName, email, message, submissionDate) values ('$firstName', '$lastName', '$email', '$message', now())";

$result = mysqli_query($db, $sql3);

mysqli_close($db);

if ($result) {
  echo "Insert successful";
  echo '<meta http-equiv="refresh" content="0; url=http://localhost:8888/index.php">';
} else {
  echo "Insert failed!";
}

