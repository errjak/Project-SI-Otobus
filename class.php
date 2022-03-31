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
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&family=Mukta:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="icon" href="image/logoeka.png">
        <title>Class - PT. Eka Mira Prima Sentosa</title>
        
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
            <div class="scroll-up">
                <a href="#logo">&and;</a>
            </div>
            <div class="title">
                <h1>CLASS</h1>
            </div>
            <div class="desc-title">
                Perusahaan otobus PT. EKA MIRA PRIMA SENTOSA menyediakan beberapa pilihan kelas yang dapat dipilih oleh penumpang, hal tersebut bertujuan untuk menambah kenyamanan penumpang ada saat perjalanan. Kelas yang disediakan oleh PT. EKA MIRA PRIMA SENTOSA yaitu ada kelas ekonomi dan kelas eksekutif. 
            </div>
            <div class="body-content">
                <div class="class-ekonomi">
                    <div class="image-ekonomi">
                        <img src="https://pariwisata.ekapatas.com/wp-content/uploads/2020/09/IMG_5966-min-683x1024.jpg" alt="Gambar Bus Ekonomi">
                        <div class="image-overlay">
                            <img src="https://pariwisata.ekapatas.com/wp-content/uploads/2020/09/IMG_5957-min-1024x576.jpg" alt="">
                        </div>
                    </div>
                    <div class="desc-ekonomi">
                        <div class="judul-desc">
                            <h2>Kelas Ekonomi</h2>
                        </div>
                        <div class="pengertian-desc">
                            <p class="paragraf 1">Kelas ekonomi merupakan kelas yang paling bawah serta memiliki sedikit fasilitas. Harga yang ditawarkan untuk sewa bus pariwisata ini juga tergolong murah. Model bus yang digunakan bus ekonomi adalah bus berukuran sedang dan besar menggunakan mesin depan atau belakang. Bus kelas ekonomi biasanya memiliki kapasitas penumpang sekitar 59 orang.</p>
                            <p class="paragraf 2">Konfigurasi kursi penumpang 3-2, maka terkadang penumpang harus duduk berdempetan dengan penumpang yang lain ketika kondisi bus sedang penuh. Hal tersebut terkadang membuat penumpang merasa tidak nyaman.</p>
                            <p class="paragraf 3">Jika Anda memiliki bus ekonomi dengan AC, maka Anda akan melihat konfigurasi tempat duduk yang berbeda, yaitu 2-2. Hal ini tentu dapat membuat penumpang dapat duduk dengan lebih nyaman. Selain itu, jumlah kapasitas penumpang bus dengan AC juga berbeda dengan bus ekonomi pada umumnya, yaitu hanya sekitar 49 orang saja.</p>
                        </div>
                    </div>
                </div>
                <div class="class-eksekutif">
                    <div class="desc-eksekutif">
                        <div class="judul-desc">
                            <h2>Kelas Eksekutif</h2>
                        </div>
                        <div class="pengertian-desc">
                            <p class="paragraf 1">Bus kelas eksekutif memberikan lebih banyak fasilitas daripada bus VIP. Meskipun demikian, biaya yang harus dikeluarkan untuk menyewa bus kelas eksekutif tentu juga jauh lebih tinggi daripada bus VIP. Bus ini memiliki fasilitas serta fitur yang canggih sehingga disebut sebagai bus elite untuk transportasi darat.</p>
                            <p class="paragraf 2">Bus eksekutif memiliki desain interior yang lebih mewah daripada bus eksekutif. Selain itu, bus eksekutif biasanya juga akan menyediakan kursi yang dapat diatur secara fleksibel serta memiliki jarak yang cukup luas dengan kursi lainnya. </p>
                            <p class="paragraf 3">Fasilitas lain yang dapat dinikmati oleh penumpang bus eksekutif seperti TV LED, WiFi toilet, makanan ringan, makanan prasmanan,  full AC, toilet, recleaning seat, TV/DVD, GPS, dan smoking area. Di setiap kursi penumpang juga telah disediakan layar LCD sebagai fasilitas hiburan. Dengan fasilitas-fasilitas tersebut tentu Anda akan merasa nyaman.</p>
                        </div>
                    </div>
                    <div class="image-eksekutif">
                        <img src="https://pariwisata.ekapatas.com/wp-content/uploads/2020/09/IMG_6009-min-1024x576.jpg" alt="Gambar Bus Eksekutif">
                        <div class="image-overlay">
                            <img src="https://pariwisata.ekapatas.com/wp-content/uploads/2020/09/IMG_6013-min-576x1024.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- Buat footer -->
            <div class="footer">&copy; PT. Eka Mira Prima Sentosa</div>
        </div>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    </body>
    <script src="script.js"></script>
</html>