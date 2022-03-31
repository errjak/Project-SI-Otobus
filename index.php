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
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="icon" href="image/logoeka.png">
        <title>PT. Eka Mira Prima Sentosa</title>
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

            <!-- Buat Judul -->
            <div class="banner">
                <p class="judul1">"Tulus Melayani</p>
                <p class="judul2">Memberikan Yang Terbaik"</p>
                <p class="judul3">PT. Eka Mira Prima Sentosa</p>
            </div>

            <!-- Buat Konten -->
            <div class="content">
                <div class="content-headline">
                    <h3>Information</h3>
                </div>
                <div class="content-sidebar-wrapper">
                    <div class="main-content">

                        <div class="category">
                            <div class="rupa" id="rupa">
                                <div class="img-container">
                                    <div class="card fotografi">
                                        <div class="card-overlay">
                                            <p>GPS</p>
                                        </div>
                                    </div>
                                    <div class="card poster">
                                        <div class="card-overlay">
                                            <p>SPEED LIMITER</p>
                                        </div>
                                    </div>
                                    <div class="card cctv">
                                        <div class="card-overlay">
                                            <p>CCTV</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="txt rupa">
                                    <div class="description-flex-wrapper">
                                    </div>
                                </div>
                            </div>
                            <div class="tari" id="tari">
                                <div class="txt tari">
                                </div>
                            </div>

                            <div class="musik" id="musik">
                                <div class="txt musik">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Buat sidebar -->
                    <div class="sidebar">
                        <!-- visit us -->
                        <div class="visitus">
                            <p class="sidebar-label">Visit us :</p>
                            <div class="img-socmed">
                                <a href="https://twitter.com/POEKAMIRA?s=20"><img src="./image/twitter.png" alt="" class="socmed twitter" /></a>
                                <a href="https://www.instagram.com/ekapatas"><img src="./image/ig2.png" alt="" class="socmed ig" /></a>
                            </div>
                        </div>
                        <!-- contact person -->
                        <div class="cp">
                            <p class="sidebar-label">Contact Person :</p>
                            <div class="cp-flex">
                                <a href="https://api.whatsapp.com/send/?phone=628176765000&text&app_absent=0"><img src="./image/wa.png" alt="" class="socmed wa" /></a>
                                <a href="https://api.whatsapp.com/send/?phone=628176765000&text&app_absent=0">+628176765000</a>
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
        </div>
    </body>
    <script src="script.js"></script>
</html>
