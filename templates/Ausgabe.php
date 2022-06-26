<?php
include 'header.php'
?>

<body>

    <div class="row minheight zeromargin">
        <div class="col bg-warning text-center">
            <?php
            $sql = "SELECT titel, text, picture, date FROM ausgabedb ORDER BY date DESC LIMIT 1";
            foreach ($pdo->query($sql) as $row) {
                echo $row['titel'] . "<br />";
                echo $row['text'] . "<br />";
                if ($row['picture'] != "") {
                    echo "<img src='../upload/" . $row['picture'] . "' height='200' width='200'></br> ";
                }
                echo $row['date'] . "><br />";
            }
            ?>
        </div>
        <div class="col bg-danger text-center">
            <?php
            $sql = "SELECT titel, text, picture, date FROM ausgabedb ORDER BY date DESC LIMIT 1,1";
            foreach ($pdo->query($sql) as $row) {
                echo $row['titel'] . "<br />";
                echo $row['text'] . "<br />";
                if ($row['picture'] != "") {
                    echo "<img src='../upload/" . $row['picture'] . "' height='200' width='200'></br> ";
                }
                echo $row['date'] . "><br />";
            }
            ?>
        </div>
    </div>
    <div class="row minheight zeromargin">
        <div class="col bg-primary text-center">
            <?php
            $sql = "SELECT titel, text, picture, date FROM ausgabedb ORDER BY date DESC LIMIT 2,1";
            foreach ($pdo->query($sql) as $row) {
                echo $row['titel'] . "<br />";
                echo $row['text'] . "<br />";
                if ($row['picture'] != "") {
                    echo "<img src='../upload/" . $row['picture'] . "' height='200' width='200'></br> ";
                }
                echo $row['date'] . "><br />";
            }
            ?>
        </div>
        <div class="col bg-success text-center">
            <?php
            $sql = "SELECT titel, text, picture, date FROM ausgabedb ORDER BY date DESC LIMIT 3, 1";
            foreach ($pdo->query($sql) as $row) {
                echo $row['titel'] . "<br />";
                echo $row['text'] . "<br />";
                if ($row['picture'] != "") {
                    echo "<img src='../upload/" . $row['picture'] . "' height='200' width='200'></br> ";
                }
                echo $row['date'] . "><br />";
            }
            ?>
        </div>
    </div>

    <script src="static_files/bootstrap.js"></script>
</body>

</html>