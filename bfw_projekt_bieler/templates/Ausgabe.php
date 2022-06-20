<?php
include 'header.php'
?>

<body class="">

    <div class="bg-primary">
        <?php
        $sql = "SELECT text1 FROM ausgabedb where id=1";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo $row["text1"];
            }
        } else {
            echo "0 results";
        }
        ?>
    </div>

    <div class="container">
        <div class="row bg-primary">
            <div class="col">
                <?php
                $sql = "SELECT text1 FROM ausgabedb where id=1";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo $row["text1"];
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </div>
            <div class="col">
                <?php
                $sql = "SELECT text2 FROM ausgabedb where id=1";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo $row["text2"];
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </div>
        </div>
        <div class="row bg-secondary">
            <div class="col">
                <?php
                $sql = "SELECT text3 FROM ausgabedb where id=1";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo $row["text3"];
                    }
                } else {
                    echo "0 results";
                }
                ?>
            </div>
            <div class="col">
                <?php
                $sql = "SELECT text4 FROM ausgabedb where id=1";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo $row["text4"];
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>
            </div>
        </div>
    </div>

    <script src="static_files/bootstrap.js"></script>
</body>

</html>