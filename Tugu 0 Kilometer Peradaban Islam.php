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
    <title>Tugu 0 Kilometer Peradaban Islam</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>

    <div class="header-image">
        <img src="Tugu 0 Kilometer Peradaban Islam.jpg" alt="Tugu 0 Kilometer Peradaban Islam">
        <div class="header-text">
            <h1>Tugu 0 Kilometer Peradaban Islam</h1>
            <p><a href="tapteng.php" style="color: white;">Tapteng</a> >> Tugu 0 Kilometer Peradaban Islam</p>
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
    <h1>Tugu 0 Kilometer Peradaban Islam</h1>
           <p>Tak hanya menjadi sebuah geografis, Titik Nol Barus di Kecamatan Barus, Sumatera Utara, menyimpan jauh lebih dalam makna yang kini dikenal sebagai "Kilometer 0 Peradaban Islam Nusantara". Memancar dari kejayaan masa lampau, Barus yang disebut sebagai kota emporium dan pusat peradaban pada abad 1-17 Masehi menjadi kiblat awal bagi Islam di Indonesia.</p>
           <p>Berlokasi di tepi Samudra Hindia, Kecamatan Barus, dengan keunikan dataran rendahnya yang meliputi wilayah pantai barat Sumatera, menjadi bukti bahwa sejarah Islam di Nusantara berkembang di tengah kehidupan masyarakat yang kental dengan nuansa Melayu. Dengan luas wilayah mencapai 21,81 km, keseimbangan antara daratan rendah dan ketetapan hati masyarakat menciptakan kehidupan yang berlimpah di Kecamatan Barus, yang dihuni oleh sekitar 18.919 jiwa pada tahun 2021.</p>
           <p>Pusat kota Kecamatan Barus, meskipun setingkat kecamatan, tidak menyembunyikan keramaian yang menggambarkan kehidupan orang Melayu yang kaya akan tradisi. Suasananya yang hidup dan penuh warna menggambarkan keberagaman dan kekayaan budaya yang terwariskan dari generasi ke generasi.</p>
           <p>Titik Nol Barus, yang juga dikenal sebagai "Kilometer 0 Peradaban Islam Nusantara", tidak hanya sekadar tugu peringatan, melainkan sebuah monumen yang merangkum perjalanan panjang Islam di Indonesia. Resmi diresmikan oleh Presiden Jokowi pada 24 Maret 2017, Tugu Kilometer Nol membanggakan keberadaan globe atau miniatur dunia yang terangkat oleh tiga pilar dan secara simbolis menghadap Samudra Hindia, saksi bisu perjalanan pertama Islam ke tanah air.</p>
           <p>Sejarah kota kecil di Kecamatan Barus mencuat dari cerita pelabuhan kecil yang pada zamannya sangat terkenal di seluruh dunia. Terletak menghadap langsung ke Samudra Hindia, Pelabuhan Barus memudahkan para pelaut dalam bersandar, membuatnya menjadi pusat perdagangan yang ramai. Berbagai komoditas, termasuk kamper yang memiliki nilai tinggi, menjadi daya tarik utama.</p>
           <p>Dalam ingatan turun temurun masyarakat, Labo Tua di Barus menjadi tempat pertama penyebaran agama Islam di wilayah ini. Meskipun lokasi Titik Nol Barus kini telah berubah, dengan abrasi merenggut benteng kecil dan mushola yang ada di pantai, namun warisan sejarah dan spiritualnya tetap mengalir dalam setiap nafas kehidupan di Barus.</p>
           <p>Saat malam menjelang, suasana kota Kecamatan Barus semakin hidup. Kendaraan bermotor melintas dengan ramai, menyuarakan keberagaman kebutuhan masyarakat setempat. Melalui deretan toko di tepi jalan, lagu berbahasa Melayu terdengar kencang melalui pengeras suara, menjadi penutur setia dari sejarah dan kehidupan yang terus berdetak di kota kecil bersejarah ini.</p>
           <p>Untuk mencapai lokasi ini, pertama-tama Anda harus mencapai Barus. Dari Medan, perjalanan bisa dilakukan melalui udara atau darat. Perjalanan darat membutuhkan waktu sekitar 10 jam dari Medan ke Barus. Jika memilih perjalanan udara, Anda akan turun di bandara Silangit, Siborong-borong membutuhkan waktu sekitar 4 jam untuk bisa samapi di Barus.</p>
        </div>

        <div class="about-us-container">
            <div id="photosContent" style="display: none;">
              <h1>Foto-Foto Wisata</h1>
              <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
              <img src="Tugu 0 Kilometer Peradaban Islam 1.jpeg" width="450" height="400" alt="Photo 1">
              <img src="Tugu 0 Kilometer Peradaban Islam 2.jpg" width="450" height="400" alt="Photo 2">
              <img src="Tugu 0 Kilometer Peradaban Islam 3.jpg" width="450" height="400" alt="Photo 3">
              <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
            </div>
          
            <div id="mapsContent" style="display: none;">
              <h1>Lokasi Tugu 0 Kilometer Peradaban Islam</h1>
              <!-- Konten peta -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.367486436047!2d98.4030095!3d2.0083539!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302fb3d39a3b1e4f%3A0x53dfac0dfb2085e4!2sTugu%20Titik%20Nol%20Peradaban%20Islam%20Nusantara!5e0!3m2!1sid!2sid!4v1701307257379!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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