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
    <title>Pantai Kade Tigo</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>

    <div class="header-image">
        <img src="Pantai Kade Tigo.jpg" alt="Pantai Kade Tigo">
        <div class="header-text">
            <h1>Pantai Kade Tigo</h1>
            <p><a href="tapteng.php" style="color: white;">Tapteng</a> >> Pantai Kade Tigo</p>
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
    <h1>Pantai Kade Tigo</h1>
           <p>Kade Tigo, sebuah perladangan surga pantai yang terletak di kecamatan Sosorgadong, menggambarkan kekayaan budaya dan pesona alam yang menyelubungi Tapanuli Tengah. Nama "Kade Tigo" sendiri merangkum harmoni etnis dan rumpun di daerah ini, di mana "Kade" dalam bahasa pesisir merujuk pada kedai, sementara "Tigo" bermakna tiga, menjadi perwakilan dari keragaman yang memikat.</p>
           <p>Ditempatkan di sepanjang garis pantai Tapanuli Tengah, desa kecil ini memeluk harta karun tersembunyi dalam keindahan pantainya yang tak kalah menakjubkan. Akses yang mudah membuatnya menjadi destinasi yang sangat dijangkau, terutama bagi mereka yang berkunjung ke kota tua Barus melalui jalur pantai. Pemandangan geografisnya memanjakan mata, dengan pantai yang dikelilingi oleh pohon kelapa dan aliran sungai yang berhias keindahan saat bermuara ke laut.</p>
           <p>Keunikan Kade Tigo tidak hanya tercermin dalam pesona alamnya, tetapi juga dalam identitas perkampungan pesisirnya yang memegang teguh adat dan kearifan lokal. Aktivitas masyarakat nelayan yang terampil dalam pengelolaan ikan kering, dengan cara tradisional menjemur dan mengeringkannya menjadi ikan asin, menciptakan suasana pedesaan yang begitu autentik.</p>
           <p>Berkunjung ke Kade Tigo tidak hanya menghadirkan pemandangan pantai yang menawan, tetapi juga membawa kesempatan untuk merasakan kehidupan sehari-hari masyarakatnya. Saat musim buah tiba, aroma lezat kueni khas Barus dan kelegendarisan durian Tapteng menyajikan kenikmatan kuliner yang tak terlupakan, semuanya berasal dari hutan-hutan dan perkebunan masyarakat setempat. Tak lupa, cita rasa istimewa dari lemang Barus turut memperkaya pengalaman kuliner yang memikat.</p>
           <p>Terletak sekitar 65 km dari kota Pandan, perjalanan ke Kade Tigo melalui jalur darat menghadirkan petualangan sekitar 2 setengah jam yang memikat. Objek wisata pantai ini juga menjadi saksi dari sebuah peristiwa luar biasa, yaitu pemecahan rekor MURI untuk pembakaran ikan terpanjang. Dan bagi mereka yang beruntung, ritual kenduri laut menjadi bagian tak terpisahkan dari pegelaran adat yang melibatkan masyarakat setempat dalam ungkapan syukur atas berkah yang diberikan oleh Tuhan.</p>
           <p>Kade Tigo, dengan pesonanya yang melimpah dan kehidupan sehari-hari yang autentik, membangun jembatan antara keindahan alam dan kearifan lokal, menciptakan destinasi yang tak hanya memanjakan mata, tetapi juga merawat jiwa para pengunjungnya. Sebuah potret autentik Tapanuli Tengah yang patut dijelajahi dan diabadikan dalam kenangan.</p>
           <p>Untuk mencapai lokasi ini, pertama-tama Anda harus mencapai Barus. Dari Medan, perjalanan bisa dilakukan melalui udara atau darat. Perjalanan darat membutuhkan waktu sekitar 10 jam dari Medan ke Barus. Jika memilih perjalanan udara, Anda akan turun di bandara Silangit, Siborong-borong membutuhkan waktu sekitar 4 jam untuk bisa samapi di Barus.</p>
        </div>

        <div class="about-us-container">
            <div id="photosContent" style="display: none;">
              <h1>Foto-foto Wisata</h1>
              <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
              <img src="Pantai Kade Tigo 1.jfif" width="450" height="400" alt="Photo 1">
              <img src="Pantai Kade Tigo 2.jpg" width="450" height="400" alt="Photo 2">
              <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
            </div>
          
            <div id="mapsContent" style="display: none;">
              <h1>Lokasi Pantai Kade Tigo</h1>
              <!-- Konten peta -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3987.365956805376!2d98.4221739!3d2.0089806!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302fb3ab9f617bdd%3A0xb8cb818afd0eaf70!2sPantai%20KD3!5e0!3m2!1sid!2sid!4v1701307337948!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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