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
    <title>Pantai Binasi</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>

    <div class="header-image">
        <img src="Pantai Binasi.jpg" alt="Pantai Binasi">
        <div class="header-text">
            <h1>Pantai Binasi</h1>
            <p><a href="tapteng.php" style="color: white;">Tapteng</a> >> Pantai Binasi</p>
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
    <h1>Pantai Binasi</h1>
           <p>Berbicara tentang keindahan alam Indonesia, khususnya pantai-pantai di daerah barat seperti Pantai Binasi di Kecamatan Sorkam, Kabupaten Tapanuli Tengah, Sumatra Utara, membuka lembaran baru dalam eksplorasi pesona negara ini. Terletak di tepian barat Indonesia, keunikan Pantai Binasi tak hanya tercermin dalam panjang garis pantainya yang mencapai 7-8 km ke arah Barus, tetapi juga dalam fenomena senja yang memukau.</p>
           <p>Pantai Binasi telah menjadi destinasi yang dijelajahi oleh detikTravel, khususnya untuk menyaksikan keajaiban senja yang berubah-ubah setiap harinya. Seiring matahari bergerak ke peraduan, senja di Pantai Binasi menawarkan pengalaman yang unik. Di sini, matahari terbenam lebih lambat dibandingkan dengan Jakarta, menciptakan waktu yang lebih panjang untuk menikmati pesona senja yang memikat hati.</p>
           <p>Pukul 4 sore, pantai ini diselimuti oleh terik yang sama kuatnya dengan pukul 12 siang. Namun, keunikan Pantai Binasi tidak hanya terletak pada panorama senjanya, melainkan juga pada suasana yang ramah dan bersahaja. Tak ada biaya masuk, dan uang parkir pun tidak dikenakan. Di sepanjang pantai, terdapat pondok-pondok kayu yang berfungsi sebagai gazebo untuk para wisatawan yang singgah.</p>
           <p>Pasir Pantai Binasi, meskipun sedikit berwarna hitam, memiliki kelebihan dengan kehalusan yang luar biasa. Ombak yang berkejaran dengan pasir ini menciptakan suasana bermain yang menyenangkan. Kelebihan lainnya, pantai ini memiliki kedalaman yang cukup dangkal, menjadi tempat ideal bagi anak-anak untuk berenang, terutama di hari Minggu yang ramai.</p>
           <p>Namun, pesona Pantai Binasi mencapai puncaknya saat senja mulai turun. Langit berubah menjadi warna jingga, dan jika beruntung, pengunjung dapat menyaksikan keajaiban senja pink yang memukau. Saat matahari meluncur ke peraduan di ujung laut, warna jingga yang memukau menyapu langit dan laut, menciptakan pemandangan yang memikat hati. Saat malam tiba, langit pun semakin sendu, memberikan nuansa romantis yang tak terlupakan.</p>
           <p>Sebuah rahasia kecil yang mungkin jarang diketahui adalah keberadaan cahaya yang memancar dari pasir Pantai Binasi saat berenang di malam hari. Serpihan kerang yang mengkilap dan menempel di pasir menghasilkan kilatan cahaya yang memukau. Sayangnya, keindahan ini sulit ditangkap oleh kamera handphone, sehingga pengunjung diajak untuk merasakannya secara langsung, menambah kesan magis dari Pantai Binasi yang mempesona.</p>
           <p>Untuk mencapai lokasi ini, pertama-tama Anda harus mencapai Desa Sorkam. Dari Medan, perjalanan bisa dilakukan melalui udara atau darat. Perjalanan darat membutuhkan waktu sekitar 10 jam dari Medan ke Desa Sorkam. Jika memilih perjalanan udara, Anda akan turun di bandara Silangit, Siborong-borong membutuhkan waktu sekitar 4 jam untuk bisa samapi di Desa Sorkam.</p>
        </div>

        <div class="about-us-container">
            <div id="photosContent" style="display: none;">
              <h1>Foto-foto Wisata</h1>
              <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
              <img src="Pantai Binasi 1.jpg" width="450" height="400" alt="Photo 1">
              <img src="Pantai Binasi 2.jpg" width="450" height="400" alt="Photo 2">
              <img src="Pantai Binasi 3.jpg" width="450" height="400" alt="Photo 3">
              <img src="Pantai Binasi 4.jpg" width="450" height="400" alt="Photo 4">
              <img src="Pantai Binasi 5.jpg" width="450" height="400" alt="Photo 5">
              <img src="Pantai Binasi 6.jpg" width="450" height="400" alt="Photo 6">
              <img src="Pantai Binasi 7.jpg" width="450" height="400" alt="Photo 7">
              <img src="Pantai Binasi 8.jpg" width="450" height="400" alt="Photo 8">
              
              <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
            </div>
          
            <div id="mapsContent" style="display: none;">
              <h1>Lokasi Pantai Binasi</h1>
              <!-- Konten peta -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15950.491512731462!2d98.5490333!3d1.9008243500000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302e539320a3811b%3A0xd91d6798dc459020!2sPantai%20Binasi!5e0!3m2!1sid!2sid!4v1701307090799!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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