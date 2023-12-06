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
    <title>Situs Hindu Hopong</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>

    <div class="header-image">
        <img src="Situs Hindu Hopong.jpg" alt="Situs Hindu Hopong">
        <div class="header-text">
            <h1>Situs Hindu Hopong</h1>
            <p><a href="Taput.php" style="color: white;">Taput</a> >> Situs Hindu Hopong</p>
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
    <h1>Situs Hindu Hopong</h1>
           <p>Situs Hindu Hopong menjadi salah satu destinasi wisata religi yang terkenal di Tapanuli Utara, menawarkan jejak-jejak bersejarah agama Hindu di pulau Sumatra. Situs ini diyakini dibangun pada masa pemerintahan Kerajaan Sriwijaya, dan kini menjadi saksi bisu perkembangan agama Hindu di Nusantara, khususnya di Tapanuli Utara.</p>
           <p>Saat mengunjungi Situs Hindu Hopong, Anda akan disuguhi pemandangan beragam patung dan batuan bersejarah, menyiratkan kisah masa lalu yang kaya. Ini adalah pengalaman wisata yang tidak hanya memperkaya pengetahuan Anda, tetapi juga membawa Anda menjelajahi warisan budaya dan agama di wilayah tersebut.</p>
           <p>Pastikan untuk membawa seorang pemandu wisata yang kompeten, karena mereka dapat memberikan panduan yang mendalam dan wawasan baru, memperkaya liburan Anda dengan informasi yang berharga.</p>
        </div>

        <div class="about-us-container">
            <div id="photosContent" style="display: none;">
              <h1>Foto-Foto Wisata</h1>
              <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
              <img src="Situs Hindu Hopong.jpg" width="450" height="400" alt="Photo 1">
              <img src="Situs Hindu Hopong 1.jpg" width="450" height="400" alt="Photo 2">
              <img src="Situs Hindu Hopong 2.jpg" width="450" height="400" alt="Photo 3">
              <img src="Situs Hindu Hopong 3.jpg" width="450" height="400" alt="Photo 4">
              <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
            </div>
          
            <div id="mapsContent" style="display: none;">
              <h1>Lokasi Situs Hindu Hopong</h1>
              <!-- Konten peta -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.9708028795353!2d99.22796907371595!3d1.7437013601859424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302c2bd595a7a9a7%3A0x3c54a36fa78be301!2sDusun%20Hopong!5e0!3m2!1sid!2sid!4v1701267683455!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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