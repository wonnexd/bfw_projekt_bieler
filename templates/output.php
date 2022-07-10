<?php
include 'base_template.php';
$date = date("Y-m-d H:i:s");

$sql = "SELECT headertext FROM headerfoooterdb where id = 1";
foreach ($pdo->query($sql) as $row) {
    $headertext = $row['headertext'];
}

$sql = "SELECT title, text, picture, date FROM ausgabedb WHERE (expiration_date = '0000-00-00 00:00:00' OR expiration_date >= '$date') ORDER BY date DESC LIMIT 1";
foreach ($pdo->query($sql) as $row) {
    $title1 = $row['title'];
    $text1 = $row['text'];
    if ($row['picture'] != "") {
        $picture1 = "<img src = '../upload/" . $row['picture'] . "' height = '200 %'>";
    } else {
        $picture1 = "";
    }
    $date1 = date("d-m-Y", strtotime($row['date']));
}

$sql = "SELECT title, text, picture, date FROM ausgabedb WHERE (expiration_date = '0000-00-00 00:00:00' OR expiration_date >= '$date') ORDER BY date DESC LIMIT 1,1";
foreach ($pdo->query($sql) as $row) {
    $title2 = $row['title'];
    $text2 = $row['text'];
    if ($row['picture'] != "") {
        $picture2 = "<img src = '../upload/" . $row['picture'] . "' height = '200 %'>";
    } else {
        $picture2 = "";
    }
    $date2 = date("d-m-Y", strtotime($row['date']));
}

$sql = "SELECT title, text, picture, date FROM ausgabedb WHERE (expiration_date = '0000-00-00 00:00:00' OR expiration_date >= '$date') ORDER BY date DESC LIMIT 2, 1";
foreach ($pdo->query($sql) as $row) {
    $title3 = $row['title'];
    $text3 = $row['text'];
    if ($row['picture'] != "") {
        $picture3 = "<img src = '../upload/" . $row['picture'] . "' height = '200 %'>";
    } else {
        $picture3 = "";
    }
    $date3 = date("d-m-Y", strtotime($row['date']));
}

$sql = "SELECT title, text, picture, date FROM ausgabedb WHERE (expiration_date = '0000-00-00 00:00:00' OR expiration_date >= '$date') ORDER BY date DESC LIMIT 3, 1";
foreach ($pdo->query($sql) as $row) {
    $title4 = $row['title'];
    $text4 = $row['text'];
    if ($row['picture'] != "") {
        $picture4 = "<img src = '../upload/" . $row['picture'] . "' height = '200 %'>";
    } else {
        $picture4 = "";
    }
    $date4 = date("d-m-Y", strtotime($row['date']));
}

$sql = "SELECT footertext FROM headerfoooterdb where id = 1";
foreach ($pdo->query($sql) as $row) {
    $footertext = $row['footertext'];
}
?>

<!--site autorefresh
<head>
    <meta http-equiv="refresh" content="5" >
</head>-->

<body>

    <div class="row headerheight zeromargin ">
        <div class="col text-center text-primary my-auto responvie_font_big">
            <?php echo $headertext; ?>
        </div>
    </div>


    <div class="row textheight zeromargin pt-3 border-top">
        <div class="col text-center">
            <div class="fw-bold responvie_font_big padding_for_centering">
                <?php echo $title1 . "<br />"; ?>
            </div>
            <div class="responvie_font_standard mb-3 padding_for_centering">
                <?php echo $text1 . "<br />"; ?>
            </div>
        </div>

        <div class="col text-center">
            <div class="fw-bold responvie_font_big padding_for_centering">
                <?php echo $title2 . "<br />"; ?>
            </div>
            <div class="responvie_font_standard mb-3 padding_for_centering">
                <?php echo $text2 . "<br />"; ?>
            </div>
        </div>
    </div>

    <div class="row dateheight zeromargin responvie_font_small align-items-end pb-3 border-bottom">
        <div class="col text-center">
            <div>
                <?php echo $picture1 . "<br />"; ?>
            </div>
            <?php echo $date1 . "<br />"; ?>
        </div>
        <div class="col text-center">
            <div>
                <?php echo $picture2 . "<br />"; ?>
            </div>
            <?php echo $date2 . "<br />"; ?>
        </div>
    </div>

    <div class="row textheight zeromargin pt-3">
        <div class="col text-center">
            <div class="fw-bold responvie_font_big padding_for_centering">
                <?php echo $title3 . "<br />"; ?>
            </div>
            <div class="responvie_font_standard mb-3 padding_for_centering">
                <?php echo $text3 . "<br />"; ?>
            </div>
        </div>

        <div class="col text-center">
            <div class="fw-bold responvie_font_big padding_for_centering">
                <?php echo $title4 . "<br />"; ?>
            </div>
            <div class="responvie_font_standard mb-3 padding_for_centering">
                <?php echo $text4 . "<br />"; ?>
            </div>
        </div>
    </div>

    <div class="row dateheight zeromargin responvie_font_small align-items-end border-bottom pb-3">
        <div class="col text-center">
            <div>
                <?php echo $picture3 . "<br />"; ?>
            </div>
            <?php echo $date3 . "<br />"; ?>
        </div>
        <div class="col text-center">
            <div>
                <?php echo $picture4 . "<br />"; ?>
            </div>
            <?php echo $date4 . "<br />"; ?>
        </div>
    </div>

    <div class="row headerheight zeromargin">
        <div class="col text-center text-primary my-auto responvie_font_standard">
            <?php echo $footertext; ?>
        </div>
    </div>

    <?php
    include 'base_template_footer.php';
