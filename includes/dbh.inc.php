<?php
$dBServername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "adb";

// Create connection
$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
