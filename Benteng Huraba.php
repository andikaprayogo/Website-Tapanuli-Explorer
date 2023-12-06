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
    <title>Benteng Huraba</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>
    
    <div class="header-image">
        <img src="Benteng Huraba.jpg" alt="Benteng Huraba">
        <div class="header-text">
            <h1>Benteng Huraba</h1>
            <p><a href="tapsel.php" style="color: white;">Tapsel</a> >> Benteng Huraba</p>
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
    <h1>Benteng Huraba</h1>
           <p>Di Kabupaten Tapanuli Selatan, tersimpan sebuah saksi bisu dari kisah heroik bangsa Indonesia dalam meraih kemerdekaan dari cengkraman penjajah, yaitu Benteng Huraba. Lokasi bersejarah ini terletak di Desa Benteng Huraba, Kecamatan Batang Angkola, Kabupaten Tapanuli Selatan, Sumatra Utara.</p>
           <p>Sebagaimana namanya, wisata sejarah ini menghadirkan sebuah benteng yang teguh, menggambarkan arsitektur Belanda pada masa lalu. Peninggalan ini melibatkan meriam dan sejumlah peralatan perang lainnya, menciptakan atmosfer sejarah yang dapat dilihat dan dirasakan oleh pengunjung. Benteng Huraba menjadi saksi bisu dari perjuangan bangsa yang patut dihargai dan dipelajari oleh generasi saat ini.</p>
        </div>
    
        <div class="about-us-container">
            <div id="photosContent" style="display: none;">
              <h1>Foto-foto Wisata</h1>
              <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
              <img src="Benteng Huraba 1.jpg" width="450" height="400" alt="Photo 1">
              <img src="Benteng Huraba 2.jpg" width="450" height="400" alt="Photo 2">
              <img src="Benteng Huraba 3.jfif" width="450" height="400" alt="Photo 3">
              <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
            </div>
          
            <div id="mapsContent" style="display: none;">
              <h1>Lokasi Benteng Huraba</h1>
              <!-- Konten peta -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127646.82751782509!2d99.2540685!3d1.18615605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302bff6864f3e0e9%3A0xb4b27cc80f91272c!2sBenteng%20Huraba%2C%20Kec.%20Batang%20Angkola%2C%20Kabupaten%20Tapanuli%20Selatan%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1701263169787!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
<script src="Benteng Huraba.js"></script>


</body>
</html>