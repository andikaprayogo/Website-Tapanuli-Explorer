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
    <link rel="stylesheet" href="tapsel.css">
    <title>Destinasi Tapanuli Selatan</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  


</head>
<body>

    
    <div class="header-image">
        <img src="bg-tapsel.jfif" alt="Tapanuli Selatan">
        <div class="header-text">
            <h1>TAPANULI SELATAN</h1>
            <p><a href="index.php" style="color: white;">Home</a> >> Tapanuli Selatan</p>
        </div>
    </div>


<div class="container">
    <div class="row">
        <div class="col-md-8">
            <!-- Container Destinasi -->
            <div class="destination-container">
                <h2 class="text-center">Tapanuli Selatan</h2>
                <div class="mt-4">
                    <h4>15 Destinasi Wisata Tapanuli Selatan</h4>
                    <div class="row">
                        <!-- Loop destinasi -->
                        <div class="col-md-4">
                            <a href="Danau Siais.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="danau siais.jpg" alt="1. Danau Siais">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">1. Danau Siais</h5>
                                </a>
                                    <p class="card-text">Lokasi: Kelurahan Rianiate, Kecamatan Angkola Sangkunur, Kabupaten Tapanuli Selatan, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <!-- Ulangi blok di atas untuk destinasi lainnya -->
                        <div class="col-md-4">
                            <a href="Wisata Air Parsariran.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="parsariran.jpg" alt="2. Wisata Air Parsariran">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">2. Wisata Air Parsariran</h5>
                                </a>
                                    <p class="card-text">Lokasi: Parsariran, Batang Toru, Kota Padang Sidempuan, Kabupaten Tapanuli Selatan, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <a href="Aek Sijorni.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Aek Sijorni.jpg" alt="3. Aek Sijorni">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">3. Aek Sijorni</h5>
                                </a>
                                    <p class="card-text">Lokasi: Aek Libung, Sayur Matinggi, Kabupaten Tapanuli Selatan, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Bukit Tor Simago-Mago.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Bukit Tor Simago-Mago.jpg" alt="4. Bukit Tor Simago-Mago">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">4. Bukit Tor Simago-Mago</h5>
                                </a>
                                    <p class="card-text">Lokasi: Huta Raja, Sipirok, Kabupaten Tapanuli Selatan, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Sibual-Buali.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Gunung Sibual-Buali.jpg" alt="5. Gunung Sibual-Buali">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">5. Gunung Sibual-Buali</h5>
                                </a>
                                    <p class="card-text">Lokasi: Gn. Tinggi Salaman, Kec. Sipirok, Kabupaten Tapanuli Selatan, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Air Terjun Silima-Lima.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Air Terjun Silima-Lima.jpg" alt="6. Air Terjun Silima-Lima">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">6. Air Terjun Silima-Lima</h5>
                                </a>
                                    <p class="card-text">Lokasi: Maju Mambe, Marancar, Kabupaten Tapanuli Selatan, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Pemandian Air Panas Aek Nabara.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Pemandian Air Panas Aek Nabara.jpg" alt="7. Pemandian Air Panas Aek Nabara">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">7. Pemandian Air Panas Aek Nabara</h5>
                                </a>
                                    <p class="card-text">Lokasi: Desa Aek Nabara Kec.Marancar, Kabupaten Tapanuli Selatan, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Air Terjun Sisundung Parsalakan.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Air Terjun Sisundung Parsalakan.jpg" alt="8. Air Terjun Sisundung Parsalakan">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">8. Air Terjun Sisundung Parsalakan</h5>
                                </a>
                                    <p class="card-text">Lokasi: Sisundung, Angkola Barat, Kabupaten Tapanuli Selatan, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Air Terjun Aek Malakkut.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Air Terjun Aek Malakkut.jpg" alt="9. Air Terjun Aek Malakkut">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">9. Air Terjun Aek Malakkut</h5>
                                </a>
                                    <p class="card-text">Lokasi: Marancar Julu, Marancar, Kabupaten Tapanuli Selatan, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Aek Sabaon.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Aek Sabaon.jpg" alt="10. Aek Sabaon">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">10. Aek Sabaon</h5>
                                </a>
                                    <p class="card-text">Lokasi: kecamatan Marancar, Tapanuli Selatan, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Danau Marsabut.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Danau Marsabut.jpg" alt="11. Danau Marsabut">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">11. Danau Marsabut</h5>
                                </a>
                                    <p class="card-text">Lokasi: Bunga Bondar, Sipirok, Kabupaten Tapanuli Selatan, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Benteng Huraba.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Benteng Huraba.jpg" alt="12. Benteng Huraba">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">12. Benteng Huraba</h5>
                                </a>
                                    <p class="card-text">Lokasi: Jalan.Mandailing-Padangsidimpuan KM 19 Keleurahan Pintu Padang, Kecamatan Batang Angkola, Kabupaten Tapanuli Selatan, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Air Terjun Sisoma.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Air Terjun Sisoma.jpg" alt="13. Air Terjun Sisoma">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">13. Air Terjun Sisoma</h5>
                                </a>
                                    <p class="card-text">Lokasi: Desa Marancar Godang, Kecamatan Marancar, Kabupaten Tapanuli Selatan, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Pantai Muara Upu.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Pantai Muara Upu.jpg" alt="14. Pantai Muara Upu">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">14. Pantai Muara Upu</h5>
                                </a>
                                    <p class="card-text">Lokasi: Muara Upu, Muara Batang Toru, Kabupaten Tapanuli Selatan, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Cekdam Pargarutan.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Cekdam Pargarutan.jpg" alt="15. Cekdam Pargarutan">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">15. Cekdam Pargarutan</h5>
                                </a>
                                    <p class="card-text">Lokasi: Sihulambu, Kec. Sipirok, Kabupaten Tapanuli Selatan, Sumatera Utara</p>
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
<script src="tapsel.js"></script>

</body>
</html>
