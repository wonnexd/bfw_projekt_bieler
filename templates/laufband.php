<?php
include 'base_template.php';
?>

<body>

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
                            <a class="nav-link" aria-current="page" href="Eingabe.php">Eingabe</a>
                            <a class="nav-link active"<" href="laufband.php">Laufbänder</a>
                            <a class="nav-link" href="Ausgabe.php">Ausgabe</a>
                            <a class="nav-link" href="logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>

        <form action="laufbandbearbeitung.php" method="post">
            <div>
                <div class="row">
                    <div class="col">
                        Headertext hier eingeben
                        <textarea id='headertext' name='headertext' required style='border: 1px solid black;'>
                        </textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        Footertext eingeben
                        <textarea id='footertext' name='footertext' required style='border: 1px solid black;'>
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

    <script src="./static_files/bootstrap.js"></script>

</body>