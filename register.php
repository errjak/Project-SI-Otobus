<?php 
require 'functions.php';

if (isset($_POST["register"])) {
    
    if (register($_POST) > 0) {
        echo "<script>
                    alert('Registrasi Berhasil');
                    document.location.href = 'login.php';
                </script>";
    }else {
        mysqli_error($conn);
        $empassFalse = true;
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
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&family=Mukta:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css" />
        <link rel="icon" href="image/logoeka.png">
        <title>Daftar - PT. Eka Mira Prima Sentosa</title>
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
                    <li><a href="login.php">Login</a></li>
                </ul>
            </nav>
            <section class="content">
                <div class="content-sidebar-wrapper">
                    <div id="register" class="main-content register">
                        <h1>Register</h1>
                        <form name="myForm" action="" method="post" onsubmit="return validasi()">
                            <!-- NAMA -->
                            <div class="row mt-1">
                                <div class="col col-2 align-end"><label for="nama">Nama :</label></div>
                                <div class="col col-10 relative">
                                    <input type="text" id="nama" class="form-control" name="nama" required />
                                </div>
                            </div>
                            <!-- AKHIR NAMA -->
                            <!-- No. Telepon -->
                            <div class="row">
                                <div class="col col-2 align-end"><label for="telepon">No. Telp :</label></div>
                                <div class="col col-10 relative">
                                    <input type="text" id="telepon" class="form-control" name="telepon" required/>
                                </div>
                            </div>
                            <!-- AKHIR No. Telepon -->

                            <!-- EMAIL -->
                            <div class="row mt-2">
                                <div class="col col-2 align-end"><label for="email">Email :</label></div>
                                <div class="col col-10 relative">
                                    <input type="text" id="email" class="form-control placeholder-left" placeholder="@gmail.com" name="email" required/>
                                </div>
                            </div>
                            <!-- AKHIR EMAIL -->
                            <!-- CONFIRM EMAIL -->
                            <div class="row">
                                <div class="col col-2 align-end"><label for="confirmEmail">Konfirmasi Email :</label></div>
                                <div class="col col-10 relative">
                                    <input type="text" id="confirmEmail" class="form-control" name="email2" required/>
                                </div>
                            </div>
                            <!-- AKHIR CONFIRM EMAIL -->
                            <!-- PASSWORD -->
                            <div class="row">
                                <div class="col col-2 align-end"><label for="password">Password :</label></div>
                                <div class="col col-10 relative">
                                    <input type="password" id="password" class="form-control" name="password" required />
                                    <div id="toggle-pass" onclick="showPass()"></div>
                                </div>
                            </div>
                            <!-- AKHIR PASSWORD -->
                            <!-- CONFIRM PASSWORD -->
                            <div class="row">
                                <div class="col col-2 align-end"><label for="confirmPassword">Konfirmasi Password :</label></div>
                                <div class="col col-10 relative">
                                    <input type="password" id="confirmPassword" class="form-control" name="password2" required/>
                                    <div id="toggle-pass2" onclick="showPass2()"></div>
                                </div>
                            </div>
                            <!-- AKHIR CONFIRM PASSWORD -->
                            <!-- BUTTON -->
                            <div class="row mt-1">
                                <div class="col col-8"></div>
                                <?php 
                                    if (isset($empassFalse)) {
                                        echo '<span>Email atau Password Tidak Sama!</span>';
                                    }
                                ?>
                                <div class="col align-end">
                                    <button type="submit" name="register" class="btn">Daftar</button>
                                </div>
                                <!-- AKHIR SUBMIT -->
                            </div>
                            <!-- AKHIR BUTTON -->
                        </form>
                    </div>

                    <!-- Buat sidebar -->
                    <div class="sidebar">
                        <!-- visit us -->
                        <div class="visitus">
                            <p class="sidebar-label">Visit us :</p>
                            <div class="img-socmed">
                                <a href="https://twitter.com/POEKAMIRA"><img src="./image/twitter.png" alt="" class="socmed twitter" /></a>
                                <a href="https://www.instagram.com/ekapatas/"><img src="./image/ig2.png" alt="" class="socmed ig" /></a>
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
                        <div class="sidebar-about">
                            <p class="sidebar-label">About PT. Eka Mira Prima Sentosa :</p>
                            <p>
                                PT. Eka-Mira Prima Sentosa adalah salah satu perusahaan otobus (PO) 
                                antar kota antar provinsi dan pariwisata yang berbasis di Kota Mojokerto, 
                                Jawa Timur serta memiliki kantor cabang dan pool pusat di Kabupaten Sidoarjo. 
                                Bersama dengan Sumber Group, bus ini menjadi salah satu pemain tetap di jalur 
                                tengah Surabaya-Yogyakarta dan beberapa kota lain. Perusahaan ini merupakan 
                                perusahaan otobus yang cukup besar di Jawa Timur yang saat ini sudah memiliki 
                                ratusan unit armada yang dibagi menjadi 2 kelas yaitu: Ekonomi dan Eksekutif. 
                                Perusahaan ini memiliki 2 jenis nama armada yaitu Eka untuk kelas eksekutif 
                                dan Mira yang melayani kelas ekonomi. 
                            </p>
                        </div>
                    </div>
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
