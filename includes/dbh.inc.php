<?php

$dbServername = "localhost";
$dbUsername = "example_username";
$dbPassword = "example_password";
$dbName = "example_db";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
  die("Connection Failed: " . mysqli_connect_error());
}
