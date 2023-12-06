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
    <title>Danau Marsabut</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>

    <div class="header-image">
        <img src="Danau Marsabut.jpg" alt="Danau Marsabut">
        <div class="header-text">
            <h1>Danau Marsabut</h1>
            <p><a href="tapsel.php" style="color: white;">Tapsel</a> >> Danau Marsabut</p>
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
    <h1>Danau Marsabut</h1>
           <p>Danau Marsabut, terletak di Kabupaten Tapanuli Selatan, menjadi destinasi kunjungan yang populer di kawasan tersebut. Lokasinya berada di Desa Bungo Bondar, Kecamatan Sipirok, tersembunyi di pedalaman dan dikelilingi oleh hutan Sipirok. Nama "Marsabut" berasal dari kata "markabut," menggambarkan keadaan danau yang selalu diselimuti oleh kabut.</p>
           <p>Meskipun Danau Marsabut memiliki daya tarik alami yang kuat, fasilitas di lokasi ini masih terbatas. Perlu perawatan dan pengembangan lebih lanjut agar dapat memberikan pengalaman yang memuaskan bagi para wisatawan.</p>
           <p>Akses menuju danau tidaklah mudah, dengan jalur yang cukup berliku dan minim fasilitas transportasi umum. Dari pusat pasar Sipirok, wisatawan dapat naik angkutan umum menuju simpang Bunga Bondar dengan ongkos sekitar Rp. 5.000. Dari sana, perjalanan dilanjutkan dengan berjalan kaki menanjak selama sekitar 2,5 jam atau menggunakan kendaraan pribadi.</p>
           <p>Selama perjalanan menuju Danau Marsabut, pengunjung akan melewati Pesantren Terpadu al-Aqsa dengan bangunan-bangunan yang indah. Sekitar 15 menit setelah meninggalkan pesantren, akan ada simpang ke kanan yang mengarah ke danau. Dari sini, perjalanan berlanjut dengan berjalan kaki selama sekitar 30 menit untuk mencapai Danau Marsabut. Meskipun aksesnya memerlukan usaha ekstra, keindahan alam danau yang diselimuti kabut membuat perjalanan ini sebanding dengan upaya yang dikeluarkan.</p>
        </div>
   

        <div class="about-us-container">
            <div id="photosContent" style="display: none;">
              <h1>Foto-Foto Wisata</h1>
              <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
              <img src="Danau Marsabut.jpg" width="450" height="400" alt="Photo 1">
              <img src="Danau Marsabut 1.jpg" width="450" height="400" alt="Photo 2">
              <img src="Danau Marsabut 2.jpg" width="450" height="400" alt="Photo 3">
              <img src="Danau Marsabut 3.jpg" width="450" height="400" alt="Photo 4">
              <img src="Danau Marsabut 4.jpg" width="450" height="400" alt="Photo 5">
              <img src="Danau Marsabut 5.jpg" width="450" height="400" alt="Photo 6">
              <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
            </div>
          
            <div id="mapsContent" style="display: none;">
              <h1>Lokasi Danau Marsabut</h1>
              <!-- Konten peta -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15952.831328556003!2d99.3459705!3d1.6280002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302c253d9a8ae7dd%3A0xd8982c0e285a97f8!2sDanau%20Marsabut!5e0!3m2!1sid!2sid!4v1701263079334!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
<script src="Danau Marsabut.js"></script>


</body>
</html>