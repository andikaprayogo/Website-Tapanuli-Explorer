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
    
    <link rel="stylesheet" href="destination.css">
    <title>Destination</title>

    <style>

/* Gaya untuk tampilan handphone (lebar maksimum 767px) */
@media (max-width: 767px) {
    .container.text-center {
        text-align: center; /* Pusatkan teks */
    }

    .display-4 {
        font-size: 2.2em; /* Atur jarak atas sesuai kebutuhan */
    }
}


    </style>

    
</head>
<body>
    


    <div class="container text-center mt-5">
        <h1 class="display-4">Destination</h1>
        
        <a href="tapsel.php">
            <div class="blue-shape">
                <p class="large-text">TAPSEL</p>
                <p class="small-text">Tapanuli Selatan</p>
            </div>
        </a>
        <a href="tapteng.php">
            <div class="transparent-blue-shape">
                <p class="large-text">TAPTENG</p>
                <p class="small-text">Tapanuli Tengah</p>
            </div>
        </a>
        <a href="taput.php">
            <div class="blue-shape">
                <p class="large-text">TAPUT</p>
                <p class="small-text">Tapanuli Utara</p>
            </div>
        </a>
    </div>
     <!-- Add the Bootstrap JavaScript and Popper.js scripts -->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

     <!-- JavaScript Kustom -->
     <script src="destination.js"></script>

</body>
</html>

