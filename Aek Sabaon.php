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
    <title>Aek Sabaon</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>

    <div class="header-image">
        <img src="Aek Sabaon.jpg" alt="Aek Sabaon">
        <div class="header-text">
            <h1>Aek Sabaon</h1>
            <p><a href="tapsel.php" style="color: white;">Tapsel</a> >> Aek Sabaon</p>
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
    <h1>Aek Sabaon</h1>
           <p>Aek Sabaon, destinasi wisata yang terletak di dekat kaki Gunung Lubuk Raya, Kecamatan Marancar, Kabupaten Tapanuli Selatan, Sumut, menjadi magnet bagi para pengunjung, terutama wisatawan internasional, meski masih tergolong baru.</p>
           <p>Keelokan panorama alam yang terbebas dari kebisingan menjadi daya tarik utama bagi para pelancong yang ingin menikmati ketenangan dan keindahan alam. Tempat ini juga menawarkan bangunan yang memukau, dengan kebanyakan struktur yang terbuat dari kaca. Pengunjung setempat sering menggambarkan bangunan-bangunan ini sebagai pemandangan desa yang seperti di luar negeri.</p>
           <p>Keunikan tempat ini semakin terpancar karena bangunan-bangunan ini menghadap ke danau buatan. Suasananya yang sejuk, terutama di pagi hari ketika kabut turun, menambah daya tarik tersendiri.</p>
           <p>Para wisatawan dapat mengabadikan momen di sekitar danau yang dihuni oleh ikan-ikan berwarna-warni. Tidak hanya itu, beberapa rumah kecil khas Tapanuli Selatan juga turut memperkaya suasana, menciptakan atmosfer yang semakin autentik dan memikat. Selain itu, panorama hutan hijau yang lebat hingga ke kejauhan memberikan latar belakang yang menakjubkan. Semua ini menciptakan suasana yang mendukung untuk bersantai dan menikmati keindahan alam.</p>
        </div>
    
        <div class="about-us-container">
            <div id="photosContent" style="display: none;">
              <h1>Foto-foto Wisata</h1>
              <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
              <img src="Aek Sabaon 1.jpg" width="450" height="400" alt="Photo 1">
              <img src="Aek Sabaon 2.jpg" width="450" height="400" alt="Photo 2">
              <img src="Aek Sabaon 3.jpg" width="450" height="400" alt="Photo 3">
              <img src="Aek Sabaon 4.jpg" width="450" height="400" alt="Photo 4">
              <img src="Aek Sabaon 5.jpg" width="450" height="400" alt="Photo 5">
              <img src="Aek Sabaon 6.jpg" width="450" height="400" alt="Photo 6">
              <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
            </div>
          
            <div id="mapsContent" style="display: none;">
              <h1>Lokasi Aek Sabaon</h1>
              <!-- Konten peta -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15953.661179793857!2d99.22114855!3d1.5195204999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302c2046ffffffff%3A0x55d4766a6e793687!2sWisata%20Aek%20Sabaon!5e0!3m2!1sid!2sid!4v1701262999260!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
<script src="Aek Sabaon.js"></script>


</body>
</html>