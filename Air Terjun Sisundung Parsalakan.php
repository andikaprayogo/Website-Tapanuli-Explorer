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
    <title>Air Terjun Sisundung Parsalakan</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>

    <div class="header-image">
        <img src="Air Terjun Sisundung Parsalakan.jpg" alt="Air Terjun Sisundung Parsalakan">
        <div class="header-text">
            <h1>Air Terjun Sisundung Parsalakan</h1>
            <p><a href="tapsel.php" style="color: white;">Tapsel</a> >> Air Terjun Sisundung Parsalakan</p>
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
    <h1>Air Terjun Sisundung Parsalakan</h1>
           <p>Air Terjun Sisundung Parsalakan, terletak di Desa Sisundung, Kecamatan Angkola Barat, Kabupaten Tapanuli Selatan, menjadi sebuah surga tersembunyi yang dapat diakses sekitar 2 km dari jalan lintas Sidimpuan Sibolga. Meskipun dapat dijangkau dengan kendaraan roda dua hingga tempat parkir, pengalaman sejati dimulai dengan berjalan kaki melalui jalan setapak, melewati pesona persawahan dan kebun salak milik warga.</p>
           <p>Air Terjun Sisundung Parsalakan, juga dikenal sebagai Air Terjun Ganda, menghadirkan dua aliran air yang mengalir berdampingan, menciptakan keindahan alam yang memukau di Desa Sisundung. Kedua air terjun ini menjatuhkan air bersih dan jernih dari bebatuan tinggi dan besar, menciptakan kolam kecil yang sama. Meskipun belum mendapatkan pengelolaan resmi, keindahan alamnya tetap terjaga dalam kesejukan dan ketenangan alamiahnya.</p>
           <p>Karena belum resmi dikelola, keberadaan Air Terjun Sisundung Parsalakan tetap memancarkan keaslian yang memikat. Tanpa campur tangan manusia yang berlebihan, pengunjung dapat menikmati keindahan alam yang masih murni. Meski akses yang cukup menantang membuatnya jarang dikunjungi, hal ini justru mempertahankan keaslian alam dan ketenangan di sekitar air terjun.</p>
           <p>Panorama alami dan mempesona yang ditawarkan oleh Air Terjun Sisundung Parsalakan menciptakan pengalaman yang tak terlupakan. Udara pegunungan yang sejuk dan segar menjadi penyegar bagi pikiran yang lelah dari kesibukan kota. Kolam air terjun yang bersih dan jernih juga menawarkan tempat yang ideal untuk mandi dan berenang, memberikan kesempatan untuk merasakan kelezatan alam dalam ketenangan dan keindahan yang masih alami.</p>
        </div>
   

        <div class="about-us-container">
            <div id="photosContent" style="display: none;">
              <h1>Foto-Foto Wisata</h1>
              <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
              <img src="Air Terjun Sisundung Parsalakan.jpg" width="450" height="400" alt="Photo 1">
              <img src="Air Terjun Sisundung Parsalakan 1.jpg" width="450" height="400" alt="Photo 2">
              <img src="Air Terjun Sisundung Parsalakan 2.jpg" width="450" height="400" alt="Photo 3">
              <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
            </div>
          
            <div id="mapsContent" style="display: none;">
              <h1>Lokasi Air Terjun Sisundung Parsalakan</h1>
              <!-- Konten peta -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15954.549641918682!2d99.18841!3d1.3940558!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302ea7264fe8c933%3A0x4c5077918c0410e2!2sAir%20Terjun%20Sisundung!5e0!3m2!1sid!2sid!4v1701262736776!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
<script src="Air Terjun Sisundung Parsalakan.js"></script>


</body>
</html>