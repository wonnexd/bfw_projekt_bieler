<?php
include 'header.php'
?>

<body>

    <div class="centerlogin">
        <form action="loginverarbeitung.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="email" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>