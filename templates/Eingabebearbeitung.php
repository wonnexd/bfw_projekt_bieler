<?php

include 'header.php';

$titel = $_POST['titel'];
$text = $_POST['text'];
$date = $_POST['date'];

# https://stackoverflow.com/questions/17492136/php-upload-if-isset-always-says-it-is
#is_uploaded_file — Tells whether the file was uploaded via HTTP POST
if (!file_exists($_FILES['photo']['tmp_name']) || !is_uploaded_file($_FILES['photo']['tmp_name'])) {
    $statement = $pdo->prepare("INSERT INTO ausgabedb (titel, text, date ) VALUES (?, ?, ?)");
    $statement->execute(array($titel, $text, $date));
    header("Location: Ausgabe.php");
}

// https://www.tutorialrepublic.com/php-tutorial/php-file-upload.php
// Check if file was uploaded without errors
elseif (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) {
    $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
    $filename = $_FILES["photo"]["name"];
    $filetype = $_FILES["photo"]["type"];
    $filesize = $_FILES["photo"]["size"];

// Verify file extension
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if (!array_key_exists($ext, $allowed))
        die("Error: Please select a valid file format.");

// Verify file size - 5MB maximum
    $maxsize = 5 * 1024 * 1024;
    if ($filesize > $maxsize)
        die("Error: File size is larger than the allowed limit.");

// Verify MYME type of the file
    if (in_array($filetype, $allowed)) {
// Check whether file exists before uploading it
        if (file_exists("./upload/" . $filename)) {
            echo $filename . " is already exists.";
        } else {
            move_uploaded_file($_FILES["photo"]["tmp_name"], "../upload/" . $filename);
            $statement = $pdo->prepare("INSERT INTO ausgabedb (titel, text, picture, date ) VALUES (?, ?, ?, ?)");
            $statement->execute(array($titel, $text, $filename, $date));
            echo "Your file was uploaded successfully. </br>";
            echo '<a href="Eingabe.php">Zurück zur Eingabe</a>';
        }
    } else {
        echo "Error: There was a problem uploading your file. Please try again.";
    }
    header("Location: Ausgabe.php");
} else {
    echo "Error: " . $_FILES["photo"]["error"];
}

