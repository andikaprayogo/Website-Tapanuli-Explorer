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
    <title>Air Terjun Rampah (Aek Martolu)</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>

    <div class="header-image">
        <img src="Air Terjun Rampah (Aek Martolu).jpg" alt="Air Terjun Rampah (Aek Martolu)">
        <div class="header-text">
            <h1>Air Terjun Rampah (Aek Martolu)</h1>
            <p><a href="tapteng.php" style="color: white;">Tapteng</a> >> Air Terjun Rampah (Aek Martolu)</p>
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
    <h1>Air Terjun Rampah (Aek Martolu)</h1>
           <p>Air Terjun Rampah terletak di Desa Rampah, Kec. Sitahuis, Kab. Tapanuli Tengah, Sumatera Utara.</p>
           <p>Aek Martolu memiliki arti air terjun tiga tingkat, sesuai dengan bentuknya. Air tejun ini memiliki suasana yang asri dan membuat nyaman para pengunjung dengan hijaunya kawasan air terjun ini.</p>
           <p>Untuk bisa sampai ke lokasi tersebut, Anda perlu memakan waktu yang lama. Anda bisa melalui Jl. Sibolga – Tarutung. Lokasi tersebut berada di sekitar persimpangan Jalan Poriaha dan Desa Rampah dengan estimasi kurang lebih sekitar 10 menit kelokasi menggunakan kendaraan. Akan tetapi perjalanan 200 meter kedepan harus dilanjutkan dengan berjalan kaki atau ojek yang berada di persimpangan jalan. Hal ini dikarenakan jalan ke air terjun tersebut masih dalam tahap pengembangan. Harga tiket masuk ke air terjun ini kisaran 5 ribu rupiah per orang nya.</p>
        </div>

        <div class="about-us-container">
            <div id="photosContent" style="display: none;">
              <h1>Foto-Foto Wisata</h1>
              <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
              <img src="Air Terjun Rampah (Aek Martolu).jpg" width="450" height="400" alt="Photo 1">
              <img src="Air Terjun Rampah (Aek Martolu) 1.jpg" width="450" height="400" alt="Photo 2">
              <img src="Air Terjun Rampah (Aek Martolu) 2.jpg" width="450" height="400" alt="Photo 3">
              <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
            </div>
          
            <div id="mapsContent" style="display: none;">
              <h1>Lokasi Air Terjun Rampah (Aek Martolu)</h1>
              <!-- Konten peta -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3987.836807086143!2d98.8049147!3d1.8058328!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302ef58201f023db%3A0x282240f50ce7517f!2sAek%20Martolu!5e0!3m2!1sid!2sid!4v1701340096452!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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