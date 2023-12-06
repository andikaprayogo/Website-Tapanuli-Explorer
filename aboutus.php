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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="aboutus.css">
    <title>Tentang Kami</title>

    <style>
  /* Gaya untuk tampilan handphone (lebar maksimum 767px) */
@media (max-width: 767px) {
    .btn.btn-primary {
        display: block;
        margin: 0 auto;
        text-align: center;
        padding: 10px 20px; /* Sesuaikan dengan kebutuhan Anda */
    }

    .btn.btn-primary span {
        display: inline-block;
        vertical-align: middle;
        line-height: 3.5; /* Sesuaikan dengan kebutuhan Anda */
    }
}

    </style>


</head>
<body>

        <div class="about-us-container">
            <div class="container">
            <h1>Tentang Kami</h1>
            <p>Dapatkan pengalaman menakjubkan dan tak terlupakan di Tapanuli yang eksotik dan penuh petualangan.</p>

           

            <div class="logo-container">
                <div class="shape">
                    <div class="logo"></div>
                    <div class="text-inside-shape">
                        <p>Destinasi Menarik</p>
                        <p>Tapanuli Explorer menawarkan berbagai destinasi wisata menarik di daerah Tapanuli yang wajib untuk dikunjungi.</p>
                    </div>
                </div>
               
            </div>
            <a href="index.php" class="btn btn-primary mt-3">Home</a>
        </div>
    </div>

    <!-- Bootstrap JS dan jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <!-- JavaScript Kustom -->
<script src="aboutus.js"></script>

</body>
</html>
