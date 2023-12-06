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
    <title>Pulau Poncan</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>

    <div class="header-image">
        <img src="Pulau Poncan.jpg" alt="Pulau Poncan">
        <div class="header-text">
            <h1>Pulau Poncan</h1>
            <p><a href="tapteng.php" style="color: white;">Tapteng</a> >> Pulau Poncan</p>
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
    <h1>Pulau Poncan</h1>
           <p>Lokasi Pulau Poncan ini berada di daerah Pasar Belakang, Sibolga, Tapanuli Tengah, Sumatra Utara. Untuk sampai ke pulau ini, Anda harus menuju ke pelabuhan Sibolga terlebih dahulu.</p>
           <p>Pulau Poncan ini memiliki kecantikan dan keindahan alam sehingga pengunjung bisa nyaman untuk melepas penat. Lingkungannya juga bersih. Disetiap sudut, Anda bisa menemukan banyak tempat bersantai. Pihak pengelola pulai juga menyediakan tempat-tempat bersantai bagi para pengunjung untuk menikmati suasana pantai yang menyenangkan.</p>
           <p>Anda juga bisa menikmati keindahan air laut yang memiliki tanaman, biota lalut, kepiting, lobster, ikan karang dan masih banyak lagi. Pengunjung juga bisa menikmati keindahan tersebut dengan snorkeling ditempat ini.</p>
           <p>Pulau di Kabupaten Tapanuli Tengah ini sudah memiliki fasilitas umum yang lengkap. Seperti daftar fasilitas berikut ini:</p>
        <ul>
           <li>kamar mandi plus toilet</li>
           <li>area parkir kendaraan</li>
           <li>hotel atau penginapan</li>
           <li>gazebo</li>
           <li>pusat sewa perahu</li>
        </ul>
           <p>Untuk mencapai lokasi ini, pertama-tama Anda harus mencapai Sibolga. Dari Medan, perjalanan bisa dilakukan melalui udara atau darat. Perjalanan darat membutuhkan waktu sekitar 10 jam dari Medan ke Sibolga. Jika memilih perjalanan udara, Anda akan turun di Bandara Pinangsori, Sibolga atau bisa melalui bandara Silangit, Siborong-borong membutuhkan waktu sekitar 3 jam untuk bisa samapi di Kota Sibolga. Dari Sibolga, perjalanan selanjutnya menuju Pelabuhan Sibolga. Dari sana, Anda dapat melanjutkan perjalanan ke Pulau Poncan dengan menyewa speed boat. Jarak tempuh ke Pulau Poncan dari Pelabuhan sekitar 30 menit.</p>
        </div>

        <div class="about-us-container">
            <div id="photosContent" style="display: none;">
              <h1>Foto-Foto Wisata</h1>
              <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
              <img src="Pulau Poncan 1.jpg" width="450" height="400" alt="Photo 1">
              <img src="Pulau Poncan 2.jpg" width="450" height="400" alt="Photo 2">
              <img src="Pulau Poncan 3.jpg" width="450" height="400" alt="Photo 3">
              <img src="Pulau Poncan 4.jpg" width="450" height="400" alt="Photo 4">
              <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
            </div>
          
            <div id="mapsContent" style="display: none;">
              <h1>Lokasi Pulau Poncan</h1>
              <!-- Konten peta -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15952.14699596582!2d98.765392!3d1.712296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302ef3c19abf4b51%3A0x3f16c3614061024f!2sPulau%20Poncan!5e0!3m2!1sid!2sid!4v1701340514089!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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