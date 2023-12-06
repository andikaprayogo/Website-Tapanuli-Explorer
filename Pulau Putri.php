<?php
session_start();

// Tampilkan bagian navbar

// navbar.phps
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
    <title>Pulau Putri</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>

    <div class="header-image">
        <img src="Pulau Putri.jpg" alt="Pulau Putri">
        <div class="header-text">
            <h1>Pulau Putri</h1>
            <p><a href="tapteng.php" style="color: white;">Tapteng</a> >> Pulau Putri</p>
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
    <h1>Pulau Putri</h1>
            <p>Pulau Putri merupakan sebuah pulau kecil yang secara administrasi masuk dalam wilayah Kecamatan Tapian Nauli, Kabupaten Tapanuli Tengah, Sumatera Utara. Pulau ini juga masih masuk kedalam wilayah Kepulauan Mursala. Pulau kecil yang terletak sekitar 12 mil dari Sibolga dikenal dengan sebutan Pulau Putri, meskipun sebelumnya lebih sering disebut sebagai pulau Pasir Putih.</p>
            <p>Walaupun hanya memiliki luas sekitar 2,5 hektar, Pulau Putri tetap menyajikan pemandangan yang menakjubkan. Dari pulau ini, Anda juga dapat menikmati pemandangan dekat Pulau Mursala. Jika Anda pernah menonton film King Kong, Pulau Mursala ini adalah lokasi syutingnya.</p>
            <p>Di pulau ini anda juga bisa melakukan snorkling dan bisa menyaksikan ikan-ikan kecil yang lucu seperti ikan nemo. Anda juga bisa menikmati keindahan terumbu karang yang berada di Pulau Putri.</p>
            <p>Untuk mencapai lokasi ini, pertama-tama Anda harus mencapai Sibolga. Dari Medan, perjalanan bisa dilakukan melalui udara atau darat. Perjalanan darat membutuhkan waktu sekitar 10 jam dari Medan ke Sibolga. Jika memilih perjalanan udara, Anda akan turun di Bandara Pinangsori, Sibolga atau bisa melalui bandara Silangit, Siborong-borong membutuhkan waktu sekitar 3 jam untuk bisa samapi di Kota Sibolga.</p>
            <p>Anda dapat berkunjung ke Pulau Putri menggunakan perahu (boat) yag berada di Pelabuhan Sibolga. Waktu tempuh untuk menyebrang ke Pulau Putri sekitar 1 jam. Sesampainya di Pulau Putri Anda bisa menikmati keindahan pasir putih,  air laut yang biru jernih dan biru serta hamparan ombak yang landai. </p>
        </div>

        <div class="about-us-container">
            <div id="photosContent" style="display: none;">
              <h1>Foto-Foto Wisata</h1>
              <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
              <img src="Pulau Putri.jpg" width="450" height="400" alt="Photo 1">
              <img src="Pulau Putri 1.jpg" width="450" height="400" alt="Photo 2">
              <img src="Pulau Putri 2.jpg" width="450" height="400" alt="Photo 3">
              <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
            </div>
          
            <div id="mapsContent" style="display: none;">
              <h1>Lokasi Pulau Putri</h1>
              <!-- Konten peta -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.1713794339653!2d98.5986001!3d1.6463229!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302ee4c66c903343%3A0xdcbdbcb1d180851e!2sPantai%20Pulau%20Putri!5e0!3m2!1sid!2sid!4v1701306831683!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
<script src="Pulau Putri.js"></script>

</body>
</html>