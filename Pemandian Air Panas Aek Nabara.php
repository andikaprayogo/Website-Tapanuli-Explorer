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
    <title>Pemandian Air Panas Aek Nabara</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>

    <div class="header-image">
        <img src="Pemandian Air Panas Aek Nabara.jpg" alt="Pemandian Air Panas Aek Nabara">
        <div class="header-text">
            <h1>Pemandian Air Panas Aek Nabara</h1>
            <p><a href="tapsel.php" style="color: white;">Tapsel</a> >> Pemandian Air Panas Aek Nabara</p>
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
    <h1>Pemandian Air Panas Aek Nabara</h1>
            <p>Pemandian Air Panas Aek Nabara, berlokasi di Desa Aek Nabara, Kecamatan Marancar, Kabupaten Tapanuli Selatan, telah menjadi destinasi unggulan bagi para wisatawan domestik. Daya tariknya melibatkan semua kalangan, dari yang muda hingga yang tua, bahkan keluarga-keluarga setempat berduyun-duyun menuju pemandian ini.</p>
            <p>Perjalanan menuju Aek Nabara sangat nyaman dengan jalan yang mulus, dan udara segar pegunungan menjadi penyemangat bagi para pengunjung. Pemandian air panasnya tidak hanya memberikan kesegaran, tetapi juga menawarkan pemandangan alam yang indah, memanjakan mata setiap pengunjung.</p>
            <p>Meskipun belum dikelola secara profesional, daya tarik pemandian ini tidak pernah surut, selalu ramai dengan pengunjung yang datang untuk menikmati kehangatan air panas. Keunikan tempat ini semakin diperkaya oleh pemandangan alam yang memesona di sekitarnya.</p>
            <p>Sebagian besar pengunjung datang dengan tujuan terapi dan pengobatan. Air panas di Aek Nabara dipercaya memiliki kemampuan menyembuhkan berbagai masalah kulit, karena kandungan fosfor dalam air diyakini dapat memberikan efek penyembuhan dan meningkatkan peredaran darah.</p>
            <p>Walau belum mendapat sentuhan profesional dalam pengelolaannya, daya tarik alamiah dan khasiat terapeutik pemandian Air Panas Aek Nabara tetap memikat hati para pengunjung. Suasana yang tenang dan kesejukan udara pegunungan semakin melengkapi pengalaman wisata yang dihadirkan di tempat ini.</p>
        </div>
    

        <div class="about-us-container">
            <div id="photosContent" style="display: none;">
              <h1>Foto-Foto Wisata</h1>
              <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
              <img src="Pemandian Air Panas Aek Nabara.jpg" width="450" height="400" alt="Photo 1">
              <img src="Pemandian Air Panas Aek Nabara 1.jpg" width="450" height="400" alt="Photo 2">
              <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
            </div>
          
            <div id="mapsContent" style="display: none;">
              <h1>Lokasi Pemandian Air Panas Aek Nabara</h1>
              <!-- Konten peta -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15953.43517239461!2d99.19775317726919!3d1.5498169749812423!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302c20926d0f3b19%3A0x153949727b309fad!2sAek%20Nabara%2C%20Kec.%20Marancar%2C%20Kabupaten%20Tapanuli%20Selatan%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1701262647533!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
<script src="Pemandian Air Panas Aek Nabara.js"></script>


</body>
</html>