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
    <title>Pulau Kalimantung</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>

    <div class="header-image">
        <img src="pulau kalimantung.jpg" alt="Pulau Kalimantung">
        <div class="header-text">
            <h1>Pulau Kalimantung</h1>
            <p><a href="tapteng.php" style="color: white;">Tapteng</a> >> Pulau Kalimantung</p>
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
    <h1>Pulau Kalimantung</h1>
            <p>Pulau ini sering dikenal sebagai Maldives-nya Sumatera Utara. Pulau Kalimantung menyediakan berbagai pilihan kegiatan wisata laut seperti snorkeling, scuba diving, renang, dan kegiatan menarik lainnya seperti memancing dan mendaki. Pulau ini terletak di wilayah Kecamatan Tapian Nauli, Kabupaten Tapanuli Tengah, Provinsi Sumatera Utara, Indonesia. Pulau Kalimantung Nagodang memiliki pantai berpasir putih dan sebagian pantai bertebing.</p>
            <p>Pulau ini saat ini dalam keadaan sangat bersih dan memberikan kenyamanan yang luar biasa bagi para pengunjung. Tidak ada biaya masuk yang dikenakan, satu-satunya pengeluaran yang perlu Anda pertimbangkan adalah biaya penyewaan kapal dan penyeberangan. Keindahan pulau ini terletak pada pantai berpasir putih yang mempesona, keindahan alam bawah laut yang menakjubkan, dan sifat eksotis pulau itu sendiri. Selain itu, pulau ini memberikan ketenangan yang luar biasa dan memberikan kesan seperti memiliki pulau pribadi. Pulau ini tidak tersedia rumah makan, makadari itu anda disarankan membawa makanan dan minuman sendiri.</p>
            <p>Untuk mencapai lokasi ini, pertama-tama Anda harus mencapai Sibolga. Dari Medan, perjalanan bisa dilakukan melalui udara atau darat. Perjalanan darat membutuhkan waktu sekitar 10 jam dari Medan ke Sibolga. Jika memilih perjalanan udara, Anda akan turun di Bandara Pinangsori, Sibolga atau bisa melalui bandara Silangit, Siborong-borong membutuhkan waktu sekitar 3 jam untuk bisa samapi di Kota Sibolga dan sekitar 4 jam untuk bisa sampai di Kota Pandan.</p>
            <p>Jika ingin berkunjung ke Pulau Kalimantung sebaiknya anda memilih waktu yang tepat. Dikarenakan pulau ini terletak di bagian barat pulau Sumatera yang menyebabkan adanya angin kencang dan gelombang besar. Anda juga disarankan berangkat pagi hari dri Pandan atau Sibolga dan kembali sebelum jam 3 sore unutk menghindari gelombang pasang.</p>
            <p>Anda bisa menggunakan jasa Tour Travel yang menyediakan paket liburan ke Pulau Kalimantung dan beberapa pulau sekaligus. Seperti Pulau Kalimantung, Pulau Mursala, Pulau Badalu, hingga Pulau Poncan. Biasanya mereka memiliki titik kumpul di daerah Pandan atau Sibolga. Atau anda juga bisa menyewa kapal wisata khusus untuk ke Pulau Kalimantung saja dengan biaya sekitar 1,5 juta- 2 juta. Untuk penyewaan Speed boat kisaran 2 juta – 2,5 juta dengan waktu tempuh 45 menit – 1 jam.</p>
        </div>

        <div class="about-us-container">
            <div id="photosContent" style="display: none;">
              <h1>Foto-foto Wisata</h1>
              <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
              <img src="pulau kalimantung.jpg" width="450" height="400" alt="Photo 1">
              <img src="pulau kalimantung1.jpg" width="450" height="400" alt="Photo 2">
              <img src="Pulau Kalimantung 2.jfif" width="450" height="400" alt="Photo 2">
              <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
            </div>
          
            <div id="mapsContent" style="display: none;">
              <h1>Lokasi  Pulau Kalimantung</h1>
              <!-- Konten peta -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15953.243916145164!2d98.52611110000001!3d1.5749999499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302ee18239e2e4d1%3A0xb26f77d6d27e13d3!2sPulau%20Kalimantungnagodang!5e0!3m2!1sid!2sid!4v1701306547066!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
<script src="pulau kalimantung.js"></script>


</body>
</html>