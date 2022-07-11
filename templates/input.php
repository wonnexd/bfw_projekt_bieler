<?php
include 'inc/base_template.php';
?>

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
                            <a class="nav-link active" aria-current="page" href="input.php">Eingabe</a>
                            <a class="nav-link" href="headerfooter.php">Laufbänder</a>
                            <a class="nav-link" href="delete.php">Löschen</a>
                            <a class="nav-link" href="output.php">Ausgabe</a>
                            <a class="nav-link" href="logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </nav>

            <form action="input_handling.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        Titel einfügen <br>
                        <input type="text" size="40"  name="title" required><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-floating">
                            Text einfügen (maximal 320 Zeichen für den Text)
                            <textarea id='text' name='text' style='border: 1px solid black;'>
                            </textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h2>Bilder Hochladen</h2>
                        <label for="fileSelect">Filename:</label>
                        <input type="file" name="photo" id="fileSelect">

                        <p><strong>Note:</strong> Only .jpg, .jpeg, .gif, .png Formate erlaubt bis zu 5 MB.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        Zu sehen bis einschließlich Tag x (optionale Eingabe)<br>
                        <input type="datetime-local" size="40" name="expiration_date"><br>
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
    echo 'bitte einlogen <a href="login.php">Hier klicken</a>';
}
?>

<script type="text/javascript">
    // Initialize CKEditor
    CKEDITOR.replace('text', {
        height: "200px"
    });
</script>

<?php
include 'inc/base_template_footer.php';
