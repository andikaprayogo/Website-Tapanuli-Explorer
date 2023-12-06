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
    <title>Pulau Sorkam</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>

    <div class="header-image">
        <img src="Pulau Sorkam.jpg" alt="Pulau Sorkam">
        <div class="header-text">
            <h1>Pulau Sorkam</h1>
            <p><a href="tapteng.php" style="color: white;">Tapteng</a> >> Pulau Sorkam</p>
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
    <h1>Pulau Sorkam</h1>
           <p>Pulau Sorkam, yang terletak di Kabupaten Tapanuli Tengah, Sumatera Utara, menawarkan sejuta pesona alam yang menakjubkan. Pulau ini sering kali menjadi destinasi wisata yang disukai oleh para pelancong yang mencari keindahan alam yang belum terlalu terjamah.</p>
           <p>Pulau Sorkam dikelilingi oleh pantai yang memukau dengan pasir putih dan air laut yang jernih. Pantai-pantai di sekitar pulau ini menciptakan pemandangan yang memikat dan menawarkan kesempatan untuk menikmati keindahan bawah laut. Aktivitas snorkeling dan diving menjadi kegiatan favorit di sini, memungkinkan para pengunjung untuk menyaksikan keanekaragaman hayati bawah laut yang luar biasa.</p>
           <p>Pulau Sorkam juga dikenal dengan ekosistem mangrovenya yang indah. Hutan mangrove yang luas menjadi tempat hidup bagi berbagai jenis flora dan fauna unik. Melalui jalur-jalur kayu yang teratur, pengunjung dapat menjelajahi keanekaragaman hayati yang menarik dan merasakan kedamaian alam di dalam hutan mangrove.</p>
           <p>Tidak ada yang dapat mengalahkan kecantikan matahari terbenam di Pulau Sorkam. Para pengunjung sering berkumpul di tepi pantai atau bukit-bukit kecil untuk menyaksikan spektakulernya perubahan warna langit saat matahari perlahan-lahan tenggelam ke balik cakrawala.</p>
           <p>Untuk mencapai lokasi ini, pertama-tama Anda harus sampai ke Desa Sorkam. Dari Medan, perjalanan bisa dilakukan melalui udara atau darat. Perjalanan darat membutuhkan waktu sekitar 10 jam dari Medan ke Sorkam. Jika memilih perjalanan udara, Anda akan turun di Bandara Pinangsori, Sibolga atau bisa melalui bandara Silangit, Siborong-borong membutuhkan waktu sekitar 3,5 jam untuk bisa sampai di Sorkam. Dari sana, Anda dapat melanjutkan perjalanan ke Pulau Sorkam dengan menyewa boat. Jarak tempuh ke Pulau Sorkam dari Tangkahan sekitar 15 menit.</p>
        </div>

        <div class="about-us-container">
            <div id="photosContent" style="display: none;">
              <h1>Foto-Foto Wisata</h1>
              <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
              <img src="Pulau Sorkam 1.jpg" width="450" height="400" alt="Photo 1">
              <img src="Pulau Sorkam 2.jpg" width="450" height="400" alt="Photo 2">
              <img src="Pulau Sorkam 3.jpg" width="450" height="400" alt="Photo 3">
              <img src="Pulau Sorkam 4.jpg" width="450" height="400" alt="Photo 4">
              <img src="Pulau Sorkam 5.jpg" width="450" height="400" alt="Photo 5">
              <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
            </div>
          
            <div id="mapsContent" style="display: none;">
              <h1>Lokasi Pulau Sorkam</h1>
              <!-- Konten peta -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15950.934815115577!2d98.5455556!3d1.8522221499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e544b76cc97ed%3A0xbe73fd3010cf8fa2!2sPulau%20Sorkam!5e0!3m2!1sid!2sid!4v1701339918380!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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