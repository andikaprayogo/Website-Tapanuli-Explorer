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
    <title>Wisata Air Parsariran</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>

    <div class="header-image">
        <img src="parsariran.jpg" alt="parsariran">
        <div class="header-text">
            <h1>Wisata Air Parsariran</h1>
            <p><a href="tapsel.php" style="color: white;">Tapsel</a> >> Wisata Air Parsariran</p>
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
    <h1>Wisata Air Parsariran</h1>
            <p>Parsariran, sebuah permandian alam yang menjadi andalan wisata Sumatera Utara, terutama di Tapanuli Selatan, memang patut masuk dalam daftar destinasi favorit. Terletak di Batangtoru, sekitar 30 kilometer atau setengah jam perjalanan dari Kota Padangsidimpuan, Parsariran menawarkan keindahan alam yang tak terlupakan.</p>
            <p>Air sungainya yang jernih, dikelilingi oleh batu-batu besar, menciptakan suasana mandi yang nyaman dan menyenangkan. Meski sungainya agak deras, namun tidak terlalu dalam, sehingga menjadi tempat yang ideal untuk anak-anak bermain dan mandi.</p>
            <p>Pada liburan panjang seperti Natal dan Tahun Baru, Parsariran selalu dipadati oleh warga masyarakat yang ingin menikmati momen bersama keluarga. Lokasinya yang strategis di pinggir jalan lintas Padangsidimpuan-Sibolga membuatnya menjadi tempat istirahat favorit bagi mereka yang sedang dalam perjalanan menuju pantai Sibolga atau kembali ke Sidimpuan. Bahkan, ada yang sengaja datang hanya untuk merasakan kesegaran mandi dan menghabiskan waktu bersama keluarga sepanjang hari. </p>
            <p>Aek Parsariran menjadi pilihan tepat bagi keluarga dengan anak kecil, karena selain mandi, tempat ini juga menyediakan tempat makan bersama di atas sungai. Suasana deburan air dan batu-batu besar di sekitar sungai menambah kenikmatan saat bersantai dan makan bersama. Wisata ini sangat direkomendasikan sebagai destinasi keluarga terbaik di Sumatera Utara. </p>
            <p>Fasilitas yang sudah tersedia sepanjang bibir sungai, seperti pondok, warung, ruang ganti pakaian, musholla, semakin melengkapi kenyamanan pengunjung. Biaya parkir yang terjangkau biasanya merupakan satu-satunya biaya yang dikenakan, sementara makanan dapat dipesan dari warung yang tersedia, mulai dari ikan mas bakar hingga udang goreng, sesuai dengan selera masing-masing. </p>
            <p>Selain kegiatan mandi, pengunjung juga dapat menyewa pelampung seperti bebek atau angsa dengan harga yang terjangkau, berkisar antara Rp.30 ribu hingga Rp.50 ribu per jenisnya. Jangan lupa membawa pakaian ganti jika berniat untuk bermain air di Parsariran, namun tak perlu khawatir, karena tempat ini telah dilengkapi dengan fasilitas lainnya seperti kamar mandi, musholla, dan lain sebagainya untuk menunjang kenyamanan pengunjung. </p>
        </div>


    <div class="about-us-container">
        <div id="photosContent" style="display: none;">
          <h1>Foto-Foto Wisata</h1>
          <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
          <img src="Wisata Air Parsariran 1.jpg" width="450" height="400" alt="Photo 1">
          <img src="Wisata Air Parsariran 2.jpg" width="450" height="400" alt="Photo 2">
          <img src="Wisata Air Parsariran 3.jpg" width="450" height="400" alt="Photo 3">
          <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
        </div>
      
        <div id="mapsContent" style="display: none;">
          <h1>Lokasi Wisata Air Parsariran</h1>
          <!-- Konten peta -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15953.92861228191!2d99.065561!3d1.4828718!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302ea3894585e559%3A0x59459ccf1e12b9d!2sWisata%20Air%20Parsariran!5e0!3m2!1sid!2sid!4v1701257578101!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
<script src="wisata air parsariran.js"></script>


</body>
</html>