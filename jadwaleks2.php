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
                    <h3>Surabaya - Magelang</h3>
                </div>        
                <table class="content-table">
                    <thead>
                    <tr>
                        <th>Surabaya</th>
                        <th>Solo</th>
                        <th>Magelang</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>00.50</td>
                        <td>07.30</td>
                        <td>09.35</td>
                    </tr>
                    <tr>
                        <td>03.00</td>
                        <td>06.05</td>
                        <td>07.05</td>
                    </tr>
                    <tr>
                        <td>04.23</td>
                        <td>07.28</td>
                        <td>08.28</td>
                    </tr>
                    <tr>
                        <td>05.00</td>
                        <td>08.05</td>
                        <td>09.05</td>
                    </tr>
                    <tr>
                        <td>05.35</td>
                        <td>11.55</td>
                        <td>14.10</td>
                    </tr>
                    <tr>
                        <td>06.20</td>
                        <td>09.25</td>
                        <td>10.25</td>
                    </tr>
                    <tr>
                        <td>07.00</td>
                        <td>10.05</td>
                        <td>11.05</td>
                    </tr>
                    <tr>
                        <td>07.30</td>
                        <td>14.00</td>
                        <td>16.15</td>
                    </tr>
                    <tr>
                        <td>08.00</td>
                        <td>11.05</td>
                        <td>12.05</td>
                    </tr>
                    <tr>
                        <td>08.45</td>
                        <td>11.50</td>
                        <td>12.50</td>
                    </tr>
                    <tr>
                        <td>09.15</td>
                        <td>12.20</td>
                        <td>13.20</td>
                    </tr>
                    <tr>
                        <td>09.45</td>
                        <td>12.50</td>
                        <td>13.50</td>
                    </tr>
                    <tr>
                        <td>09.30</td>
                        <td>16.30</td>
                        <td>18.45</td>
                    </tr>
                    <tr>
                        <td>10.15</td>
                        <td>13.20</td>
                        <td>14.20</td>
                    </tr>
                    <tr>
                        <td>17.00</td>
                        <td>23.30</td>
                        <td>01.35</td>
                    </tr>
                    <tr>
                        <td>17.20</td>
                        <td>00.00</td>
                        <td>02.00</td>
                    </tr>
                    <tr>
                        <td>18.45</td>
                        <td>00.45</td>
                        <td>03.10</td>
                    </tr>
                    <tr>
                        <td>19.00</td>
                        <td>01.20</td>
                        <td>03.25</td>
                    </tr>
                    <tr>
                        <td>19.30</td>
                        <td>01.55</td>
                        <td>04.10</td>
                    </tr>
                    <tr>
                        <td>20.00</td>
                        <td>02.30</td>
                        <td>04.45</td>
                    </tr>
                    <tr>
                        <td>20.15</td>
                        <td>02.55</td>
                        <td>05.10</td>
                    </tr>
                    <tr>
                        <td>20.45</td>
                        <td>03.10</td>
                        <td>05.35</td>
                    </tr>
                    <tr>
                        <td>21.00</td>
                        <td>03.30</td>
                        <td>06.05</td>
                    </tr>
                    <tr>
                        <td>21.15</td>
                        <td>03.45</td>
                        <td>06.15</td>
                    </tr>
                    <tr>
                        <td>21.30</td>
                        <td>04.00</td>
                        <td>06.35</td>
                    </tr>
                    <tr>
                        <td>22.00</td>
                        <td>04.20</td>
                        <td>06.55</td>
                    </tr>
                    <tr>
                        <td>22.18</td>
                        <td>04.45</td>
                        <td>07.15</td>
                    </tr>
                    <tr>
                        <td>22.45</td>
                        <td>05.35</td>
                        <td>07.45</td>
                    </tr>
                    <tr>
                        <td>23.45</td>
                        <td>06.15</td>
                        <td>08.20</td>
                    </tr>
                </tbody>
                </table>
                <a href="ticketing.php" class="carijadwal">PESAN TIKET SEKARANG</a><br>
            </div>
             <div class="scroll-up1">
                <a href="jadwal2.php">&and;</a>
            </div>
            <!-- Buat footer -->
            <div class="footer">&copy; PT. Eka Mira Prima Sentosa</div>
        </div>
    </body>
</html>