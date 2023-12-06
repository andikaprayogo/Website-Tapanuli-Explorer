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
    <link rel="stylesheet" href="blog.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Blog</title>
</head>
<body>

    
   
    <div class="body text-center ">
        <div class="container">
        <h1 class="display-4">Blog</h1>

   
        <div class="location-card">
            <a href="blog Air Terjun Silima-lima.html">
                <div class="blue-transparent-shape">
                    <img src="blogwisata1.jpg" alt="Air Terjun Silima-Lima">
                    <p class="location-title">Air Terjun Silima-Lima</p>
                    <p class="location-address">Maju Mambe, Kec. Marancar, Kabupaten Tapanuli Selatan, Sumatera Utara</p>
                </div>
            </a>
        </div>
    
        <div class="location-card">
            <a href="blog Pantai Batu Gajah.html">
                <div class="blue-transparent-shape">
                    <img src="blogwisata2.jpg" alt="Pantai Batu Gajah">
                    <p class="location-title">Pantai Batu Gajah</p>
                    <p class="location-address">Hajoran, Kec. Pandan, Kabupaten Tapanuli Tengah, Sumatera Utara</p>
                </div>
            </a>
        </div>
    
        <div class="location-card">
            <a href="blog Pemandian Air Panas Tamaro.html">
                <div class="blue-transparent-shape">
                    <img src="blogwisata3.jpg" alt="Pemandian Air Panas Tamaro">
                    <p class="location-title">Pemandian Air Panas Tamaro</p>
                    <p class="location-address">Jl. AM. Tambunan, Hutabarat, Partali Toruan, Kec. Tarutung, Kabupaten Tapanuli Utara, Sumatera Utara</p>
                </div>
            </a>
        </div>
    </div>
    
 <!-- Bootstrap JS dan jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

<!-- JavaScript Kustom -->
<script src="blog.js"></script>

</body>
</html>   
