<?php
include 'inc/base_template.php';
?>

<div class="container">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="input.php">Eingabe</a>
                    <a class="nav-link active" href="headerfooter.php">Laufbänder</a>
                    <a class="nav-link" href="delete.php">Löschen</a>
                    <a class="nav-link" href="output.php">Ausgabe</a>
                    <a class="nav-link" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </nav>

    <form action="headerfooter_handling.php" method="post">
        <div>
            <div class="row">
                <div class="col">
                    Headertext eingeben
                    <textarea id='headertext' name='headertext' required style='border: 1px solid black;'>
                        <?php
                        $sql = "SELECT headertext FROM headerfoooterdb";
                        foreach ($pdo->query($sql) as $row) {
                            echo $row['headertext'];
                        }
                        ?>
                    </textarea>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    Footertext eingeben
                    <textarea id='footertext' name='footertext' required style='border: 1px solid black;'>
                        <?php
                        $sql = "SELECT footertext FROM headerfoooterdb";
                        foreach ($pdo->query($sql) as $row) {
                            echo $row['footertext'];
                        }
                        ?>
                    </textarea>
                </div>
            </div>
            <input type="submit" name="submit" value="Erstellen">
        </div>
    </form>

</div>

<script type="text/javascript">
    // Initialize CKEditor
    CKEDITOR.replace('headertext', {
        height: "150px"
    });
    CKEDITOR.replace('footertext', {
        height: "150px"
    });
</script>

<?php
include 'inc/base_template_footer.php';
