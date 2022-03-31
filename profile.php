 <?php
    session_start();
    require 'functions.php';

    if (!isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
    }

    $id = $_COOKIE["id"];

    $query = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");

    $result = mysqli_fetch_assoc($query);

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
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="style.css" type="text/css" />
     <link rel="icon" href="image/logoeka.png">
     <title>Profile - PT. Eka Mira Prima Sentosa</title>
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
                     <a href="index.php">Home</a>
                     <a href="logout.php">Logout</a>
                 </div>
             </div>
         </nav>

         <section class="content">
             <div class="content-sidebar-wrapper">
                 <div class="main-content">
                     <!-- TOP WRAPPER -->
                     <!-- <div class="top-warapper align-center">
                         <div id="evaluation">
                             <h1>Profile</h1>
                         </div>
                     </div> -->
                     <!-- AKHIR TOP WRAPPER -->

                     <!-- BOTTOM COMMENT -->

                     <!-- AKHIR BOTTOM COMMENT -->
                     <h2 class="title2">User Profile</h2>
                     <br>

                     <div class="card2">
                         <a href="https://imgbb.com/"><img src="https://i.ibb.co/9cCKF5d/user.png" alt="user" border="0" width="15%"></a>
                         <br>
                         <br>
                         <h1 class="title3">
                             <?= $result["nama"]; ?>
                         </h1>
                         <br>
                         <p class="title4">
                             <?= $result["email"]; ?>
                         </p>
                         <p class="title5">
                             <?= $result["telepon"]; ?>
                         </p>
                         <p><a href="index.php" class="title6">Home</a></p>
                     </div>
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
 </body>
 <script src="script.js"></script>

 </html>