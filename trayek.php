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
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital@1&family=Mukta:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
        <link rel="stylesheet" href="style.css" type="text/css" />
        <link rel="icon" href="image/logoeka.png">
        <title>Trayek - PT. Eka Mira Prima Sentosa</title>
        
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

            <div class="middleDrop">
                <div class="menuDrop">
                    <li class="itemDrop" id="profileDrop">
                        <a href="#profileDrop" class="btn"><i><img src="https://i.ibb.co/X7ntWbJ/school-bus.png" alt="school-bus" border="0" width="20px"></i><Em>Ekonomi</Em></a>
                        <div class="smenuDrop">
                            <a target="_blank" href="https://www.google.com/maps/dir/Surabaya,+Kota+SBY,+Jawa+Timur/Yogyakarta,+Kota+Yogyakarta,+Daerah+Istimewa+Yogyakarta/@-7.5269889,110.9987322,9z/data=!3m1!4b1!4m16!4m15!1m5!1m1!1s0x2dd7fbf8381ac47f:0x3027a76e352be40!2m2!1d112.7520883!2d-7.2574719!1m5!1m1!1s0x2e7a5787bd5b6bc5:0x21723fd4d3684f71!2m2!1d110.3694896!2d-7.7955798!2m1!5e0!3e0?hl=id">
                                Surabaya - Madiun - Solo - Yogyakarta</a>
                        </div>
                    </li>
                    <li class="itemDrop" id="messagesDrop">
                        <a href="#messagesDrop" class="btn"><i><img src="https://i.ibb.co/X7ntWbJ/school-bus.png" alt="school-bus"
                                border="0" width="20px"></i><Em>Eksekutif</Em></a>
                        <div class="smenuDrop">
                            <a target="_blank" href="https://www.google.com/maps/dir/Surabaya,+Kota+SBY,+Jawa+Timur/Yogyakarta,+Kota+Yogyakarta,+Daerah+Istimewa+Yogyakarta/@-7.5269889,110.9987322,9z/data=!3m1!4b1!4m16!4m15!1m5!1m1!1s0x2dd7fbf8381ac47f:0x3027a76e352be40!2m2!1d112.7520883!2d-7.2574719!1m5!1m1!1s0x2e7a5787bd5b6bc5:0x21723fd4d3684f71!2m2!1d110.3694896!2d-7.7955798!2m1!5e0!3e0?hl=id">
                                Surabaya - Yogyakarta
                            </a>
                            
                            <a target="_blank" href="https://www.google.com/maps/dir/Surabaya,+Kota+SBY,+Jawa+Timur/Magelang,+Kota+Magelang,+Jawa+Tengah/@-7.4224778,110.921925,9z/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x2dd7fbf8381ac47f:0x3027a76e352be40!2m2!1d112.7520883!2d-7.2574719!1m5!1m1!1s0x2e7a8f5d736ef381:0xa0645d8ec4966c24!2m2!1d110.2176941!2d-7.4797342!3e0?hl=id">
                                Surabaya - Magelang
                            </a>
                            
                            <a target="_blank" href="https://www.google.com/maps/dir/Surabaya,+Kota+SBY,+Jawa+Timur/Purwokerto,+Kabupaten+Banyumas,+Jawa+Tengah/@-7.3911079,109.8718077,8z/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x2dd7fbf8381ac47f:0x3027a76e352be40!2m2!1d112.7520883!2d-7.2574719!1m5!1m1!1s0x2e655c3136423d1d:0x4027a76e352e4a0!2m2!1d109.2396366!2d-7.4242782!3e0?hl=id">
                                Surabaya - Purwokerto
                            </a>
                            
                            <a target="_blank" href="https://www.google.com/maps/dir/Surabaya,+Kota+SBY,+Jawa+Timur/Cilacap,+Kabupaten+Cilacap,+Jawa+Tengah/@-7.4006458,109.7348761,8z/data=!4m15!4m14!1m5!1m1!1s0x2dd7fbf8381ac47f:0x3027a76e352be40!2m2!1d112.7520883!2d-7.2574719!1m5!1m1!1s0x2e650c8d0abed43b:0x4027a76e3530950!2m2!1d109.023521!2d-7.6982991!3e0!5i1?hl=id">
                                Surabaya - Cilacap
                            </a>
                            
                            <a target="_blank" href="https://www.google.com/maps/dir/Surabaya,+Kota+SBY,+Jawa+Timur/Purbalingga,+Kec.+Purbalingga,+Kabupaten+Purbalingga,+Jawa+Tengah/@-7.2456694,109.9041578,8z/data=!4m15!4m14!1m5!1m1!1s0x2dd7fbf8381ac47f:0x3027a76e352be40!2m2!1d112.7520883!2d-7.2574719!1m5!1m1!1s0x2e6559d75fd2e9bb:0x4027a76e352e5e0!2m2!1d109.3604296!2d-7.385735!3e0!5i1?hl=id">
                                Surabaya - Purbalingga
                            </a>
                            
                            <a target="_blank" href="https://www.google.com/maps/dir/Surabaya,+Kota+SBY,+Jawa+Timur/Semarang,+Kota+Semarang,+Jawa+Tengah/@-7.299128,111.0235582,9z/data=!3m1!4b1!4m14!4m13!1m5!1m1!1s0x2dd7fbf8381ac47f:0x3027a76e352be40!2m2!1d112.7520883!2d-7.2574719!1m5!1m1!1s0x2e708b4d3f0d024d:0x1e0432b9da5cb9f2!2m2!1d110.4381254!2d-7.0051453!3e0?hl=id">
                                Surabaya - Semarang
                            </a>
                            
                            <a target="_blank" href="https://www.google.com/maps/dir/Surabaya,+Kota+SBY,+Jawa+Timur/Bandung,+Kota+Bandung,+Jawa+Barat/@-7.2597829,109.0615734,8z/data=!4m17!4m16!1m5!1m1!1s0x2dd7fbf8381ac47f:0x3027a76e352be40!2m2!1d112.7520883!2d-7.2574719!1m5!1m1!1s0x2e68e6398252477f:0x146a1f93d3e815b2!2m2!1d107.6191228!2d-6.9174639!2m1!2b1!3e0!5i2?hl=id">
                                Surabaya - Bandung
                            </a>
                        </div>
                    </li>
                </div>
            </div>
                                
            <!-- Buat footer -->
            <div class="footer">&copy; PT. Eka Mira Prima Sentosa</div>
        </div>
    </body>
    <script src="script.js"></script>
</html>