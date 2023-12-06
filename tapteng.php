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
    <link rel="stylesheet" href="tapteng.css">
    <title>Destinasi Tapanuli Tengah</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   


</head>
<body>
    
    <div class="header-image">
        <img src="tapanuli tengah.jpeg" alt="Tapanuli Tengah">
        <div class="header-text">
            <h1>TAPANULI TENGAH</h1>
            <p><a href="index.php" style="color: white;">Home</a> >> Tapanuli Tengah</p>
        </div>
    </div>


<div class="container">
    <div class="row">
        <div class="col-md-8">
            <!-- Container Destinasi -->
            <div class="destination-container">
                <h2 class="text-center">Tapanuli Tengah</h2>
                <div class="mt-4">
                    <h4>18 Destinasi Wisata Tapanuli Tengah</h4>
                    <div class="row">
                        <!-- Loop destinasi -->
                        <div class="col-md-4">
                            <a href="Pulau Kalimantung.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="pulau kalimantung.jpg" alt="1. Pulau Kalimantung">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">1. Pulau Kalimantung</h5>
                                </a>
                                    <p class="card-text">Lokasi: Kecamatan Tapian Nauli, Kabupaten Tapanuli Tengah, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <!-- Ulangi blok di atas untuk destinasi lainnya -->
                        <div class="col-md-4">
                            <a href="Pulau Mursala.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Pulau Mursala.jpg" alt="2. Pulau Mursala">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">2. Pulau Mursala</h5>
                                </a>
                                    <p class="card-text">Lokasi: Kecamatan Tapian Nauli, Kabupaten Tapanuli Tengah, Provinsi Sumatera Utara</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <a href="Pulau Putri.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Pulau Putri.jpg" alt="3. Pulau Putri">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">3. Pulau Putri</h5>
                                </a>
                                    <p class="card-text">Lokasi: Tapian Nauli I, Tapian Nauli, Kabupaten Tapanuli Tengah, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <a href="Pulau Karang.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Pulau Karang.jpg" alt="4. Pulau Karang">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">4. Pulau Karang</h5>
                                </a>
                                    <p class="card-text">Lokasi: Sitiris-Tiris, Kec. Andam Dewi, Kabupaten Tapanuli Tengah, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Makam Papan Tinggi.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Makam Papan Tinggi.jpg" alt="5. Makam Papan Tinggi">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">5. Makam Papan Tinggi</h5>
                                </a>
                                    <p class="card-text">Lokasi: Pananggahan, Barus Utara, Kabupaten Tapanuli Tengah, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Pantai Binasi.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Pantai Binasi.jpg" alt="6. Pantai Binasi">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">6. Pantai Binasi</h5>
                                </a>
                                    <p class="card-text">Lokasi: Kecamatan Sorkam Barat, Kabupaten Tapanuli Tengah, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Makam Mahligai.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Makam Mahligai.jpg" alt="7. Makam Mahligai">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">7. Makam Mahligai</h5>
                                </a>
                                    <p class="card-text">Lokasi: Aek Dakka, Barus, Kabupaten Tapanuli Tengah, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Tugu 0 Kilometer Peradaban Islam.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Tugu 0 Kilometer Peradaban Islam.jpg" alt="8. Tugu 0 Kilometer Peradaban Islam">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">8. Tugu 0 Kilometer Peradaban Islam</h5>
                                </a>
                                    <p class="card-text">Lokasi: Pasar Batu Gerigis, Barus, Kabupaten Tapanuli Tengah, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Pantai Kade Tigo.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Pantai Kade Tigo.jpg" alt="9. Pantai Kade Tigo">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">9. Pantai Kade Tigo</h5>
                                </a>
                                    <p class="card-text">Lokasi: Kecamatan Barus, Kabupaten Tapanuli Tengah, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Jembatan Hamzah Fansuri.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Jembatan Hamzah Fansuri.jpg" alt="10. Jembatan Hamzah Fansuri">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">10. Jembatan Hamzah Fansuri</h5>
                                </a>
                                    <p class="card-text">Lokasi: Kampung Mudik, Barus, Kabupaten Tapanuli Tengah, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Pantai Pandan.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Pantai Pandan.jpg" alt="11. Pantai Pandan">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">11. Pantai Pandan</h5>
                                </a>
                                    <p class="card-text">Lokasi:  Jl. Sisingamangaraja Jl. Padang Sidempuan, Kec. Pandan, Kabupaten Tapanuli Tengah, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Pulau Poncan.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Pulau Poncan.jpg" alt="12. Pulau Poncan">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">12. Pulau Poncan</h5>
                                </a>
                                    <p class="card-text">Lokasi: Ps. Belakang, Sibolga Kota, Kota Sibolga, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Pantai Batu Gajah.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Pantai Batu Gajah.jpg" alt="13. Pantai Batu Gajah">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">13. Pantai Batu Gajah</h5>
                                </a>
                                    <p class="card-text">Lokasi: Hajoran, Pandan, Kabupaten Tapanuli Tengah, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Air Terjun Silaklak.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Air Terjun Silaklak.jpg" alt="14. Air Terjun Silaklak">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">14. Air Terjun Silaklak</h5>
                                </a>
                                    <p class="card-text">Lokasi: Unte Mungkur III, Kolang, Kabupaten Tapanuli Tengah, Sumatera Utara </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Pantai Kalangan Indah.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Pantai Kalangan Indah.jpg" alt="15. Pantai Kalangan Indah">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">15. Pantai Kalangan Indah</h5>
                                </a>
                                    <p class="card-text">Lokasi: Kalangan Indah, Hajoran, Kec. Pandan, Kabupaten Tapanuli Tengah, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Air Terjun Sihobuk.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Air Terjun Sihobuk.jpg" alt="16. Air Terjun Sihobuk">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">16. Air Terjun Sihobuk</h5>
                                </a>
                                    <p class="card-text">Lokasi: Sibuluan Nalambok, Sarudik, Kabupaten Tapanuli Tengah, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Air Terjun Rampah (Aek Martolu).php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Air Terjun Rampah (Aek Martolu).jpg" alt="17. Air Terjun Rampah (Aek Martolu)">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">17. Air Terjun Rampah (Aek Martolu)</h5>
                                </a>
                                    <p class="card-text">Lokasi: Rampa, Kec. Sitahuis, Kabupaten Tapanuli Tengah, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Pulau Sorkam.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Pulau Sorkam.jpg" alt="18. Pulau Sorkam">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">18. Pulau Sorkam</h5>
                                </a>
                                    <p class="card-text">Lokasi: Ps. Sorkam, Kec. Sorkam Bar., Kabupaten Tapanuli Tengah, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <!-- Pencarian Destinasi -->
            <div class="mt-4">
                <h5 class="text-center">Cari Destinasi</h5>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Masukkan destinasi...">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button" id="findButton">Temukan destinasi</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS dan jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

<!-- JavaScript Kustom -->
<script src="tapteng.js"></script>

</body>
</html>