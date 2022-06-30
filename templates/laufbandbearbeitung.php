<?php

include 'base_template.php';

$headertext = $_POST['headertext'];
$footertext = $_POST['footertext'];

$statement = $pdo->prepare("UPDATE headerfoooterdb SET headertext = :headertext_neu, footertext = :footertext_neu WHERE id = :id");
$statement->execute(array('id' => 1, 'headertext_neu' => $headertext, 'footertext_neu' => $footertext));
header("Location: Ausgabe.php");
