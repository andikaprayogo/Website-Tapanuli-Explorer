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
    <title>Makam Papan Tinggi</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    

</head>
<body>

    <div class="header-image">
        <img src="Makam Papan Tinggi.jpg" alt="Makam Papan Tinggi">
        <div class="header-text">
            <h1>Makam Papan Tinggi</h1>
            <p><a href="tapteng.php" style="color: white;">Tapteng</a> >> Makam Papan Tinggi</p>
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
    <h1>Makam Papan Tinggi</h1>
           <p>Perjalanan sejarah peradaban Islam di Indonesia menjadi semakin memikat ketika kita menyelusuri jejak-jejak kebesaran masa lalu, salah satunya termanifestasi dalam keanggunan kompleks Makam Papan Tinggi. Terhampar di Desa Penanggahan, Kecamatan Barus, Kabupaten Tapanuli Tengah, tempat suci ini mengukir kisah keagungan Islam di Tanah Air, menjulang tinggi di puncak bukit sekitar 3000 meter di atas permukaan laut.</p>
           <p>Keunikan Makam Papan Tinggi tidak hanya tercermin dalam arsitektur dan perjalanan menuju ke sana, tetapi juga dalam makam-makam kuno yang menyimpan rahasia sejarah. Dalam wilayah Barus yang dulu dikenal sebagai Emporium dan pusat perdagangan kapur barus yang menghantarkan keberlimpahan hingga ke Arab dan Persia, kompleks ini menjadi saksi bisu penyebaran agama Islam di Nusantara.</p>
           <p>Eksistensi Makam Papan Tinggi semakin menarik perhatian karena aksesnya yang membutuhkan perjuangan. Para pengunjung harus mengatasi tantangan berupa 708 anak tangga yang membentang hingga puncak bukit. Namun, kini masyarakat setempat memberikan kenyamanan dengan mendirikan pos-peristirahatan setiap 150 anak tangga, memudahkan perjalanan spiritual dan sejarah bagi para ziarah.</p>
           <p>Dari segi arsitektur, kompleks makam seluas 40 meter x 15 meter, dikelilingi oleh pagar setinggi 160 cm, menjadi panggung bagi tujuh makam berupa batu nisan. Batu nisan tersebut, terbuat dari batu kali, menandakan kekokohan dan ketahanan terhadap waktu. Dalam kelompok tersebut, terdapat tiga makam berukuran besar dengan nisan pipih dan tiga nisan kecil yang tergabung dalam satu kelompok, serta satu makam terpisah.</p>
           <p>Salah satu puncak keindahan makam ini adalah nisan Syekh Mahmud. Merupakan seorang pendatang dari Yaman pada abad ke-7, Syekh Mahmud bukan hanya seorang ulama, tetapi juga seorang saudagar yang berperan penting dalam menyebarkan Islam di Indonesia. Kisahnya yang epik dimulai ketika kapalnya terdampar di Barus, mengubah nasibnya menjadi seorang dai yang gigih. Meskipun menghadapi perlawanan dari Kerajaan Barus dan diasingkan ke Aceh Singkil, keberanian Syekh Mahmud tak tergoyahkan. Seiring berjalannya waktu, dia menjadi utusan Islam yang membawa terang agama di berbagai penjuru Nusantara.</p>
           <p>Kompleks Makam Papan Tinggi bukan sekadar situs sejarah, melainkan warisan keislaman yang membangkitkan kembali kejayaan dan semangat dakwah. Dengan keunikan dan keanggunannya, tempat ini menjadi saksi bisu dari zaman ke zaman, merajut kisah keemasan Islam yang terpatri dalam setiap ukiran batu dan langkah para ziarah yang memenuhi anak tangga.</p>
        </div>

        <div class="about-us-container">
            <div id="photosContent" style="display: none;">
              <h1>Foto-foto Wisata</h1>
              <!-- Tambahkan elemen untuk menampilkan foto-foto wisata -->
              <img src="Makam Papan Tinggi 1.jpg" width="450" height="400" alt="Photo 1">
              <img src="Makam Papan Tinggi 2.jpg" width="450" height="400" alt="Photo 2">
              <img src="Makam Papan Tinggi 3.jpg" width="450" height="400" alt="Photo 3">
              <img src="Makam Papan Tinggi 4.jpg" width="450" height="400" alt="Photo 4">
              <img src="Makam Papan Tinggi 5.jpg" width="450" height="400" alt="Photo 5">
              <img src="Makam Papan Tinggi 6.jpg" width="450" height="400" alt="Photo 6">
              <img src="Makam Papan Tinggi 7.jpg" width="450" height="400" alt="Photo 7">
              <img src="Makam Papan Tinggi 8.jpg" width="450" height="400" alt="Photo 8">
              <img src="Makam Papan Tinggi 9.jpg" width="450" height="400" alt="Photo 9">
              <img src="Makam Papan Tinggi 10.jpg" width="450" height="400" alt="Photo 10">
              <img src="Makam Papan Tinggi 11.jpg" width="450" height="400" alt="Photo 11">
              <img src="Makam Papan Tinggi 12.jpg" width="450" height="400" alt="Photo 12">
              <img src="Makam Papan Tinggi 13.jpg" width="450" height="400" alt="Photo 13">
              <img src="Makam Papan Tinggi 14.jpg" width="450" height="400" alt="Photo 14">
              <img src="Makam Papan Tinggi 15.jpg" width="450" height="400" alt="Photo 15">
              <img src="Makam Papan Tinggi 16.jpg" width="450" height="400" alt="Photo 16">
              <img src="Makam Papan Tinggi 17.jpg" width="450" height="400" alt="Photo 17">
              <!-- Tambahkan foto-foto wisata sesuai kebutuhan -->
            </div>
          
            <div id="mapsContent" style="display: none;">
              <h1>Lokasi Makam Papan Tinggi</h1>
              <!-- Konten peta -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3987.304263741976!2d98.4134939!3d2.0340958!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x302fb377aa0b0cbb%3A0xd903d8e7e87f8760!2sParkiran%20Makam%20Papan%20Tinggi%2FTangga%201000!5e0!3m2!1sid!2sid!4v1701306999688!5m2!1sid!2sid" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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