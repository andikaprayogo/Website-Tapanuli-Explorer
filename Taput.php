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
    <link rel="stylesheet" href="Taput.css">
    <title>Destinasi Tapanuli Utara</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Custom CSS -->


</head>
<body>
 
    <div class="header-image">
        <img src="bg taput.jpg" alt="Tapanuli Utara">
        <div class="header-text">
            <h1>Tapanuli Utara</h1>
            <p><a href="index.php" style="color: white;">Home</a> >> Tapanuli Utara</p>
        </div>
    </div>


<div class="container">
    <div class="row">
        <div class="col-md-8">
            <!-- Container Destinasi -->
            <div class="destination-container">
                <h2 class="text-center">Tapanuli Utara</h2>
                <div class="mt-4">
                    <h4>10 Destinasi Wisata Tapanuli Utara</h4>
                    <div class="row">
                        <!-- Loop destinasi -->
                        <div class="col-md-4">
                            <a href="Kawah Sipoholon.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Kawah Sipohon.jpg" alt="1. Kawah Sipoholon">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">1. Kawah Sipoholon</h5>
                                </a>
                                    <p class="card-text">Lokasi: Jl. Tarutung, Tapian Nauli, Kec. Sipoholon, Kabupaten Tapanuli Utara, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <!-- Ulangi blok di atas untuk destinasi lainnya -->
                        <div class="col-md-4">
                            <a href="Pemandian Air Soda Parbubu.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Pemandian Air Soda Parbubu.jpg" alt="2.Pemandian Air Soda Parbubu">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">2. Pemandian Air Soda Parbubu</h5>
                                </a>
                                    <p class="card-text">Lokasi: Parbubu I, Kec. Tarutung, Kabupaten Tapanuli Utara, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <a href="Salib Kasih.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Salib Kasih.jpg" alt="3. Salib Kasih">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">3. Salib Kasih</h5>
                                </a>
                                    <p class="card-text">Lokasi: Simorangkir Julu, Kec. Siatas Barita, Kabupaten Tapanuli Utara, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Situs Hindu Hopong.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Situs Hindu Hopong.jpg" alt="4. Situs Hindu Hopong">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">4. Situs Hindu Hopong</h5>
                                </a>
                                    <p class="card-text">Lokasi: Dolok Sanggul, Kec. Simangumban, Kabupaten Tapanuli Utara, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Muara Nauli.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Muara Nauli.jpg" alt="5. Muara Nauli">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">5. Muara Nauli</h5>
                                </a>
                                    <p class="card-text">Lokasi: Pasar Muara, Jalan Pelabuhan No. 10 Desa Hutanagodang, Kec. Muara, Kabupaten Tapanuli Utara, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Tugu Toga Aritonang.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Tugu Toga Aritonang.jpg" alt="6. Tugu Toga Aritonang">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">6. Tugu Toga Aritonang</h5>
                                </a>
                                    <p class="card-text">Lokasi: Desa, Dolok Martumbur, Kec. Muara, Kabupaten Tapanuli Utara, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Bukit Doa.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Bukit Doa.jpg" alt="7. Bukit Doa">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">7. Bukit Doa</h5>
                                </a>
                                    <p class="card-text">Lokasi: Huta Ginjang, Kec. Muara, Kabupaten Tapanuli Utara, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Huta Ginjang.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Huta Ginjang.jpg" alt="8. Huta Ginjang">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">8. Huta Ginjang</h5>
                                </a>
                                    <p class="card-text">Lokasi: Kec. Muara, Kabupaten Tapanuli Utara, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Pulau Sibandang.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Pulau Sibandang.jpg" alt="9. Pulau Sibandang">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">9. Pulau Sibandang</h5>
                                </a>
                                    <p class="card-text">Lokasi: Sibandang, Kec. Muara, Kabupaten Tapanuli Utara, Sumatera Utara</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <a href="Pemandian Air Panas Tamaro.php" class="destination-link">
                            <div class="card mb-4 box-shadow">
                                <img class="card-img-top grayscale-on-hover" src="Pemandian Air Panas Tamaro.jpg" alt="10. Pemandian Air Panas Tamaro">
                                <div class="card-body">
                                    <h5 class="card-title fade-on-hover">10. Pemandian Air Panas Tamaro</h5>
                                </a>
                                    <p class="card-text">Lokasi: Jl. AM. Tambunan, Hutabarat, Partali Toruan, Kec. Tarutung, Kabupaten Tapanuli Utara, Sumatera Utara</p>
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
<script src="Taput.js"></script>

</body>
</html>
