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
    <title>Pantai Kalangan Indah</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>

    <div class="header-image">
        <img src="Pantai Kalangan Indah.jpg" alt="Pantai Kalangan Indah">
        <div class="header-text">
            <h1>Pantai Kalangan Indah</h1>
            <p><a href="tapteng.php" style="color: white;">Tapteng</a> >> Pantai Kalangan Indah</p>
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
    <h1>Pantai Kalangan Indah</h1>
           <p>Pantai Indah Kalangan atau sering disebut Pantai Kalangan yang terletak di daerah Pandan, Sibolga, Sumatra Utara.</p>
           <p>Keunikkan pantai ini terletak pada lokasinya yang terletak di dalam kawasan teluk. Teluk merujuk pada perairan yang menjorok ke daratan dan dikelilingi oleh daratan di tiga sisinya. Umumnya, pengunjung yang datang ke pantai ini adalah wisatawan domestik dari Padang Sidimpuan dan juga warga sekitar. Pantai ini dilengkapi dengan fasilitas seperti hotel, warung, dan gazebo. Para wisatawan dapat menikmati hari mereka di sana, duduk santai sepanjang hari sambil menantikan matahari terbenam.</p>
        </div>

        <div class="about-us-container">
            <div id="photosContent" style="display: none;">
              <h1>Foto-Foto Wisata</h1>
              <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
              <img src="Pantai Kalangan Indah.jpg" width="450" height="400" alt="Photo 1">
              <img src="Pantai Kalangan Indah 1.jpg" width="450" height="400" alt="Photo 2">
              <img src="Pantai Kalangan Indah 2.jpg" width="450" height="400" alt="Photo 3">
              <img src="Pantai Kalangan Indah 3.jpg" width="450" height="400" alt="Photo 4">
              <img src="Pantai Kalangan Indah 4.jpg" width="450" height="400" alt="Photo 5">
              <img src="Pantai Kalangan Indah 5.jpg" width="450" height="400" alt="Photo 6">
              <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
            </div>
          
            <div id="mapsContent" style="display: none;">
              <h1>Lokasi Pantai Kalangan Indah</h1>
              <!-- Konten peta -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3988.1366351433326!2d98.824992!3d1.6635991!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302ef2af9947a411%3A0x75e916a3d15592e!2sPANTAI%20KALANGAN%20INDAH!5e0!3m2!1sid!2sid!4v1701340259829!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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