<?php
include 'base_template.php';
?>

<body>

    <?php
    if (isset($_SESSION['userid'])) {
        ?>

        <div class="container">
            <div class="row">

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">Navbar</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link active" aria-current="page" href="Eingabe.php">Eingabe</a>
                                <a class="nav-link" href="laufband.php">Laufbänder</a>
                                <a class="nav-link" href="Ausgabe.php">Ausgabe</a>
                                <a class="nav-link" href="logout.php">Logout</a>
                            </div>
                        </div>
                    </div>
                </nav>

                <form action="Eingabebearbeitung.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col">
                            Titel einfügen <br>
                            <input type="text" size="40"  name="titel" required><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating">
                                <textarea id='text' name='text' required style='border: 1px solid black;'>
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <h2>Upload Images</h2>
                            <label for="fileSelect">Filename:</label>
                            <input type="file" name="photo" id="fileSelect">

                            <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png formats allowed to a max size of 5 MB.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Zu sehen bis einschließlich Tag x (optionale Eingabe)<br>
                            <input type="date" size="40" name="expiration_date"><br>
                        </div>
                    </div>
                    <input type="submit" name="submit" value="Erstellen">
                </form>

                <div class="mt-5">
                    <div class="h2">Vorhandene Bilder für WYSIWYG</div>
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

            </div>
        </div>

        <?php
    } else {
        echo 'bitte einlogen <a href="Login.php">Hier klicken</a>';
    }
    ?>

    <script type="text/javascript">
        // Initialize CKEditor
        CKEDITOR.replace('text', {
            height: "200px"
        });
    </script>

    <div class="mt-5">
        gestaltung frontend + fonts responsiv
        prepared statements
        bilder einzeln hochladen
        eingabe in der bearbeitung limitieren (responsivness)
        eingabebearbeitung schön machen
        change date?

        bewegte bilder
        mehrere bilder uploaden bzw. datenbankstruktur für bilder verändern
    </div>

    <?php
    include 'base_template_footer.php';
