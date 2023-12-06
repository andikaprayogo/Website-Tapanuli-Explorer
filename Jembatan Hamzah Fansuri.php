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
    <title>Jembatan Hamzah Fansuri</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>

    <div class="header-image">
        <img src="Jembatan Hamzah Fansuri.jpg" alt="Jembatan Hamzah Fansuri">
        <div class="header-text">
            <h1>Jembatan Hamzah Fansuri</h1>
            <p><a href="tapteng.php" style="color: white;">Tapteng</a> >> Jembatan Hamzah Fansuri</p>
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
    <h1>Jembatan Hamzah Fansuri</h1>
           <p>Jembatan Hamzah Al-Fansuri di Kecamatan Barus, Kabupaten Tapanuli Tengah, Sumatera Utara, bukan hanya sebuah struktur fisik yang menghubungkan wilayah-wilayah terpencil. Lebih dari itu, jembatan ini telah menjadi ikon kemegahan dan keindahan arsitektur yang menarik hati masyarakat sejak diresmikan oleh Bupati Tapanuli Tengah, Bakhtiar Ahmad Sibarani pada Desember 2019. Dengan biaya pembangunan mencapai Rp52 miliar, jembatan ini bukan hanya sekadar jalur penghubung, melainkan karya seni yang mencerahkan keseharian masyarakat setempat.</p>
           <p>Desain unik dan hiasan lampu warna-warni yang gemerlap menjadi ciri khas Jembatan Hamzah Al-Fansuri, menciptakan suasana yang begitu memikat. Sejak resmi diresmikan, aliran warga yang berdatangan untuk menyaksikan keelokan jembatan ini tidak pernah surut. Jembatan ini, dengan panjang 100 meter dan lebar 10 meter, bukan hanya sebuah konstruksi beton yang dingin, melainkan sebuah kanvas berwarna yang memancarkan kehangatan dan kegembiraan.</p>
           <p>Manfaat jembatan ini juga sangat dirasakan oleh masyarakat setempat, terutama di desa-desa seperti Kampung Mudik, Bungo Tanjung, Kinali, dan Ujung Batu, yang kini dapat terhubung dengan lebih lancar. Inilah keindahan pembangunan yang tidak hanya memberikan estetika, tetapi juga mengurai benang keterbatasan akses masyarakat. Kemudahan ini, seperti impian Bupati Bakhtiar Ahmad Sibarani sejak masa kecilnya, menjadi kenyataan yang memberi dampak positif bagi kehidupan sehari-hari warga.</p>
           <p>Fasilitas lampu hias yang melengkapi jembatan ini bukan sekadar penerangan malam, melainkan seni visual yang menciptakan panggung gemerlap di setiap sudutnya. Setiap malam, kawasan sekitar jembatan menjadi tujuan utama masyarakat Tapanuli Tengah dan bahkan dari luar wilayah itu sendiri. Sebuah tempat yang tak hanya mengundang untuk berswafoto, tetapi juga menjadi konten yang ramai dibagikan di media sosial, menciptakan eksistensi jembatan ini di dunia maya.</p>
           <p>Jembatan Hamzah Al-Fansuri adalah bukti bahwa pembangunan infrastruktur dapat menjadi lebih dari sekadar penghubung fisik. Ia menjadi cermin perpaduan antara fungsionalitas dan keindahan, membangun jembatan bukan hanya antara dua tepi sungai, tetapi juga antara keinginan dan kenyataan. Sebuah monumen kemegahan dan keberlanjutan visi pembangunan yang tidak hanya merambah ke dimensi fisik, tetapi juga menyentuh hati masyarakat setempat dengan cahaya kebahagiaan dan harapan.</p>
           <p>Untuk mencapai lokasi ini, pertama-tama Anda harus mencapai Barus. Dari Medan, perjalanan bisa dilakukan melalui udara atau darat. Perjalanan darat membutuhkan waktu sekitar 10 jam dari Medan ke Barus. Jika memilih perjalanan udara, Anda akan turun di bandara Silangit, Siborong-borong membutuhkan waktu sekitar 4 jam untuk bisa samapi di Barus.</p>
        </div>

        <div class="about-us-container">
            <div id="photosContent" style="display: none;">
              <h1>Foto-foto Wisata</h1>
              <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
              <img src="Jembatan Hamzah Fansuri 1.jpg" width="450" height="400" alt="Photo 1">
              <img src="Jembatan Hamzah Fansuri 2.jpg" width="450" height="400" alt="Photo 2">
              <img src="Jembatan Hamzah Fansuri 3.jpg" width="450" height="400" alt="Photo 3">
              <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
            </div>
          
            <div id="mapsContent" style="display: none;">
              <h1>Lokasi Jembatan Hamzah Fansuri</h1>
              <!-- Konten peta -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.3228736283418!2d98.3988303!3d2.0265525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302fb3a8ac039fcb%3A0x733169caccad15ed!2sJembatan%20Hamzah%20Al-Fansuri%20Barus!5e0!3m2!1sid!2sid!4v1701307479797!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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