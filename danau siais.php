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
    <title>Danau Siais</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>

    <div class="header-image">
        <img src="danau siais.jpg" alt="Danau Siais">
        <div class="header-text">
            <h1>Danau Siais</h1>
            <p><a href="tapsel.php" style="color: white;">Tapsel</a> >> Danau Siais</p>
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
    <h1>Danau Siais</h1>
    <p>Danau Siais, tersembunyi sekitar 40 kilometer dari pusat kehidupan di Tapanuli Selatan, menawarkan keindahan alam seperti permadani hijau yang memukau di balik rerimbunan hutan. Pesona mempesona danau ini menjadikannya destinasi yang patut dijelajahi.</p>
            <p>Dengan luas mencapai 4.500 hektare, danau ini menjulang di Kelurahan Rianiate, Kecamatan Angkola Sangkunur, Kabupaten Tapanuli Selatan. Dari kota Padang Sidempuan, perjalanan sekitar 60 kilometer akan membawa Anda ke Desa Rianiate di mana keindahan Danau Siais memukau. Jika berasal dari Sipirok, perjalanan lebih kurang 80 km akan membawa Anda ke destinasi ini. Akses menuju Danau Siais saat ini hanya dapat ditempuh melalui jalur darat yang menawarkan pemandangan menakjubkan sepanjang perjalanan.</p>
            <p>Dikelilingi oleh perbukitan dan hutan yang mempesona, Danau Siais telah diakui sebagai Bumi Perkemahan Pramuka Kabupaten Tapanuli Selatan. Air danau yang jernih memikat, sementara di tepiannya berdiri bangunan milik pemerintah daerah dan warga setempat yang menawarkan berbagai produk menarik. Jalan menuju Danau Siais sebagian besar dalam kondisi baik, meskipun beberapa kilometer masih dalam tahap pembangunan. Sebuah petualangan melintasi daerah ini menjanjikan pengalaman yang tak terlupakan.</p>
    <!-- Tambahkan konten deskripsi wisata sesuai kebutuhan -->
  </div>

  
  <div class="about-us-container">
  <div id="photosContent" style="display: none;">
    <h1>Foto-foto Wisata</h1>
    <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
    <img src="Danau Siais 1.jpg" width="450" height="400" alt="Photo 1">
    <img src="danau siais 2.jpg" width="450" height="400" alt="Photo 2">
    <img src="danau siais.jpg" width="450" height="400" alt="Photo 3">
    <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
  </div>

  <div id="mapsContent" style="display: none;">
    <h1>Lokasi Danau Siais</h1>
    <!-- Konten peta -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d31910.02274731729!2d98.998611!3d1.324167!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302eb03ba3970b67%3A0xa744b5ad7714334b!2sDanau%20Siais!5e0!3m2!1sid!2sid!4v1701303099167!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
<script src="danau siais.js"></script>


</body>
</html>