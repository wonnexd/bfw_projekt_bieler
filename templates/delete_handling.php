<?php

include 'inc/base_template.php';
$date = date("Y-m-d H:i:s");

if (isset($_POST['id1'])) {
    $sql = "DELETE FROM outputdb WHERE (expiration_date = '0000-00-00 00:00:00' OR expiration_date >= '$date') ORDER BY date DESC LIMIT 1";
    $pdo->exec($sql);
} elseif (isset($_POST['id2'])) {
    $sql = "DELETE FROM `outputdb`
WHERE `id` IN (
    SELECT `id` FROM (
        SELECT `id` FROM `outputdb`
        ORDER BY `date` DESC
        LIMIT 1, 1
    ) AS `x`
)";
    $pdo->exec($sql);
} elseif (isset($_POST['id3'])) {
    $sql = "DELETE FROM `outputdb`
WHERE `id` IN (
    SELECT `id` FROM (
        SELECT `id` FROM `outputdb`
        ORDER BY `date` DESC
        LIMIT 2, 1
    ) AS `x`
)";
    $pdo->exec($sql);
} elseif (isset($_POST['id4'])) {
    $sql = "DELETE FROM `outputdb`
WHERE `id` IN (
    SELECT `id` FROM (
        SELECT `id` FROM `outputdb`
        ORDER BY `date` DESC
        LIMIT 3, 1
    ) AS `x`
)";
    $pdo->exec($sql);
}

header("Location: delete.php");

include './base_template_footer.php';
