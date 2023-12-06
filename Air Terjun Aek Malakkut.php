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
    <title>Air Terjun Aek Malakkut</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>

    <div class="header-image">
        <img src="Air Terjun Aek Malakkut.jpg" alt="Air Terjun Aek Malakkut">
        <div class="header-text">
            <h1>Air Terjun Aek Malakkut</h1>
            <p><a href="tapsel.php" style="color: white;">Tapsel</a> >> Air Terjun Aek Malakkut</p>
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
    <h1>Air Terjun Aek Malakkut</h1>
           <p>Salah satu air terjun yang mengundang kagum di Tapanuli Selatan adalah Aek Malakkut. Destinasi wisata ini memang menuntut perjuangan ekstra untuk mencapainya. Tersembunyi di Desa Marancar Gondang, Kecamatan Marancar, Kabupaten Tapanuli Selatan, Sumatera Utara, Aek Malakkut mempersembahkan keaslian alam yang jarang tersentuh.</p>
           <p>Tempat ini memamerkan kealamian yang masih terjaga, memaksa para wisatawan untuk menembus hutan dan berjalan kaki selama sekitar 2 jam. Meskipun perjalanan membutuhkan usaha, semua akan tergantikan oleh keajaiban dinding batu yang kokoh dan tanaman hijau yang mempesona, menggambarkan keindahan yang memanjakan mata.</p>
           <p>Melangkah ke tempat ini, setiap langkah dihargai dengan keaslian alam yang masih murni. Dinding batu yang berdiri tegap menciptakan pemandangan yang megah, sementara tanaman hijau merambat memberikan sentuhan hijau yang menyejukkan. Keunikan Aek Malakkut terletak pada kesulitan aksesnya, yang menjadikannya tempat yang hampir belum tersentuh oleh tangan manusia, menghadirkan pengalaman wisata yang autentik dan mengesankan.</p>
        </div>
   

        <div class="about-us-container">
            <div id="photosContent" style="display: none;">
              <h1>Foto-Foto Wisata</h1>
              <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
              <img src="Air Terjun Aek Malakkut 1.jpg" width="450" height="400" alt="Photo 1">
              <img src="Air Terjun Aek Malakkut 2.jpg" width="450" height="400" alt="Photo 2">
              <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
            </div>
          
            <div id="mapsContent" style="display: none;">
              <h1>Lokasi Air Terjun Aek Malakkut</h1>
              <!-- Konten peta -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15953.643649656617!2d99.146137!3d1.521892!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e9fa072d7f783%3A0x5241b5a2ce92c6c!2sAir%20Terjun%20Malakkut!5e0!3m2!1sid!2sid!4v1701262877887!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
<script src="Air Terjun Aek Malakkut.js"></script>


</body>
</html>