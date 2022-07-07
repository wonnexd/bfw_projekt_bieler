<?php

include 'base_template.php';

// strip tags for p removal for layout responsivness
$headertext = strip_tags($_POST['headertext']);
$footertext = strip_tags($_POST['footertext']);

$statement = $pdo->prepare("UPDATE headerfoooterdb SET headertext = :headertext_neu, footertext = :footertext_neu WHERE id = :id");

$statement->bindParam(':headertext_neu', $headertext, PDO::PARAM_STR);
$statement->bindParam(':footertext_neu', $footertext, PDO::PARAM_STR);

$statement->execute(array('id' => 1, 'headertext_neu' => $headertext, 'footertext_neu' => $footertext));
header("Location: Ausgabe.php");
