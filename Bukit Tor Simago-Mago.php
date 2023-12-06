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
    <title>Bukit Tor Simago-Mago</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>
    
    <div class="header-image">
        <img src="Bukit Tor Simago-Mago.jpg" alt="Bukit Tor Simago-Mago">
        <div class="header-text">
            <h1>Bukit Tor Simago-Mago</h1>
            <p><a href="tapsel.php" style="color: white;">Tapsel</a> >> Bukit Tor Simago-Mago</p>
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
    <h1>Bukit Tor Simago-mago</h1>
            <p>Tor Simago-mago, terletak di daerah Sipirok, Kabupaten Tapanuli Selatan, adalah destinasi wisata yang hampir tenggelam namun kini mengalami transformasi positif melalui upaya pembangunan oleh pemerintah setempat.</p>
            <p>Dengan arti 'Bukit Si Hilang-Hilang' dalam bahasa Batak, Tor Simago-mago memiliki kisah menarik yang melekat pada namanya. Legenda lokal menceritakan tentang sepasang muda-mudi yang menghilang secara misterius saat sedang bercinta di bukit ini, dan tak pernah terlihat lagi.</p>
            <p>Wisata ini telah dikenal selama puluhan tahun, dan kini mengalami perbaikan yang signifikan oleh pemerintah daerah. Upaya tersebut mencakup perbaikan jalan masuk, penambahan lampu penerangan jalan, penyediaan air bersih, serta fasilitas MCK. Gazebo dan gapura masuk turut dibangun untuk meningkatkan kenyamanan pengunjung.</p>
            <p>Tor Simago-mago menjadi tempat yang ideal untuk menikmati udara segar sambil menatap hijaunya hamparan rumput, menciptakan suasana yang menenangkan bagi keluarga. Wahana hiburan juga tersedia di tempat ini, memberikan keseruan khususnya bagi anak-anak yang berkunjung.</p>
            <p>Melalui pembangunan ini, Tor Simago-mago bukan hanya menjadi saksi bisu legenda lokal, tetapi juga destinasi yang mengundang pengunjung untuk menikmati keindahan alam sambil merasakan kenyamanan fasilitas modern. Sebuah tempat di mana cerita mistis bergabung dengan keindahan alam yang direvitalisasi, menciptakan pengalaman wisata yang unik dan tak terlupakan.</p>
        </div>


        <div class="about-us-container">
            <div id="photosContent" style="display: none;">
              <h1>Foto-Foto Wisata</h1>
              <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
              <img src="Bukit Tor Simago-Mago.jpg" width="450" height="400" alt="Photo 1">
              <img src="Bukit Tor Simago-mago 1.jpg" width="450" height="400" alt="Photo 2">
              <img src="Bukit Tor Simago-mago 2.jpg" width="450" height="400" alt="Photo 3">
              <img src="Bukit Tor Simago-mago 3.jpg" width="450" height="400" alt="Photo 4">
              <img src="Bukit Tor Simago-mago 4.jpg" width="450" height="400" alt="Photo 5">
              <img src="Bukit Tor Simago-mago 5.jpg" width="450" height="400" alt="Photo 6">
              <img src="Bukit Tor Simago-mago 6.jpg" width="450" height="400" alt="Photo 7">
              <img src="Bukit Tor Simago-mago 7.jpg" width="450" height="400" alt="Photo 8">
              <img src="Bukit Tor Simago-mago 8.jpg" width="450" height="400" alt="Photo 9">
              <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
            </div>
          
            <div id="mapsContent" style="display: none;">
              <h1>Lokasi Bukit Tor Simago-Mago</h1>
              <!-- Konten peta -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15953.346880103325!2d99.2891932!3d1.561493!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302c23e624469c09%3A0x22c87c6690c17711!2sTor%20Simago-Mago!5e0!3m2!1sid!2sid!4v1701259443778!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
<script src="Bukit Tor Simago-Mago.js"></script>


</body>
</html>