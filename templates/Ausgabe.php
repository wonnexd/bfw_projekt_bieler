<?php
include 'base_template.php';
$date = date("Y-m-d");
?>

<!--site autorefresh
<head>
    <meta http-equiv="refresh" content="5" >
</head>-->

<body>

    <div class="row headerheight zeromargin">
        <div class="col text-center p-0">
            <?php
            $sql = "SELECT headertext FROM headerfoooterdb where id = 1";
            foreach ($pdo->query($sql) as $row) {
                echo $row['headertext'] . "<br />";
            }
            ?>
        </div>
    </div>
    <div class="row minheight zeromargin">
        <div class="col bg-warning text-center">
            <?php
            $sql = "SELECT titel, text, picture, date FROM ausgabedb WHERE (expiration_date = '0000-00-00' OR expiration_date >= '$date') ORDER BY date DESC LIMIT 1";
            foreach ($pdo->query($sql) as $row) {
                echo $row['titel'] . "<br />";
                echo $row['text'] . "<br />";
                if ($row['picture'] != "") {
                    echo "<img src='../upload/" . $row['picture'] . "' height='200' width='200'></br> ";
                }
                echo $row['date'] . "<br />";
            }
            ?>
        </div>
        <div class="col bg-danger text-center">
            <?php
            $sql = "SELECT titel, text, picture, date FROM ausgabedb WHERE (expiration_date = '0000-00-00' OR expiration_date >= '$date') ORDER BY date DESC LIMIT 1,1";
            foreach ($pdo->query($sql) as $row) {
                echo $row['titel'] . "<br />";
                echo $row['text'] . "<br />";
                if ($row['picture'] != "") {
                    echo "<img src='../upload/" . $row['picture'] . "' height='200' width='200'></br> ";
                }
                echo $row['date'] . "<br />";
            }
            ?>
        </div>
    </div>
    <div class="row minheight zeromargin">
        <div class="col bg-primary text-center">
            <?php
            $sql = "SELECT titel, text, picture, date FROM ausgabedb WHERE (expiration_date = '0000-00-00' OR expiration_date >= '$date') ORDER BY date DESC LIMIT 2,1";
            foreach ($pdo->query($sql) as $row) {
                echo $row['titel'] . "<br />";
                echo $row['text'] . "<br />";
                if ($row['picture'] != "") {
                    echo "<img src='../upload/" . $row['picture'] . "' height='200' width='200'></br> ";
                }
                echo $row['date'] . "<br />";
            }
            ?>
        </div>
        <div class="col bg-success text-center">
            <?php
            $sql = "SELECT titel, text, picture, date FROM ausgabedb WHERE (expiration_date = '0000-00-00' OR expiration_date >= '$date') ORDER BY date DESC LIMIT 3,1";
            foreach ($pdo->query($sql) as $row) {
                echo $row['titel'] . "<br />";
                echo $row['text'] . "<br />";
                if ($row['picture'] != "") {
                    echo "<img src='../upload/" . $row['picture'] . "' height='200' width='200'></br> ";
                }
                echo $row['date'] . "<br />";
            }
            ?>
        </div>
    </div>
    <div class="row headerheight zeromargin">
        <div class="col text-center p-0">
            <div>
                <?php
                $sql = "SELECT footertext FROM headerfoooterdb where id = 1";
                foreach ($pdo->query($sql) as $row) {
                    echo $row['footertext'] . "<br />";
                }
                ?>
            </div>
        </div>
    </div>

    <?php
    include 'base_template_footer.php';
