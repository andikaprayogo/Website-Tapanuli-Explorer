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
    <title>Aek Sijorni</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>

    <div class="header-image">
        <img src="Aek Sijorni.jpg" alt="Aek Sijorni">
        <div class="header-text">
            <h1>Aek Sijorni</h1>
            <p><a href="tapsel.php" style="color: white;">Tapsel</a> >> Aek Sijorni</p>
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
    <h1>Aek Sijorni</h1>
            <p>Aek Sijorni, destinasi alam yang terletak di Desa Aek Libung, Kecamatan Sayurmatingi, Kabupaten Tapanuli Selatan, mengundang para pengunjung untuk menikmati keindahan air terjun bertingkat di tengah hamparan pohon kelapa yang rapat. Terletak sekitar 30 km dari Kota Padang Sidempuan menuju Mandailing Natal, tempat ini menawarkan pesona alam yang memesona.</p>
            <p>Air terjun bertingkat di Aek Sijorni menawarkan kejernihan air yang konstan, berkat aliran sungai yang melintasi batu codas tanpa mengandung lumpur. Lingkungan sekitarnya dipenuhi dengan rimbunan pohon kelapa yang menambahkan kesan alami dan segar. Untuk mencapai tempat ini, pengunjung harus melintasi jembatan gantung di atas Sungai Sayur Matinggi dengan membayar tiket masuk sebesar Rp. 2.000,-.</p>
            <p>Keunikan Aek Sijorni terletak pada perjalanan menuju lokasi pemandian, yang melibatkan melewati beberapa kebun masyarakat. Setiap melewati kebun tersebut, pengunjung diharuskan membayar Rp. 2.000,-, dan proses ini terulang sekitar 4 kali. Meskipun terdengar unik, pengalaman ini menjadi bagian dari petualangan menuju keindahan alam Aek Sijorni.</p>
            <p>Tempat ini sangat ramai, terutama pada hari libur, dan mencapai puncak kunjungan saat hari lebaran. Asal nama "Aek Sijorni" berasal dari bahasa Batak, di mana "aek" berarti air, dan "sijorni" berarti bersih. Sesuai dengan namanya, aliran air di tempat ini selalu mempertahankan kejernihan, bahkan saat debit air sedang tinggi. Sehingga, pengunjung dapat menikmati keindahan alam yang menyegarkan di Aek Sijorni, membuat setiap kunjungan menjadi pengalaman yang tak terlupakan.</p>
        </div>

        <div class="about-us-container">
            <div id="photosContent" style="display: none;">
              <h1>Foto-foto Wisata</h1>
              <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
              <img src="Aek Sijorni 1.jpg" width="450" height="400" alt="Photo 1">
              <img src="Aek Sijorni 2.jpg" width="450" height="400" alt="Photo 2">
              <img src="Aek Sijorni 3.jpg" width="450" height="400" alt="Photo 3">
              <img src="Aek Sijorni 4.jpg" width="450" height="400" alt="Photo 4">
              <img src="Aek Sijorni 5.jpg" width="450" height="400" alt="Photo 5">
              <img src="Aek Sijorni 6.jpg" width="450" height="400" alt="Photo 6">
              <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
            </div>
          
            <div id="mapsContent" style="display: none;">
              <h1>Lokasi Aek Sijorni</h1>
              <!-- Konten peta -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15956.023187833509!2d99.4226297!3d1.1563422!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302bf94000000001%3A0x5f35af9bf398199c!2sAek%20Sijorni!5e0!3m2!1sid!2sid!4v1701259325853!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
<script src="Aek Sijorni.js"></script>


</body>
</html>