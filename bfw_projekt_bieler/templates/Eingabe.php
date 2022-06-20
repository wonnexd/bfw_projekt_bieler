<?php
include 'header.php';

if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) {
    $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
    $filename = $_FILES["photo"]["name"];
    $filetype = $_FILES["photo"]["type"];
    $filesize = $_FILES["photo"]["size"];

    // Verify file extension
    $ext = pathinfo($filename, PATHINFO_EXTENSION);
    if (!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");

    // Verify file size - 5MB maximum
    $maxsize = 5 * 1024 * 1024;
    if ($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");

    // Verify MYME type of the file
    if (in_array($filetype, $allowed)) {
        // Check whether file exists before uploading it
        if (file_exists("upload/" . $filename)) {
            echo $filename . " is already exists.";
        } else {
            move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $filename);
            echo "Your file was uploaded successfully.";
        }
    } else {
        echo "Error: There was a problem uploading your file. Please try again.";
    }
}
?>

<body>

    <div class="container">
        <div class="row">
            <div>

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


                <form action="Verarbeitung.php" method="post">
                    <div class="row">
                        <div class="col-5">
                            <div class="form-floating">
                                <textarea id='input1' name='input1' style='border: 1px solid black;'>
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
                                    ?></textarea>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-floating">
                                <textarea id='input2' name='input2' style='border: 1px solid black;'>
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
                                    ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-5">
                            <div class="form-floating">
                                <textarea id='input3' name='input3' style='border: 1px solid black;'>
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
                                    ?></textarea>
                            </div>
                        </div>
                        <div class="col-5">
                            <div class="form-floating">
                                <textarea id='input4' name='input4' style='border: 1px solid black;'>
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
                                    ?></textarea>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Abschicken">
                </form>
            </div>
            <div class="mt-5">
                <div class="h2">Vorhandene Bilder</div>
                <div>Pfad einfach kopieren und einfügen</div>
                <?php
                if ($handle = opendir('../upload/')) {

                    while (false !== ($entry = readdir($handle))) {

                        if ($entry != "." && $entry != "..") {

                            echo "../upload/$entry\n";
                        }
                        echo '</br>';
                    }

                    closedir($handle);
                }
                ?>
            </div>
            <div class="m-5">
                Login
                datum
                fehlen noch
            </div>
            <form action=" upload-manager.php" method="post" enctype="multipart/form-data">
                <h2>Upload Images</h2>
                <label for="fileSelect">Filename:</label>
                <input type="file" name="photo" id="fileSelect">
                <input type="submit" name="submit" value="Upload">
                <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
            </form>

        </div>
    </div>


    <script type="text/javascript">
        // Initialize CKEditor
        CKEDITOR.replace('input1', {
            height: "300px"
        });
        CKEDITOR.replace('input2', {
            height: "300px"
        });
        CKEDITOR.replace('input3', {
            height: "300px"
        });
        CKEDITOR.replace('input4', {
            height: "300px"
        });
    </script>

    <script src="./static_files/bootstrap.js"></script>
</body>

</html>