<?php 

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

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&family=Mukta:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css" />
        <link rel="icon" href="image/logoeka.png">
        <title>About Us - PT. Eka Mira Prima Sentosa</title>
    </head>
    <body>
        <div class="container">
            <!-- Navigation Bar -->
            <nav class="logo-nav">
                <div class="logo" id="logo"><a href="index.php">EKA MIRA</a></div>
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
                <?php 
                    session_start();

                    if (!isset($_SESSION["login"])) {
                        echo '<div class="reg-button">
                        <a href="login.php">Login</a>
                    </div>';
                    }else {
                        echo '<div class="dropdownout">
                        <button onclick="myFunction()" class="dropbtn">HALLO</button>
                        <div id="myDropdown" class="dropdownout-content">
                            <a href="profile.php">Profil</a>
                            <a href="logout.php">Logout</a>
                        </div>
                    </div>';
                    }
                ?>
            </nav>
            <div class="contentjadwal">
                <div class="content-headlinejadwal">
                    <h3>Surabaya - Yogyakarta</h3>
                </div>        
                <table class="content-table">
                <thead>
                    <tr>
                        <th>Surabaya</th>
                        <th>Estimasi sampai Solo</th>
                        <th>Estimasi sampai Jogja</th>
                    </tr>
                </thead>
                    <tbody align="center">
                        <tr>
                            <td>13.20</td>
                            <td>17.30</td>
                            <td>19.00</td>
                        </tr>
                        <tr>
                            <td>17.20</td>
                            <td>22.45</td>
                            <td>00.00</td>
                        </tr>
                    </tbody>
                </table>
                <a href="ticketing.php" class="carijadwal">PESAN TIKET SEKARANG</a><br>
            </div>
             <div class="scroll-up1">
                <a href="jadwal.php">&and;</a>
            </div>
            <!-- Buat footer -->
            <div class="footer">&copy; PT. Eka Mira Prima Sentosa</div>
        </div>
    </body>
</html>