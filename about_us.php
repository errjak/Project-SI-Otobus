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


            <div class="content">
                <div class="content-sidebar-wrapper">
                    <div class="main-content">
                        <!-- ABOUT US -->
                        <h1 id="about" class="about-title">About Us</h1>
                        <div class="des">
                            <h2 align="center">"Tulus Melayani Memberikan Yang Terbaik"</h2>
                            <h3 align="center">PT. EKA MIRA PRIMA SENTOSA</h3>
                        </div>

                        <div class="about">
                            <div class="profiles">
                                <div class="profile">
                                    <div class="imbBx">
                                        <img src="image/Faqih.png" alt="Muhammad Aulia Faqihuddin" />
                                    </div>
                                    <div class="about-content">
                                         <h2>Database Designer</h2>
                                        <p>Nama : M Aulia Faqihuddin</p>
                                        <p>Tempat, Tanggal Lahir : Lamongan, 31 Juli 2002</p>
                                    </div>
                                </div>

                                <div class="profile">
                                    <div class="imbBx">
                                        <img src="image/Chendy.png" alt="Chendy Tri Wardani" />
                                    </div>
                                    <div class="about-content">
                                        <h2>Project Leader</h2>
                                        <p>Nama : Chendy Tri Wardani</p>
                                        <p>Tempat, Tanggal Lahir : Surabaya, 01 April 2002</p>
                                    </div>
                                </div>

                                <div class="profile">
                                    <div class="imbBx">
                                        <img src="image/Dicky.png" alt="Dicky Ardianto" />
                                    </div>
                                    <div class="about-content">
                                        <h2>Design Analyst</h2>
                                        <p>Nama : Dicky Ardianto</p>
                                        <p>Tempat, Tanggal Lahir : Lamongan, 08 Mei 2001</p>
                                    </div>
                                </div>

                                <div class="profile">
                                    <div class="imbBx">
                                        <img src="image/Dio.png" alt="Dio Adya Wicaksono" />
                                    </div>
                                    <div class="about-content">
                                        <h2>Frontend Designer</h2>
                                        <p>Nama : Dio Adya Wicaksono</p>
                                        <p>Tempat, Tanggal Lahir : Surabaya, 04 Mei 2002</p>
                                    </div>
                                </div>

                                <div class="profile">
                                    <div class="imbBx">
                                        <img src="image/Dimas.png" alt="Dimas Mahardika" />
                                    </div>
                                    <div class="about-content">
                                        <h2>System Analyst</h2>
                                        <p>Nama : Dimas Mahardika</p>
                                        <p>Tempat, Tanggal Lahir : Surabaya, 06 September 2001</p>
                                    </div>
                                </div>

                                <div class="profile">
                                    <div class="imbBx">
                                        <img src="image/Andre.png" alt="Andrian Dwi Baitur Rizky" />
                                    </div>
                                    <div class="about-content">
                                        <h2>Backend Engineer</h2>
                                        <p>Nama : Andrian Dwi Baitur Rizky</p>
                                        <p>Tempat, Tanggal Lahir : Sidoarjo, 05 Maret 2002</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="scroll-up">
            <a href="#logo">&and;</a>
        </div>

        <!-- Buat footer -->
        <div class="footer">&copy; PT. Eka Mira Prima Sentosa</div>
    </body>
    <script src="script.js"></script>
</html>
