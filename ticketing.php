 <?php
    session_start();

    if (!isset($_SESSION["login"])) {
        header("Location: login.php");
        exit;
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
                     <div class="top-warapper align-center">
                         <div id="evaluation">
                             <h1>Ticketing</h1>
                         </div>
                     </div>
                     <!-- AKHIR TOP WRAPPER -->

                     <!-- BOTTOM COMMENT -->
                     <div class="content-wrapper">
                         <div id="comment" class="comment-wrapper">
                             <span class="line"></span>
                             <br>
                             <h2>Pemesanan Tiket Perjalanan</h2>
                             <br>

                             <form class="comment-form" action="cekout.php" method="GET">
                                 <label for="username">Kota Awal :</label>
                                 <select name="asal" id="kota">
                                     <option value="Surabaya">Surabaya</option>
                                     <option value="Jombang">Jombang</option>
                                     <option value="Nganjuk">Nganjuk</option>
                                     <option value="Madiun">Madiun</option>
                                     <option value="Ngawi">Ngawi</option>
                                     <option value="Solo">Solo</option>
                                     <option value="Semarang">Semarang</option>
                                     <option value="Yogyakarta">Yogyakarta</option>
                                     <option value="Magelang">Magelang</option>
                                     <option value="Kebumen">Kebumen</option>
                                     <option value="Purwokerto">Purwokerto</option>
                                     <option value="Temanggung">Temanggung</option>
                                     <option value="Banjarnegara">Banjarnegara</option>
                                     <option value="Purbalingga">Purbalingga</option>
                                     <option value="Bandung">Bandung</option>
                                 </select>
                                 <h2></h2>
                                 <label for="surel">Tujuan :</label>
                                 <select name="tujuan" id="kota">
                                     <option value="Surabaya">Surabaya</option>
                                     <option value="Jombang">Jombang</option>
                                     <option value="Nganjuk">Nganjuk</option>
                                     <option value="Madiun">Madiun</option>
                                     <option value="Ngawi">Ngawi</option>
                                     <option value="Solo">Solo</option>
                                     <option value="Semarang">Semarang</option>
                                     <option value="Yogyakarta">Yogyakarta</option>
                                     <option value="Magelang">Magelang</option>
                                     <option value="Kebumen">Kebumen</option>
                                     <option value="Purwokerto">Purwokerto</option>
                                     <option value="Temanggung">Temanggung</option>
                                     <option value="Banjarnegara">Banjarnegara</option>
                                     <option value="Purbalingga">Purbalingga</option>
                                     <option value="Bandung">Bandung</option>
                                 </select>
                                 <h2></h2>
                                 <label for="comment-area">Tanggal Keberangkatan :</label>
                                 <input type="date" class="form-control1" id="comment-area" name="tanggal">
                                 <label for="kelas">Kelas :</label><br>
                                 <input type="radio" name="kelas" class="form-control" id="kls1" value="Ekonomi">
                                 <label for="kls1">Ekonomi</label><br>
                                 <input type="radio" name="kelas" class="form-control" id="kls2" value="Eksekutif">
                                 <label for="kls2">Eksekutif</label><br><br>
                                 <p class="peringatan">(*Peringatan)</p>
                                 <p class="peringatan">Sebelum memesan tiket mohon dibaca dulu jadwalnya</p><br>
                                 <button type="submit" class="cari" name="cari">Pesan Tiket</button>
                             </form>
                         </div>
                     </div>
                     <!-- AKHIR BOTTOM COMMENT -->
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