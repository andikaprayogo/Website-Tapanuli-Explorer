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
    <title>Pulau Mursala</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>

    <div class="header-image">
        <img src="Pulau Mursala.jpg" alt="Pulau Mursala">
        <div class="header-text">
            <h1>Pulau Mursala</h1>
            <p><a href="tapteng.php" style="color: white;">Tapteng</a> >> Pulau Mursala</p>
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
    <h1>Pulau Mursala</h1>
            <p>Pulau Mursala terkenal akan pesonanya yang alami dan indah. Terletak di Samudra Hindia, pulau ini termasuk dalam wilayah Kecamatan Tapian Nauli, Tapanuli Tengah, Provinsi Sumatera Utara. Secara geografis, Pulau Mursala terletak di sebelah Barat Daya Kota Sibolga, dengan jarak sekitar 22,5 km dari Pandan, ibukota Kabupaten Tapanuli Tengah. Pulau ini memiliki luas sekitar 8.000 Ha dan dapat diakses melalui perjalanan kapal dari Pandan atau Sibolga, melintasi Teluk Tapanuli.</p>
            <p>Daya tarik utama Pulau Mursala terletak pada air terjun yang mempercantik sisi barat pulau tersebut. Di sebelah timur Pulau Mursala, terdapat pula pulau kecil yang dikenal dengan nama Pulau Putri. Beberapa sumber menyebutkan bahwa Pulau Mursala, terutama bagian air terjunnya, menjadi salah satu lokasi yang digunakan sebagai setting dalam film King Kong pada tahun 2013 karya Peter Jackson.</p>
            <p>Tinggi Air Terjun Pulau Mursala tidak mencapai ketinggian yang signifikan, sekitar 35 meter. Tebing granitnya tidak berdiri tegak lurus, melainkan condong landai. Warna cokelat kemerahannya menonjol, dengan bagian atas yang sempit dan melebar di bagian bawah. Di kedua sisi air terjun, tumbuh pepohonan lebat yang menambah pesona keindahan tempat wisata ini.</p>
            <p>Sumber air dari air terjun ini berasal dari sungai yang bermuara di puncak Pulau Mursala. Meskipun bukan dari sungai yang besar, debit air di air terjun ini tidak pernah surut. Pada musim kemarau, debit airnya mungkin sedikit berkurang, tetapi tetap ada. Jeram Air Terjun Mursala memiliki arus yang cukup deras, sehingga diperlukan tenaga ekstra untuk melawan arus jeram dan ombak laut saat berenang di bawah air terjun. Meskipun airnya terasa dingin, namun memberikan kesegaran.</p>
            <p>Ada berbagai kegiatan yang bisa dinikmati di tempat wisata ini. Selain berenang menikmati perpaduan air laut dan air tawar di bawah Air Terjun Mursala, Anda juga dapat melakukan snorkeling. Terdapat ikan-ikan dan terumbu karang yang bisa diamati saat melakukan snorkeling di bawah air terjun ini. Selain itu, pastikan untuk berfoto di depan keindahan air terjun tersebut.</p>
            <p>Untuk mencapai lokasi ini, pertama-tama Anda harus mencapai Sibolga. Dari Medan, perjalanan bisa dilakukan melalui udara atau darat. Perjalanan darat membutuhkan waktu sekitar 10 jam dari Medan ke Sibolga. Jika memilih perjalanan udara, Anda akan turun di Bandara Pinangsori, Sibolga atau bisa melalui bandara Silangit, Siborong-borong membutuhkan waktu sekitar 3 jam untuk bisa samapi di Kota Sibolga.</p>
            <p>Dari Sibolga, perjalanan selanjutnya menuju Pantai Kalangan atau Pantai Pandan. Dari sana, Anda dapat melanjutkan perjalanan ke Air Terjun Mursala dengan menyewa speed boat. Kapal ini memiliki kapasitas hingga 20 orang, meskipun tarif sewanya cukup mahal. Namun, dengan berpatungan bersama teman-teman, biayanya akan terasa lebih terjangkau. Perjalanan dengan speed boat memakan waktu sekitar dua jam, asalkan cuaca mendukung.</p>
        </div>

        <div class="about-us-container">
            <div id="photosContent" style="display: none;">
              <h1>Foto-foto Wisata</h1>
              <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
              <img src="pantai mursala 1.jpg" width="450" height="400" alt="Photo 1">
              <img src="pantai mursala 2.jpg" width="450" height="400" alt="Photo 2">
              <img src="pantai mursala 3.jpg" width="450" height="400" alt="Photo 3">
              <img src="pantai mursala 4.jpg" width="450" height="400" alt="Photo 4">
              <img src="pantai mursala 5.jpg" width="450" height="400" alt="Photo 5">
              <img src="pantai mursala 6.jpg" width="450" height="400" alt="Photo 6">
              <img src="pantai mursala 7.jpg" width="450" height="400" alt="Photo 7">
              <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
            </div>
          
            <div id="mapsContent" style="display: none;">
              <h1>Lokasi Pulau Mursala</h1>
              <!-- Konten peta -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63810.40328248834!2d98.52548245!3d1.656873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302ee2d527947ced%3A0x5b0a95560a80dae9!2sPulau%20Musala!5e0!3m2!1sid!2sid!4v1701306737661!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
<script src="Pulau Mursala.js"></script>

</body>
</html>