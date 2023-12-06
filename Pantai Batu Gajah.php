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
    <title>Pantai Batu Gajah</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>

    <div class="header-image">
        <img src="Pantai Batu Gajah.jpg" alt="Pantai Batu Gajah">
        <div class="header-text">
            <h1>Pantai Batu Gajah</h1>
            <p><a href="tapteng.php" style="color: white;">Tapteng</a> >> Pantai Batu Gajah</p>
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
    <h1>Pantai Batu Gajah</h1>
           <p>Pantai Batu Gajah ini terletak di Hajoran, Kec. Pandan, Tapanuli Tengah, Sumatera Utara.</p>
           <p>Lingkungan di Batu Gajah masih sangat bersih dan alami. Agar dapat mencapai pelataran Batu Gajah, para pengunjung diharapkan berjalan kaki, mengingat di sekitar batu tersebut terdapat batu karang yang tajam. Disarankan pula untuk menggunakan alas kaki, baik berupa sepatu maupun sandal, karena medan di sekitar Batu Gajah cukup licin akibat keberadaan banyak batu. Meskipun begitu, para pengunjung tidak perlu khawatir, karena masih dapat mengambil foto dari jarak jauh dengan memanfaatkan kapal dan mengarahkannya ke arah Batu Gajah.</p>
           <p>Untuk mencapai lokasi ini, pertama-tama Anda harus mencapai Sibolga. Dari Medan, perjalanan bisa dilakukan melalui udara atau darat. Perjalanan darat membutuhkan waktu sekitar 10 jam dari Medan ke Sibolga. Jika memilih perjalanan udara, Anda akan turun di Bandara Pinangsori, Sibolga atau bisa melalui bandara Silangit, Siborong-borong membutuhkan waktu sekitar 3 jam untuk bisa samapi di Kota Sibolga. Dari Sibolga, perjalanan selanjutnya ke Pantai Batu Gajah sekitar 30 menit.</p>
        </div>

        <div class="about-us-container">
            <div id="photosContent" style="display: none;">
              <h1>Foto-Foto Wisata</h1>
              <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
              <img src="Pantai Batu Gajah.jpg" width="450" height="400" alt="Photo 1">
              <img src="Pantai Batu Gajah 2.jpg" width="450" height="400" alt="Photo 2">
              <img src="Pantai Batu Gajah 3.jpg" width="450" height="400" alt="Photo 3">
              <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
            </div>
          
            <div id="mapsContent" style="display: none;">
              <h1>Lokasi Pantai Batu Gajah</h1>
              <!-- Konten peta -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3988.1506384175364!2d98.831145!3d1.6566578!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302ef2aa047d4287%3A0x432da4a68c63bb1f!2sPantai%20Batu%20Gajah%2C%20Hajoran!5e0!3m2!1sid!2sid!4v1701340431378!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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