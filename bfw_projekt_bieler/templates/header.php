<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bieler";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static_files/bootstrap.css">
    <link rel="stylesheet" href="../static_files/mystyle.css">
    <script src="//cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
    <title>Document</title>
</head>