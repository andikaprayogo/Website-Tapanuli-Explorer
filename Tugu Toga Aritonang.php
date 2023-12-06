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
    <title>Tugu Toga Aritonang</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>
    
    <div class="header-image">
        <img src="Tugu Toga Aritonang.jpg" alt="Tugu Toga Aritonang">
        <div class="header-text">
            <h1>Tugu Toga Aritonang</h1>
            <p><a href="Taput.php" style="color: white;">Taput</a> >> Tugu Toga Aritonang</p>
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
    <h1>Tugu Toga Aritonang</h1>
           <p>Tugu Toga Aritonang, sebagai destinasi wisata baru di Tapanuli Utara, terus menarik perhatian para pengunjung. Dibangun oleh Marga Aritonang, keturunan langsung dari Raja Lontung ke-6, tugu ini menjadi bukti kekayaan sejarah dan budaya yang dijaga dengan baik. Setiap harinya, tugu ini disesaki oleh wisatawan dari luar Tapanuli dan juga masyarakat lokal.</p>
           <p>Selain menjadi landmark bersejarah, Tugu Toga Aritonang juga menawarkan pemandangan terbaik untuk menikmati keindahan Danau Toba. Dikelilingi oleh bukit hijau yang rindang dan hamparan biru Danau Toba, tempat ini menciptakan suasana yang memukau. Keindahan alam di sekitar tugu membuat kunjungan ke tempat ini menjadi pengalaman yang tak terlupakan.</p>
        </div>

        <div class="about-us-container">
            <div id="photosContent" style="display: none;">
              <h1>Foto-Foto Wisata</h1>
              <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
              <img src="Tugu Toga Aritonang.jpg" width="450" height="400" alt="Photo 1">
              <img src="Tugu Toga Aritonang 1.jpg" width="450" height="400" alt="Photo 2">
              <img src="Tugu Toga Aritonang 2.jpg" width="450" height="400" alt="Photo 3">
              <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
            </div>
          
            <div id="mapsContent" style="display: none;">
              <h1>Lokasi Tugu Toga Aritonang</h1>
              <!-- Konten peta -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.492667371706!2d98.93930927371557!3d2.339535857598381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e1bec3c64b765%3A0x26feb237ac3e7d97!2zVHVndSBUb2dhIEFyaXRvbmFuZyB8IOGvluGvruGvjuGvriDhr5bhr6zhr44g4a-A4a-S4a-q4a-W4a-s4a-J4a-w!5e0!3m2!1sid!2sid!4v1701267970206!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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