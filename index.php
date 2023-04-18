<?php
include("datafunction/functions.php");

if (isset($_POST["login"])) {

    if ($_POST["email"] == "januarinoorbudi@litch.edu" && $_POST["password"] == "admin") {
        header("Location: admin/admin_homepage.php");
        exit;

    } elseif (!$_POST["email"] == "januarinoorbudi@litch.edu" || $_POST["password"] == "user") {
        header("Location: user/homepage.php");
        exit;

    } else {
        $error = true;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LITCHFIELD UNIVERSITY LOGIN PAGE</title>

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="css/login.css" type="text/css">

    <!-- Bootstrap5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

</head>

<body>

    <h1 style="color: rgb(1, 101, 68);">LITCHFIELD UNIVERSITY</h1>

    <!-- Bootstrap5.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>

    <!-- Login Form -->
    <div class="login-form">
        <form method="post">
            <ul>
                <?php if (isset($error)): ?>
                    <p style="color: red; font-style: italic; font-size: 1.1rem;">Wrong Username/Password</p>
                <?php endif ?>


                <div>
                    <label for="email">
                        <i data-feather="at-sign"></i>
                        <input type="email" name="email" placeholder="Email" id="email" required autocomplete="off">
                    </label>
                </div>
                <br>
                <br>
                <label for="password">
                    <i data-feather="lock"></i>
                    <input type="password" name="password" placeholder="Password" id="password" required>
                </label>
                <br>
                <br>
                <button class="btn" name="login">Login</button>
            </ul>
        </form>
    </div>

    <script>
        feather.replace();
    </script>
</body>

</html>