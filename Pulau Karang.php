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
    <title>Pulau Karang</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>

    <div class="header-image">
        <img src="Pulau Karang.jpg" alt="Pulau Karang">
        <div class="header-text">
            <h1>Pulau Karang</h1>
            <p><a href="tapteng.php" style="color: white;">Tapteng</a> >> Pulau Karang</p>
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
    <h1>Pulau Karang</h1>
           <p>Pulau Karang, terletak di kecamatan Barus, Kabupaten Tapanuli Tengah, Sumatera Utara, menyajikan keindahan bawah laut yang mengagumkan. Pantai berpasir bersih dan pemandangan laut yang alami membuatnya menjadi tujuan yang menarik. Meskipun belum sangat dikembangkan sebagai destinasi wisata, pulau ini menawarkan pengalaman yang autentik.</p>
           <p>Bagi yang berencana mengunjungi Pulau Karang, perjalanan dimulai dari kota Barus. Dari sana, perjalanan dilanjutkan ke Desa Darussalam, sebelum akhirnya menyeberang ke pulau tersebut menggunakan kapal. Pulau Karang, meski belum sepenuhnya dijelajahi sebagai destinasi wisata, memberikan suasana pulau yang tenang dan sepi.</p>
           <p>Perlu diingat bahwa fasilitas di Pulau Karang masih terbatas, dan tidak banyak pemandu wisata yang tersedia. Transportasi utama untuk mencapai pulau ini adalah dengan kapal nelayan milik warga setempat. Meskipun demikian, pengalaman menaiki kapal ini menjadi bagian petualangan yang menarik.</p>
           <p>Setibanya di Pulau Karang, wisatawan dapat menikmati eksplorasi pulau dengan berjalan kaki. Pulau ini memiliki diameter sekitar dua kilometer, sehingga dapat dielilingi dalam waktu singkat. Pemandangan alam yang menakjubkan, laut yang luas, dan pasir putih yang lembut menciptakan pengalaman yang mengundang untuk menikmati keindahan alam pulau yang masih alami ini.</p>
        </div>

        <div class="about-us-container">
            <div id="photosContent" style="display: none;">
              <h1>Foto-foto Wisata</h1>
              <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
              <img src="Pulau Karang 1.jpg" width="450" height="400" alt="Photo 1">
              <img src="Pulau Karang 2.jpg" width="450" height="400" alt="Photo 2">
              <img src="Pulau Karang 3.jpg" width="450" height="400" alt="Photo 3">
              <img src="Pulau Karang 4.jpg" width="450" height="400" alt="Photo 4">
              <img src="Pulau Karang 5.jpg" width="450" height="400" alt="Photo 5">
              <img src="Pulau Karang 6.jpg" width="450" height="400" alt="Photo 6">
              <img src="Pulau Karang 7.jpg" width="450" height="400" alt="Photo 7">
              <img src="Pulau Karang 8.jpg" width="450" height="400" alt="Photo 8">
              <img src="Pulau Karang 9.jpg" width="450" height="400" alt="Photo 9">
              <img src="Pulau Karang 10.jpg" width="450" height="400" alt="Photo 10">
              <img src="Pulau Karang 11.jpg" width="450" height="400" alt="Photo 11">
              <img src="Pulau Karang 12.jpg" width="450" height="400" alt="Photo 12">
              <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
            </div>
          
            <div id="mapsContent" style="display: none;">
              <h1>Lokasi Pulau Karang</h1>
              <!-- Konten peta -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15949.806157823727!2d98.3516667!3d1.97361105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302fb02cc485e021%3A0x39d90dd597513deb!2sPulau%20Karang!5e0!3m2!1sid!2sid!4v1701306916285!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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