<?php
include 'base_template.php';
$date = date("Y-m-d");

$sql = "SELECT headertext FROM headerfoooterdb where id = 1";
foreach ($pdo->query($sql) as $row) {
    $headertext = $row['headertext'];
}

$sql = "SELECT titel, text, picture, date FROM ausgabedb WHERE (expiration_date = '0000-00-00' OR expiration_date >= '$date') ORDER BY date DESC LIMIT 1";
foreach ($pdo->query($sql) as $row) {
    $titel1 = $row['titel'];
    $text1 = $row['text'];
    if ($row['picture'] != "") {
        $picture1 = "<img src = '../upload/" . $row['picture'] . "' height = '110 %'>";
    } else {
        $picture1 = "";
    }
    $date1 = date("d-m-Y", strtotime($row['date']));
}

$sql = "SELECT titel, text, picture, date FROM ausgabedb WHERE (expiration_date = '0000-00-00' OR expiration_date >= '$date') ORDER BY date DESC LIMIT 1, 1";
foreach ($pdo->query($sql) as $row) {
    $titel2 = $row['titel'];
    $text2 = $row['text'];
    if ($row['picture'] != "") {
        $picture2 = "<img src = '../upload/" . $row['picture'] . "' height = '110 %'>";
    } else {
        $picture2 = "";
    }
    $date2 = date("d-m-Y", strtotime($row['date']));
}

$sql = "SELECT titel, text, picture, date FROM ausgabedb WHERE (expiration_date = '0000-00-00' OR expiration_date >= '$date') ORDER BY date DESC LIMIT 2, 1";
foreach ($pdo->query($sql) as $row) {
    $titel3 = $row['titel'];
    $text3 = $row['text'];
    if ($row['picture'] != "") {
        $picture3 = "<img src = '../upload/" . $row['picture'] . "' height = '110 %'>";
    } else {
        $picture3 = "";
    }
    $date3 = date("d-m-Y", strtotime($row['date']));
}

$sql = "SELECT titel, text, picture, date FROM ausgabedb WHERE (expiration_date = '0000-00-00' OR expiration_date >= '$date') ORDER BY date DESC LIMIT 3, 1";
foreach ($pdo->query($sql) as $row) {
    $titel4 = $row['titel'];
    $text4 = $row['text'];
    if ($row['picture'] != "") {
        $picture4 = "<img src = '../upload/" . $row['picture'] . "' height = '110 %'>";
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
        <div class="col text-center text-primary my-auto responvie_font_standard">
            <?php echo $headertext; ?>
        </div>
    </div>


    <div class="row textheight zeromargin pt-3 border-top">
        <div class="col text-center">
            <div class="fw-bold responvie_font_big padding_for_centering">
                <?php echo $titel1 . "<br />"; ?>
            </div>
            <div class="responvie_font_standard mb-3 padding_for_centering">
                <?php echo $text1 . "<br />"; ?>
            </div>
        </div>

        <div class="col text-center">
            <div class="fw-bold responvie_font_big padding_for_centering">
                <?php echo $titel2 . "<br />"; ?>
            </div>
            <div class="responvie_font_standard mb-3 padding_for_centering">
                <?php echo $text2 . "<br />"; ?>
            </div>
        </div>
    </div>

    <div class="row dateheight zeromargin responvie_font_small align-items-end pb-3">
        <div class="col text-center">
            <div>
                <?php echo $picture1 . "<br />"; ?>
            </div>
            <?php echo $date1 . "<br />"; ?>
            <form action="delete_handling.php" method="get">
                <button type="submit" name="id1" value="value">Submit</button>
            </form>
        </div>
        <div class="col text-center">
            <div>
                <?php echo $picture2 . "<br />"; ?>
            </div>
            <?php echo $date2 . "<br />"; ?>
            <form action="delete_handling.php" method="get">
                <button type="submit" name="id2" value="value">Submit</button>
            </form>
        </div>
    </div>

    <div class="row textheight zeromargin border-top pt-3">
        <div class="col text-center">
            <div class="fw-bold responvie_font_big padding_for_centering">
                <?php echo $titel3 . "<br />"; ?>
            </div>
            <div class="responvie_font_standard mb-3 padding_for_centering">
                <?php echo $text3 . "<br />"; ?>
            </div>
        </div>

        <div class="col text-center">
            <div class="fw-bold responvie_font_big padding_for_centering">
                <?php echo $titel4 . "<br />"; ?>
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
            <form action="delete_handling.php" method="get">
                <button type="submit" name="id3" value="value">Submit</button>
            </form>
        </div>
        <div class="col text-center">
            <div>
                <?php echo $picture4 . "<br />"; ?>
            </div>
            <?php echo $date4 . "<br />"; ?>
            <form action="delete_handling.php" method="get">
                <button type="submit" name="id4" value="value">Submit</button>
            </form>
        </div>
    </div>

    <div class="row headerheight zeromargin">
        <div class="col text-center text-primary my-auto responvie_font_standard">
            <?php echo $footertext; ?>
        </div>
    </div>

    <?php
    include 'base_template_footer.php';
