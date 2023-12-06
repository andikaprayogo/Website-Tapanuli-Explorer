<?php
session_start();

// Tampilkan bagian navbar

// navbar.php
include 'navbar.php';

// Panggil fungsi tampilkanNavbar
tampilkanNavbar();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pulau kalimantung.css">
    <title>Gunung Sibual-Buali</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>

    <div class="header-image">
        <img src="Gunung Sibual-Buali.jpg" alt="Gunung Sibual-Buali">
        <div class="header-text">
            <h1>Gunung Sibual-Buali</h1>
            <p><a href="tapsel.php" style="color: white;">Tapsel</a> >> Gunung Sibual-Buali</p>
        </div>
    </div>


    <div class="button-container">
        <button id="detailsButton" class="styled-button">Details</button>
        <button id="photosButton" class="styled-button">Photos</button>
        <button id="mapsButton" class="styled-button">Maps</button>
    </div>


  <div class="about-us-container">
    <div class="about-us-content">
  <div id="detailsContent">
    <h1>Gunung Sibual-Buali</h1>
            <p>Sibual-buali, gunung stratovolcano yang menjulang di Tapanuli Selatan, Sumatera Utara, merupakan destinasi yang menarik dengan ciri khas sebagai gunung berapi kerucut atau gunung berapi komposit.</p>
            <p>Terletak di ujung selatan Bukit Barisan Sumatera Utara, kawasan sekitar Gunung Sibual-buali menawarkan keunikan dan keindahan yang dapat dinikmati oleh para pendaki selama perjalanan mendaki. Daerah ini dipenuhi dengan pesona alam yang memukau, menambah daya tarik bagi para pengunjung yang mencari petualangan.</p>
            <p>Dengan ketinggian mencapai sekitar 1.819 mdpl (meter di atas permukaan air laut), Gunung Sibual-buali bukan hanya sebuah tantangan bagi para pendaki, tetapi juga rumah bagi berbagai jenis flora dan fauna. Sebagian dari mereka bahkan termasuk dalam kategori endemik, menjadi penanda kekayaan biodiversitas yang dimiliki oleh gunung ini.</p>
            <p>Melalui pendakian ke puncaknya, pengunjung dapat merasakan keunikan ekosistem gunung ini serta menyaksikan keindahan alam yang tersebar di sekitar Gunung Sibual-buali. Sebuah pengalaman mendaki yang tidak hanya menantang fisik, tetapi juga membawa penemuan terhadap keanekaragaman hayati yang unik dan langka di kawasan tersebut.</p>
        </div>
    

        <div class="about-us-container">
            <div id="photosContent" style="display: none;">
              <h1>Foto-Foto Wisata</h1>
              <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
              <img src="Gunung Sibual-Buali.jpg" width="450" height="400" alt="Photo 1">
              <img src="Gunung Sibual-Buali 1.webp" width="450" height="400" alt="Photo 2">
              <img src="Gunung Sibual-Buali 2.jpg" width="450" height="400" alt="Photo 3">
              <img src="Gunung Sibual-Buali 3.jpg" width="450" height="400" alt="Photo 3">
              <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
            </div>
          
            <div id="mapsContent" style="display: none;">
              <h1>Lokasi Gunung Sibual-Buali</h1>
              <!-- Konten peta -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15953.38850022156!2d99.255!3d1.55599995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302c2114e00a7639%3A0x71a26dae70c1ae5f!2sGn.%20Sibualbuali!5e0!3m2!1sid!2sid!4v1701262113719!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
              </div>
          </div>
          
          <script>
              // Fungsi untuk menampilkan atau menyembunyikan konten
              function showContent(contentId) {
                  // Semua konten dihide terlebih dahulu
                  document.getElementById('detailsContent').style.display = 'none';
                  document.getElementById('photosContent').style.display = 'none';
                  document.getElementById('mapsContent').style.display = 'none';
          
                  // Tampilkan konten yang diinginkan
                  document.getElementById(contentId).style.display = 'block';
              }
          
              // Tambahkan event listener untuk tombol Details
              document.getElementById('detailsButton').addEventListener('click', function() {
                  showContent('detailsContent');
              });
          
              // Tambahkan event listener untuk tombol Photos
              document.getElementById('photosButton').addEventListener('click', function() {
                  showContent('photosContent');
              });
          
              // Tambahkan event listener untuk tombol Maps
              document.getElementById('mapsButton').addEventListener('click', function() {
                  showContent('mapsContent');
              });
          
              // Tampilkan konten details saat halaman dimuat
              document.addEventListener('DOMContentLoaded', function() {
                  showContent('detailsContent');
              });
          </script>
            

<!-- Bootstrap JS dan jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

<!-- JavaScript Kustom -->
<script src="Sibual-Buali.js"></script>


</body>
</html>