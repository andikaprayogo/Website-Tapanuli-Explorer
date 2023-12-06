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
    <title>Pantai Pandan</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>

    <div class="header-image">
        <img src="Pantai Pandan.jpg" alt="Pantai Pandan">
        <div class="header-text">
            <h1>Pantai Pandan</h1>
            <p><a href="tapteng.php" style="color: white;">Tapteng</a> >> Pantai Pandan</p>
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
    <h1>Pantai Pandan</h1>
           <p>Pantai Indah Pandan di Tapanuli Tengah, Sumatera Utara, menjadi permata tersembunyi yang menawarkan pesona alam bahari yang begitu menakjubkan. Meskipun Bali sering menjadi ikon pariwisata pantai di Indonesia, namun keindahan alam Pantai Indah Pandan membuktikan bahwa pesona pantai Indonesia tersebar luas di berbagai wilayah, termasuk di Sumatera Utara.</p>
           <p>Terletak di Desa Pandan, Kecamatan Pandan, Kabupaten Tapanuli Tengah, perjalanan menuju pantai ini dari Kota Medan mungkin memakan waktu, tetapi setiap kilometer perjalanan akan terbayar dengan pemandangan alam yang memukau. Dengan jarak sekitar 352 km, perjalanan darat selama 9 jam menjadi sebuah petualangan yang dinantikan.</p>
           <p>Saat tiba di Pantai Indah Pandan, pengunjung disambut oleh semilir angin sepoi-sepoi dan deru ombak yang menjadi simfoni alam. Pasir putih yang terhampar indah di sepanjang pantai memperindah panorama, menciptakan daya tarik yang membuat setiap pengunjung ingin berlama-lama menikmati keindahan alam tersebut, terutama saat matahari terbit atau menjelang senja.</p>
           <p>Air laut yang jernih dan pasir pantai yang lembut menciptakan suasana yang sempurna untuk berbagai aktivitas. Mulai dari berjalan-jalan di sepanjang pantai, bermain voli, hingga aktivitas air menarik seperti snorkeling dan surfing. Pengunjung juga dapat menyewa boat untuk menjelajahi pulau-pulau cantik di sekitar pantai atau sekadar menikmati api unggun bersama keluarga atau teman-teman terdekat.</p>
           <p>Fasilitas di Pantai Indah Pandan sangat memadai, termasuk penginapan, gazebo, warung makan, area parkir, musala, dan toilet umum. Pengunjung juga dapat menemukan kios pedagang yang menjual oleh-oleh seperti ikan asin dan aksesoris perhiasan dari kerang dengan harga yang terjangkau.</p>
           <p>Akses ke Pantai Indah Pandan dapat ditempuh dengan kendaraan pribadi atau menggunakan bus dari Terminal Amplas Medan menuju Terminal Tarutung. Rute perjalanan yang melibatkan Jalan Mayjend D.I. Panjaitan, Jalan Lintas Barat Sumatera, dan Jalan Sudirman akan membawa pengunjung menuju destinasi alam yang memukau ini. Dengan segala keindahannya, Pantai Indah Pandan menjadi bukti bahwa keajaiban alam Indonesia tidak hanya terletak di destinasi yang sudah terkenal, tetapi juga merayap di setiap sudut negeri.</p>
           <p>Untuk mencapai lokasi ini, pertama-tama Anda harus mencapai Kota Pandan. Dari Medan, perjalanan bisa dilakukan melalui udara atau darat. Perjalanan darat membutuhkan waktu sekitar 10 jam dari Medan ke Pandan. Jika memilih perjalanan udara, Anda akan turun di bandara Silangit, Siborong-borong membutuhkan waktu sekitar 4 jam untuk bisa samapi di Pandan.</p>
        </div>

        <div class="about-us-container">
            <div id="photosContent" style="display: none;">
              <h1>Foto-Foto Wisata</h1>
              <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
              <img src="Pantai Pandan 1.jpg" width="450" height="400" alt="Photo 1">
              <img src="Pantai Pandan 2.jpg" width="450" height="400" alt="Photo 2">
              <img src="Pantai Pandan 3.jpg" width="450" height="400" alt="Photo 3">
              <img src="Pantai Pandan 4.jpg" width="450" height="400" alt="Photo 4">
              <img src="Pantai Pandan 5.jpg" width="450" height="400" alt="Photo 5">
              <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
            </div>
          
            <div id="mapsContent" style="display: none;">
              <h1>Lokasi Pantai Pandan</h1>
              <!-- Konten peta -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d255215.33552399703!2d98.6096826!3d1.8495928!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302ef2c47dcd655b%3A0xa4f1d37d314e651b!2sPantai%20Pandan%20Tapteng!5e0!3m2!1sid!2sid!4v1701307566683!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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