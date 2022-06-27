<?php
include 'header.php';
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

            <form action="laufbandbearbeitung.php" method="post">
                <div class="container col loginposition text-center">
                    <div class="row">
                        <div class="col">
                            Laufbandtext einfügen <br>
                            <input type="text" size="150"  name="laufbandbearbeitung" required><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            Footertext einfügen<br>
                            <input type="text" size="150" name="footertext" required><br>
                        </div>
                    </div>
                    <input type="submit" name="submit" value="Erstellen">
                </div>
            </form>

        </div>
    </div>

</body>