<?php
require '../config/db_conn.php';

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $conformPassword = $_POST["conformPassword"];

    $duplicate = mysqli_query($conn, "SELECT * FROM `user_tbl` WHERE username='$username'");

    if (mysqli_num_rows($duplicate) > 0) {
        echo
        "<script>alert('THE USER NAME HAD ALREADY TAKEN')</script>";
    } else {
        if ($password == $conformPassword) {
            $query = "INSERT INTO `user_tbl`(`id`, `username`, `password`) VALUES ('','$username','$password')";
            mysqli_query($conn, $query);
            echo
            "<script>alert('REGISTRATION SUCESSFULLY')</script>";

            header("Location: ../pages/login.php");
            exit();
        } else {
            echo
            "<script>alert('PASSWORD DOES NOT MATCH')</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <title>Registration</title>
</head>

<body>
    <div class="authentication__screens">

        <div class="game__logo">

            <div class="logo">
                <img src="../assets/images/logo.png">
            </div>

            <h2>WEICOME! CREATE YOUR ACCOUNT</h2>

        </div>

        <div class="wrapper">

            <form class="" action="" method="post" autocomplete="off">

                <div class="input__box">
                    <input type="text" name="username" id="username" placeholder="USERNAME" required value="">
                </div>

                <div class="input__box">
                    <input type="password" name="password" id="password" placeholder="PASSWORD" required value="">
                </div>

                <div class="input__box">
                    <input type="password" name="conformPassword" id="conformPassword" placeholder="CONFORM PASSWORD" required value="">
                </div>

                <div class="authentication__btn">
                    <button type="submit" name="submit" class="btn">REGISTER</button>
                </div>

                <div class="quick__links">
                    <p>Already have an account?<a href="#">Login instead</a></p>
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