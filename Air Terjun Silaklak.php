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
    <title>Air Terjun Silaklak</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>

    <div class="header-image">
        <img src="Air Terjun Silaklak.jpg" alt="Air Terjun Silaklak">
        <div class="header-text">
            <h1>Air Terjun Silaklak</h1>
            <p><a href="tapteng.php" style="color: white;">Tapteng</a> >> Air Terjun Silaklak</p>
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
    <h1>Air Terjun Silaklak</h1>
           <p>Air terjun Silaklak berada di Jalan Sibolga-Barus, Desa Unte Mungkur III, Kecamatan Kolang, Kabupaten Tapanuli Utara. Jika ditempuh dari pusat ibukota Kabupaten Tapanuli Utara, yaitu Pandan, pengunjung akan butuh waktu 60 menit untuk mencapainya.</p>
           <p>Perjalanan dari tempat parkir ke air terjun Silaklak memerlukan waktu sekitar 20 menit. Meskipun perjalanan ini mungkin melelahkan dan menantang dengan jalur berjalan yang cukup sulit, para pengunjung dapat menikmati keindahan alam dengan pepohonan yang rimbun sepanjang perjalanan.</p>
           <p>Kindahan air terjun Silaklak sungguh luar biasa. Suasana yang sangat eksotis dapat membawa ketenangan bagi siapa pun yang menyaksikannya. Kabut air yang berputar-putar menambah kesegaran udara di sekitarnya. Tebing batu yang mengepung air terjun menawarkan tantangan untuk dijelajahi. Menurut informasi dari penduduk lokal, tebing tersebut sering kali menjadi destinasi pendakian, terutama bagi mereka yang mencari madu. Di sekitar area tebing, terdapat banyak pepohonan yang menjadi tempat bersarangnya lebah madu.</p>
        </div>

        <div class="about-us-container">
            <div id="photosContent" style="display: none;">
              <h1>Foto-Foto Wisata</h1>
              <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
              <img src="Air Terjun Silaklak.jpg" width="450" height="400" alt="Photo 1">
              <img src="Air Terjun Silaklak 1.jpg" width="450" height="400" alt="Photo 2">
              <img src="Air Terjun SIlaklak 2.jpg" width="450" height="400" alt="Photo 3">
              <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
            </div>
          
            <div id="mapsContent" style="display: none;">
              <h1>Lokasi Air Terjun Silaklak</h1>
              <!-- Konten peta -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.766727960829!2d98.7088661!3d1.8374909999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e58f6cd1c3197%3A0x936631ee24eaebc4!2sAIR%20TERJUN%20SILAKLAK%2CGOTTING!5e0!3m2!1sid!2sid!4v1701340351607!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
<script src="Cekdam Pargarutan.js"></script>


</body>
</html>