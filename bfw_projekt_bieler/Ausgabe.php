<?php
include 'header.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="static_files/bootstrap.css">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-9">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link active" aria-current="page" href="Eingabe.php">Eingabe</a>
                                <a class="nav-link" href="Ausgabe.php">Ausgabe</a>
                            </div>
                        </div>
                    </div>
                </nav>

                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="bg-primary bg-gradient p-5">
                                <?php
                                $sql = "SELECT text1 FROM ausgabedb where id=17";
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
                        </div>
                        <div class="col">
                            <?php
                            $sql = "SELECT text2 FROM ausgabedb where id=17";
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
                    <div class="row">
                        <div class="col">
                            <?php
                            $sql = "SELECT text3 FROM ausgabedb where id=17";
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
                            $sql = "SELECT text4 FROM ausgabedb where id=17";
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
                <img src="upload/Octocat.jpg" alt="Picture">

            </div>
        </div>
    </div>

    <script src="static_files/bootstrap.js"></script>
</body>

</html>