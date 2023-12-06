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
    <title>Air Terjun Silima-Lima</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>

    <div class="header-image">
        <img src="Air Terjun Silima-Lima.jpg" alt="Air Terjun Silima-Lima">
        <div class="header-text">
            <h1>Air Terjun Silima-Lima</h1>
            <p><a href="tapsel.php" style="color: white;">Tapsel</a> >> Air Terjun Silima-Lima</p>
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
    <h1>Air Terjun Silima-Lima</h1>
            <p>Keindahan Air Terjun Silima-Lima sangat memikat dan menghipnotis pengunjung yang datang kesana.  Air Terjun Silima-Lima ini menyuguhkan potret alam yang luar biasa menakjubkan, sebuah air terjun yang dibentengi oleh dua pegunungan yang sangat terkenal di Tapanuli Selatan, yaitu Gunung Lubuk Raya dan Gunung Sibual-Buali.</p>
            <p>Kehebatan Air Terjun Silima-Lima terungkap ketika dilihat dari kejauhan, sebuah pancaran air setinggi 80 meter yang menjadikannya air terjun tertinggi di wilayah ini. Gemuruh air jatuhnya sudah terdengar dengan nyaring, menambahkan kesan dramatis pada pengalaman menyaksikan keindahan alam ini. Berlokasi di ketinggian sekitar 1.000 meter di atas permukaan laut, air terjun ini bukan hanya destinasi, melainkan sebuah karya seni alam yang memukau.</p>
            <p>Perjalanan menuju lokasi air terjun menuntut usaha dan semangat tinggi, karena akses melewati "tangga seribu" sepanjang sekitar 1 kilometer. Meskipun tantangan, tangga seribu menjadi lebih dari sekadar perjalanan, namun juga tempat untuk berfoto dan berselfie. Keamanan dan kenyamanan pengunjung dijamin dengan adanya pegangan besi di sisi tangga.</p>
            <p>Meski menuruni tangga seribu, perjalanan ini menawarkan keindahan yang luar biasa. Pemandangan pegunungan yang memukau dan udara segar mendampingi setiap langkah trekking. Seiring perjalanan, batu besar dengan narasi modern yang disebut "batu jodoh" menjadi daya tarik sendiri, menjadi spot selfie yang populer.</p>
            <p>Spot-spot menakjubkan untuk mengabadikan momen tersedia di sepanjang perjalanan, termasuk di jembatan kayu yang panjang dan eksotis. Jembatan ini, dengan latar belakang air terjun, menjadi lokasi fotografi yang sangat menarik dan menandakan kedekatan dengan destinasi utama.</p>
            <p>Untuk mencapai Air Terjun Silima-Lima dari Padang Sidempuan memerlukan waktu sekitar satu hingga 1,5 jam, dengan pemandangan yang memanjakan mata sepanjang perjalanan. Fasilitas di lokasi, mulai dari fasilitas trekking, wahana, hingga informasi bagi pengunjung, sudah tersedia dengan baik. Lokasi yang teratur ini menawarkan pengalaman wisata yang tak terlupakan bagi setiap pengunjung.</p>
        </div>
    

        <div class="about-us-container">
            <div id="photosContent" style="display: none;">
              <h1>Foto-foto Wisata</h1>
              <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
              <img src="Air Terjun Silima-Lima.jpg" width="450" height="400" alt="Photo 1">
              <img src="Air Terjun Silima-Lima 1.jpg" width="450" height="400" alt="Photo 2">
              <img src="Air Terjun Silima-Lima 2.jpg" width="450" height="400" alt="Photo 3">
              <img src="Air Terjun Silima-Lima 3.jpg" width="450" height="400" alt="Photo 4">
              <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
            </div>
          
            <div id="mapsContent" style="display: none;">
              <h1>Lokasi Air Terjun Silima-Lima</h1>
              <!-- Konten peta -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15953.556912256274!2d99.1701779!3d1.533572!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e9fcc8df38c47%3A0x3953f0fd9fd4a2b2!2sAir%20Terjun%20Silima-lima!5e0!3m2!1sid!2sid!4v1701262234613!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
<script src="Air Terjun Silima-Lima.js"></script>


</body>
</html>