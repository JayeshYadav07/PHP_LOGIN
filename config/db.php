<?php

session_start();

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "phptutorials";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}