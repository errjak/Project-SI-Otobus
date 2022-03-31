<?php
session_start();
require 'functions.php';

//cek cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['fsdhks'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['fsdhks'];

    $getId = mysqli_query($conn, "SELECT email FROM users WHERE id = $id");
    $data = mysqli_fetch_assoc($getId);

    if ($key === hash('gost-crypto',$data['email'])) {
        $_SESSION['login'] = true;
    }
}

//cek session
if (isset($_SESSION['login'])) {
    header("Location; index.php");
    exit;
}

//cek login
if (isset($_POST["login"])) {
    
    $id = $_POST["id"];
    $email = $_POST["email"];
    $pass = $_POST["password"];

    $check = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
    
    //cek email
    if (mysqli_num_rows($check) === 1) {
        
        $result = mysqli_fetch_assoc($check);
        if (password_verify($pass, $result["password"])) {

            // set session
            $_SESSION["login"] = true;
            setcookie('id', $result['id'], strtotime("+1 week"));

    
            //set cookie
            if (isset($_POST["remember"])) {
                setcookie('fsdhks', hash('gost-crypto', $result['email']), strtotime("+1 week"));
            }

            header("Location: index.php");
            exit;
        }
    }

    $loginFail = true;
}

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&family=Mukta:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css" />
        <link rel="icon" href="image/logoeka.png">
        <title>Login - PT. Eka Mira Prima Sentosa</title>
    </head>
    <body>
        <div class="container">
            <nav class="logo-nav">
                <div class="logo2" id="logo"><a href="index.php">EKA MIRA</a></div>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="ticketing.php">Ticketing</a></li>
                    <li><a href="about_us.php">About us</a></li>
                </ul>
            </nav>

            <!-- Buat Menu -->
            <nav class="menus">
                <ul>
                    <li><a href="register.php">Sign Up</a></li>
                </ul>
            </nav>
            <section class="content">
                <div class="content-sidebar-wrapper">
                    <div id="register" class="main-content register">
                        <h1>Login</h1>
                        <form name="myForm" action="" method="post" onsubmit="return validasi()">
                            <input type="hidden" name="id">
                            <!-- EMAIL -->
                            <div class="row mt-2">
                                <table>
                                    <tr>
                                        <td><div class="col2 col-2 align-end"><label for="email">Email :</label></div></td>
                                        <td><div class="col2 col-10 relative"><input type="text" id="email" name="email" class="form-control placeholder-left" size="50px"/></div></td>
                                    </tr>
                                    <tr>
                                        <td><div class="col2 col-2 align-end"><label for="password">Password :</label></div></td>
                                        <td><div class="col2 col-10 relative">
                                            <input type="password" id="password" name="password" class="form-control" />
                                            <div id="toggle-pass" onclick="showPass()"></div>
                                        </div></td>
                                    </tr>
                                </table>
                            </div>
                            <div class="remember">
                                <input type="checkbox" id="remember" name="remember"/>
                                <label for="remember">Ingat Saya</label>
                            </div>
                            <!-- AKHIR EMAIL -->
                            <?php if(isset($loginFail)) : ?>
                                <div class="warning">Email atau Password Salah!</div>
                            <?php endif; ?>
                            <!-- BUTTON -->
                            <div class="row mt-1">
                                <div class="col col-8"></div>
                                 
                                <div class="daftar">Belum punya akun? <a href="register.php">Daftar sekarang</a></div>
                                <!-- SUBMIT -->
                                <div class="col align-end">
                                    <button type="submit" name="login" class="btn">Masuk</button>
                                </div>
                                <!-- AKHIR SUBMIT -->
                            </div>
                            <!-- AKHIR BUTTON -->
                        </form>
                </div>
            </section>


            <div class="scroll-up">
                <a href="#logo">&and;</a>
            </div>

            <!-- Buat footer -->
            <div class="footer">&copy; PT. Eka Mira Prima Sentosa</div>
        </div>
        <script src="script.js"></script>
    </body>
</html>
