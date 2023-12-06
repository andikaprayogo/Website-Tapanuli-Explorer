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
    <title>Huta Ginjang</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>

    <div class="header-image">
        <img src="Huta Ginjang.jpg" alt="Huta Ginjang">
        <div class="header-text">
            <h1>Huta Ginjang</h1>
            <p><a href="Taput.php" style="color: white;">Taput</a> >> Huta Ginjang</p>
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
    <h1>Huta Ginjang</h1>
           <p>Eksplorasi petualangan di Tapanuli Utara belum lengkap tanpa mengunjungi Huta Ginjang. Nama yang sendiri sudah mengundang rasa penasaran ini menyimpan keindahan panorama yang sulit diungkapkan dengan kata-kata. Perbukitan yang hijau seakan berpadu sempurna dengan keberadaan Danau Toba di sebelahnya, menciptakan lanskap alam yang begitu memukau.</p>
           <p>Berlokasi di ketinggian 1.550 mdpl, Huta Ginjang menjadi surganya para penggiat paralayang. Keindahan alam yang memukau di sekitarnya membuatnya menjadi lokasi favorit untuk berlatih dan menjalani olahraga paralayang. Tak hanya para penggiat olahraga ekstrem, bahkan Presiden Joko Widodo pun pernah menyempatkan diri mengunjungi tempat ini, semata untuk menikmati kecantikan pemandangan Danau Toba. Keseruan dan pesona Huta Ginjang tak dapat diabaikan begitu saja.</p>
        </div>

        <div class="about-us-container">
            <div id="photosContent" style="display: none;">
              <h1>Foto-Foto Wisata</h1>
              <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
              <img src="Huta Ginjang.jpg" width="450" height="400" alt="Photo 1">
              <img src="Huta Ginjang 1.jpg" width="450" height="400" alt="Photo 2">
              <img src="Huta Ginjang 2.jfif" width="450" height="400" alt="Photo 3">
              <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
            </div>
          
            <div id="mapsContent" style="display: none;">
              <h1>Lokasi Huta Ginjang</h1>
              <!-- Konten peta -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31892.49436086884!2d98.95441777404079!3d2.3150897816030103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e1b023a996c47%3A0x9c5750426f12a369!2sHuta%20Ginjang%2C%20Kec.%20Muara%2C%20Kabupaten%20Tapanuli%20Utara%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1701268133872!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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