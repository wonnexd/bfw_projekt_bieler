<?php
include 'header.php'
?>

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
                    <form action="Verarbeitung.php" method="post">
                        <div class="row">
                            <div class="col">
                                <div class="form-floating">
                                    <textarea id='input1' name='input1' style='border: 1px solid black;'>
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
                                    ?></textarea>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="input2" style="height: 100px">
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
                                    ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="input3" style="height: 100px">
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
                                    ?></textarea>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" name="input4" style="height: 100px">
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
                                    ?></textarea>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="Abschicken">
                    </form>
                </div>
                <div class="m-5">
                    Bilder
                    Login
                    datum
                    fehlen noch
                </div>
                <form action=" upload-manager.php" method="post" enctype="multipart/form-data">
                    <h2>Upload File</h2>
                    <label for="fileSelect">Filename:</label>
                    <input type="file" name="photo" id="fileSelect">
                    <input type="submit" name="submit" value="Upload">
                    <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
                </form>

            </div>
        </div>
    </div>

    <script type="text/javascript">
        // Initialize CKEditor

        CKEDITOR.replace('input1', {

            width: "500px",
            height: "200px"

        });
    </script>

    <script src="static_files/bootstrap.js"></script>
</body>

</html>