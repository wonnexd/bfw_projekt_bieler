<?php
session_start();

$pdo = new PDO('mysql:host=localhost;dbname=bieler', 'root', '');
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../static_files/bootstrap.css">
        <link rel="stylesheet" href="../static_files/mystyle.css">
        <script src="../static_files/ckeditor/ckeditor.js"></script>
        <title>Document</title>
    </head>