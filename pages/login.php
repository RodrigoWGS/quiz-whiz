<?php
require '../config/db_conn.php';

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM `user_tbl` WHERE username='$username'");
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
        if ($password == $row["password"]) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("Location: ../pages/gameLoading.php");
        } else {
            echo
            "<script>alert('INCORRECT PASSWORD')</script>";
        }
    } else {
        echo
        "<script>alert('USER NOT REGISTERED')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>Login</title>
</head>

<body>

    <div class="authentication__screens">

        <div class="game__logo">

            <div class="logo">
                <img src="../assets/images/logo.png">
            </div>

            <h2>WEICOME BACK LOGIN TO CONTINUE</h2>

        </div>

        <div class="wrapper">

            <form class="" action="" method="post" autocomplete="off">

                <div class="input__box">
                    <input type="text" name="username" id="username" placeholder="USERNAME" required value="">
                </div>

                <div class="input__box">
                    <input type="password" name="password" id="password" placeholder="PASSWORD" required value="">
                </div>

                <div class="authentication__btn">
                    <button type="submit" name="submit" class="btn">LOGIN</button>
                </div>


                <div class="quick__links ">
                    <p>Forgot Password?</p>
                </div>

                <div class="quick__links">
                    <p>New on our platform?<a href="#">Create an account</a></p>
                </div>

            </form>

            <div class="btn__container">
                <div class="icon__image">
                    <img src="../assets/images/Backward Icon.png">
                </div>
            </div>
        </div>
    </div>

</body>

</html>