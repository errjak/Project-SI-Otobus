<?php
session_start();
require 'functions.php';

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$id = $_COOKIE["id"];
$asal = $_GET["asal"];
$tujuan = $_GET["tujuan"];
$query = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");

$result = mysqli_fetch_assoc($query);

if ($_GET["kelas"] === "Ekonomi") {
    $getData = mysqli_query($conn, "SELECT harga FROM ekonomi WHERE asal = '$asal' AND tujuan = '$tujuan'");
}elseif ($_GET["kelas"] === "Eksekutif") {
    $getData = mysqli_query($conn, "SELECT harga FROM eksekutif WHERE asal = '$asal' AND tujuan = '$tujuan'");
}

$data = mysqli_fetch_assoc($getData);
    
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
    <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="icon" href="image/logoeka.png">
    <title>Ticketing - PT. Eka Mira Prima Sentosa</title>
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
                <li>
                    <div class="dropdown">
                        <a href="class.php">Class</a>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <a href="jadwal.php">Jadwal</a>
                        <div class="dropdown-content">
                            <div class="ekonomi">
                                <a href="jadwal.php">Jadwal Bus Ekonomi (MIRA)</a>
                            </div>
                            <div class="patas">
                                <a href="jadwal2.php">Jadwal Bus Eksekutif (EKA)</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <a href="trayek.php">Trayek</a>
                    </div>
                </li>
            </ul>
            <div class="dropdownout">
                <button onclick="myFunction()" class="dropbtn">HALLO</button>
                <div id="myDropdown" class="dropdownout-content">
                    <a href="profile.php">Profil</a>
                    <a href="logout.php">Logout</a>
                </div>
            </div>
        </nav>

        <section class="content">
            <div class="content-sidebar-wrapper">
                <div class="main-content">
                    <!-- TOP WRAPPER -->
                    <!-- AKHIR TOP WRAPPER -->

                    <!-- BOTTOM COMMENT -->
                    <h2 class="title2">Checkout</h2>
                    <br>
                    <div class="card2cekout">
                        <a href="https://imgbb.com/"><img src="https://i.ibb.co/pQTDc3x/paper-plane.png" alt="user" border="0" width="15%"></a>
                        <br>
                        <br>
                        <h1 class="title3cekout">
                            E - Ticket Bus
                        </h1>
                        <br>
                        <table class="cekout">
                            <tr class="title4C">
                                <td>Keberangkatan</td>
                                <td>:</td>
                                <td><?= $_GET["asal"]; ?></td>
                            </tr>
                            <tr class="title4C">
                                <td>Tujuan</td>
                                <td>:</td>
                                <td><?= $_GET["tujuan"]; ?></td>
                            </tr>
                            <tr class="title4C">
                                <td>Tanggal</td>
                                <td>:</td>
                                <td><?= $_GET["tanggal"]; ?></td>
                            </tr>
                            <tr class="title5C">
                                <td>Kelas</td>
                                <td>:</td>
                                <td><?= $_GET["kelas"]; ?></td>
                            </tr>
                            <tr class="title5C">
                                <td>Harga</td>
                                <td>:</td>
                                <td><?= $data["harga"]; ?></td>
                            </tr>
                        </table>
                        <p><a href="index.php" class="title6cekout">Home</a></p>
                    </div>
                    <!-- AKHIR BOTTOM COMMENT -->
                </div>
                <!-- Buat sidebar -->
            </div>
        </section>
        <div class="scroll-up">
            <a href="#logo">&and;</a>
        </div>

        <!-- Buat footer -->
        <div class="footer">&copy; PT. Eka Mira Prima Sentosa</div>
    </div>
</body>
<script src="script.js"></script>

</html>