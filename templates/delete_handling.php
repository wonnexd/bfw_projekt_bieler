<?php

include 'base_template.php';
$date = date("Y-m-d");

if (isset($_GET['id1'])) {
    $sql = "DELETE FROM ausgabedb WHERE (expiration_date = '0000-00-00' OR expiration_date >= '$date') ORDER BY date DESC LIMIT 1";
    $pdo->exec($sql);
} elseif (isset($_GET['id2'])) {
    $sql = "DELETE FROM ausgabedb WHERE (expiration_date = '0000-00-00' OR expiration_date >= '$date') ORDER BY date DESC LIMIT 2";
    $pdo->exec($sql);
} elseif (isset($_GET['id3'])) {
    $sql = "DELETE FROM ausgabedb WHERE (expiration_date = '0000-00-00' OR expiration_date >= '$date') ORDER BY date DESC LIMIT 2,1";
    $pdo->exec($sql);
} elseif (isset($_GET['id4'])) {
    $sql = "DELETE FROM ausgabedb WHERE (expiration_date = '0000-00-00' OR expiration_date >= '$date') ORDER BY date DESC LIMIT 3,1";
    $pdo->exec($sql);
}

header("Location: Eingabe.php");

include './base_template_footer.php';
