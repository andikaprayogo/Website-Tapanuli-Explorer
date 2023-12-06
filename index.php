<?php
session_start();

// Fungsi untuk menampilkan bagian navbar sesuai status login
function tampilkanNavbar() {
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="Logo" class="img-fluid" width="100">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
           
                <?php
                if (isset($_SESSION['id']) && isset($_SESSION['name'])) {
                    // Tampilkan bagian navbar sesuai dengan pengguna yang sudah login
                   echo '<div class="collapse navbar-collapse" id="navbarNav">' ;
                   echo '<ul class="navbar-nav">' ;
                   echo '<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>' ;
                   echo '<li class="nav-item"><a class="nav-link" href="aboutus.php">Tentang Kami</a></li>' ;
                   echo '<li class="nav-item"><a class="nav-link" href="destination.php">Destinasi</a></li>' ;
                   echo '<li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>' ;

                    echo '<div class="login text-end">';
                    echo '<a href="login/logout.php" class="text-white">';
                    echo '<img src="login.png" alt="Ikon Pengguna" class="user-icon" width="30">';
                    echo 'Logout ' . $_SESSION['name'];
                    echo '</a>';
                    echo '</div>';
                } else {
                    // Tampilkan bagian navbar sesuai dengan pengguna yang belum login
                    echo '<div class="collapse navbar-collapse" id="navbarNav">' ;
                    echo '<ul class="navbar-nav">' ;
                    echo '<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>' ;
                    echo '<li class="nav-item"><a class="nav-link" href="aboutus.php">Tentang Kami</a></li>' ;
                    echo '<li class="nav-item"><a class="nav-link" href="login destinasi.html">Destinasi</a></li>' ;
                    echo '<li class="nav-item"><a class="nav-link" href="login blog.html">Blog</a></li>' ;

                    echo '<div class="login text-end">';
                    echo '<a href="login/login.php" class="text-white">';
                    echo '<img src="login.png" alt="Ikon Pengguna" class="user-icon" width="30">';
                    echo 'Login';
                    echo '</a>';
                    echo '</div>';
                }
                ?>
            </div>
        </div>
    </nav>
    <?php
}

// Fungsi untuk menampilkan bagian footer
function tampilkanFooter() {
    ?>
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <!-- Logo Website -->
                    <img src="logo.png" alt="Tapanuli Explorer" class="img-fluid" width="100">
                </div>
                <div class="col-lg-4 mb-4">
                    <!-- Copyright Tapanuli Explorer -->
                    <p class="copyright">&copy; 2023 Tapanuli Explorer. All Rights Reserved.</p>
                </div>
                <div class="col-lg-4">
                    <!-- Pilihan Destinasi -->
                    <h5>Pilihan Destinasi</h5>
                    <ul class="list-unstyled">
                        <li><a href="Taput.php" class="text-white">Tapanuli Utara</a></li>
                        <li><a href="tapteng.php" class="text-white">Tapanuli Tengah</a></li>
                        <li><a href="tapsel.php" class="text-white">Tapanuli Selatan</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <?php
}

// Fungsi untuk menampilkan bagian Carousel
function tampilkanCarousel() {
    ?>
    <div id="myCarousel" class="carousel slide position-relative" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="background (1).jpg" class="d-block w-100 img-fluid" style="object-fit: cover; max-height: 100vh;" alt="Image 1">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
                    <?php
                    // Cek apakah pengguna sudah login
                    if (isset($_SESSION['id']) && isset($_SESSION['name'])) {
                        // Jika sudah login, tampilkan nama pengguna di tombol
                        echo '<a href="destination.php" class="btn btn-primary btn-lg mt-3">Mari Kita Explorasi Destinasi, ' . $_SESSION['name'] . '</a>';
                    } else {
                        // Jika belum login, tampilkan tombol tanpa nama pengguna
                        echo '<a href="login/login.php" class="btn btn-primary btn-lg mt-3">Login Untuk Explorasi Destinasi</a>';
                    }
                    ?>
                </div>
            </div>
            <!-- Tambahkan item carousel lainnya sesuai kebutuhan -->
            <!-- Item Carousel 2 -->
            <div class="carousel-item">
                <img src="Salib Kasih.jpg" class="d-block w-100 img-fluid dark-image" style="object-fit: cover; max-height: 100vh;" alt="Image 2">
                <div class="carousel-caption d-flex flex-column justify-content-center align-items-center">
                    <!-- Tambahkan konten Carousel 2 sesuai kebutuhan -->
                    <!-- Contoh: -->
                    <h1 class="destination-text">Tapanuli Utara</h1>
                    <p class="destination-description">
                        Tapanuli Utara, surga tersembunyi di utara Sumatera, memukau dengan keindahan alamnya yang menakjubkan. Dikelilingi oleh pegunungan hijau, sungai-sungai jernih, dan air terjun yang mempesona, daerah ini menawarkan petualangan alam yang tak terlupakan. Keberagaman budayanya terpancar dalam tarian tradisional, kuliner khas Batak yang lezat, dan situs-situs bersejarah yang mengisahkan kejayaan masa lalu. Selamat datang di Tapanuli Utara, di mana pesona alam dan kehangatan budaya menyambut setiap pengunjung.
                    </p>
                </div>
            </div>
            <!-- Item Carousel 3 -->
            <div class="carousel-item">
                <img src="Pantai Batu Gajah.jpg" class="d-block w-100 img-fluid dark-image" style="object-fit: cover; max-height: 100vh;" alt="Image 3">
                <div class="carousel-caption">
                    <!-- Tambahkan konten Carousel 3 sesuai kebutuhan -->
                    <!-- Contoh: -->
                    <h1 class="destination-text">Tapanuli Tengah</h1>
                    <p class="destination-description">
                        Tapanuli Tengah, sebuah oasis keindahan di tengah Sumatera, mengajak Anda merasakan pesona alam yang menakjubkan. Dengan lanskap yang beragam, dari perbukitan hingga sungai yang menyejukkan, daerah ini menawarkan pengalaman eksplorasi alam yang menyegarkan. Jelajahi kearifan lokal melalui kuliner autentik dan nikmati kehangatan keramahan masyarakat. Selamat menikmati keindahan sederhana namun memukau di Tapanuli Tengah.
                    </p>
                </div>
            </div>
            <!-- Item Carousel 4 -->
            <div class="carousel-item">
                <img src="Aek Sabaon.jpg" class="d-block w-100 img-fluid dark-image" style="object-fit: cover; max-height: 100vh;" alt="Image 4">
                <div class="carousel-caption">
                    <!-- Tambahkan konten Carousel 4 sesuai kebutuhan -->
                    <!-- Contoh: -->
                    <h1 class="destination-text">Tapanuli Selatan</h1>
                    <p class="destination-description">
                        Tapanuli Selatan, pesona alam yang memukau di ujung selatan Sumatera. Pantai-pantai berpasir putihnya memikat hati, sementara perbukitan melengkapi kecantikan alamnya. Kearifan lokal dan keberagaman budaya tampak dalam kuliner khas dan tarian tradisional. Situs bersejarah menjadi jejak kejayaan masa lalu. Selamat menikmati keindahan dan kehangatan Tapanuli Selatan, destinasi yang mempesona.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <?php
}


// Fungsi untuk rekomendasi wisata
function tampilkanwisata() {
    ?>

    <?php
    // Cek apakah pengguna sudah login
    if (isset($_SESSION['id']) && isset($_SESSION['name'])) {
    // Jika sudah login, gambar menuju ke halaman wisata
     
     echo '<div class="container mt-5">' ;
                   echo '<div class="row">' ;
                   echo   ' <div class="col-lg-12">';
                   echo     '  <h1 class="text-center">Rekomendasi Wisata</h1> ';
                   echo   ' </div>' ;
                   echo ' </div>' ;
                   echo ' <div class="row mt-4">' ;
                   echo   '  <div class="col-lg-4 mb-4">' ;
                   echo       '  <div class="card">' ;
                   echo        '  <a href="Kawah Sipoholon.php" class="destination-link">' ;
                   echo            '  <img src="Kawah Sipohon.jpg" class="card-img grayscale-on-hover" alt="Destinasi 1">' ;
                   echo            ' <div class="card-img-overlay">' ;
                   echo              '   <h5 class="card-title fade-on-hover">Kawah Sipoholon</h5>' ;
                   echo           '  </div>';
                   echo        ' </a>';
                   echo     '</div>';
                   echo '</div>';
                
                   echo        '<div class="col-lg-4 mb-4">' ;
                   echo     '<div class="card">' ;
                   echo        ' <a href="Pulau Kalimantung.php" class="destination-link">' ;
                   echo           '  <img src="pulau kalimantung.jpg" class="card-img grayscale-on-hover" alt="Destinasi 2">' ;
                   echo            ' <div class="card-img-overlay">' ;
                   echo                 '<h5 class="card-title fade-on-hover">Pulau Kalimantung</h5>' ;
                   echo             '</div>';
                   echo         '</a>';
                   echo     '</div>';
                   echo '</div>';
                
                   echo        '<div class="col-lg-4 mb-4">' ;
                   echo     '<div class="card">' ;
                   echo         '<a href="Aek Sijorni.php" class="destination-link">' ;
                   echo             '<img src="Aek Sijorni.jpg" class="card-img grayscale-on-hover" alt="Destinasi 3">' ;
                   echo             '<div class="card-img-overlay">' ;
                   echo                 '<h5 class="card-title fade-on-hover">Aek Sijorni</h5>' ;
                   echo             '</div>';
                   echo         '</a>';
                   echo     '</div>';
                   echo '</div>';
                
                   echo '<div class="col-lg-4 mb-4">' ;
                   echo     '<div class="card">' ;
                   echo         '<a href="Aek Sabaon.php" class="destination-link">' ;
                   echo             '<img src="Aek Sabaon.jpg" class="card-img grayscale-on-hover" alt="Destinasi 4">' ;
                   echo             '<div class="card-img-overlay">' ;
                   echo                 '<h5 class="card-title fade-on-hover">Aek Sabaon</h5>' ;
                   echo            '</div>' ;
                   echo         '</a>' ;
                   echo     '</div>' ;
                   echo '</div>' ;
                
                       
                
                   echo '<div class="col-lg-4 mb-4">' ;
                   echo     '<div class="card">' ;
                   echo         '<a href="danau siais.php" class="destination-link">' ;
                   echo             '<img src="danau siais.jpg" class="card-img grayscale-on-hover" alt="Destinasi 5">' ;
                   echo             '<div class="card-img-overlay">' ;
                   echo                 '<h5 class="card-title fade-on-hover">Danau Siais</h5>' ;
                   echo             '</div>' ;
                   echo         '</a>' ;
                   echo     '</div>' ;
                   echo '</div>' ;
                
                   echo '<div class="col-lg-4 mb-4">' ;
                   echo     '<div class="card">' ;
                   echo         '<a href="Pemandian Air Soda Parbubu.php" class="destination-link">' ;
                   echo             '<img src="Pemandian Air Soda Parbubu.jpg" class="card-img grayscale-on-hover" alt="Destinasi 6">' ;
                   echo             '<div class="card-img-overlay">' ;
                   echo                 '<h5 class="card-title fade-on-hover">Pemandian Air Soda Parbubu</h5>' ;
                   echo             '</div>' ;
                   echo         '</a>' ;
                   echo         '</div>' ;
                   echo '</div>' ;
                
            echo    '</div>' ;
    echo      '</div>' ;

            } else {
           
                        // Jika belum login, maka tidak bisa mengakses halaman wisata
                         
       echo '<div class="container mt-5">' ;
                   echo '<div class="row">' ;
                   echo   ' <div class="col-lg-12">';
                   echo     '  <h1 class="text-center">Rekomendasi Wisata</h1> ';
                   echo   ' </div>' ;
                   echo ' </div>' ;
                   echo ' <div class="row mt-4">' ;
                   echo   '  <div class="col-lg-4 mb-4">' ;
                   echo       '  <div class="card">' ;
                   echo        '  <a href="login wisata.html" class="destination-link">' ;
                   echo            '  <img src="Kawah Sipohon.jpg" class="card-img grayscale-on-hover" alt="Destinasi 1">' ;
                   echo            ' <div class="card-img-overlay">' ;
                   echo              '   <h5 class="card-title fade-on-hover">Kawah Sipoholon</h5>' ;
                   echo           '  </div>';
                   echo        ' </a>';
                   echo     '</div>';
                   echo '</div>';
                
                   echo        '<div class="col-lg-4 mb-4">' ;
                   echo     '<div class="card">' ;
                   echo        ' <a href="login wisata.html" class="destination-link">' ;
                   echo           '  <img src="pulau kalimantung.jpg" class="card-img grayscale-on-hover" alt="Destinasi 2">' ;
                   echo            ' <div class="card-img-overlay">' ;
                   echo                 '<h5 class="card-title fade-on-hover">Pulau Kalimantung</h5>' ;
                   echo             '</div>';
                   echo         '</a>';
                   echo     '</div>';
                   echo '</div>';
                
                   echo        '<div class="col-lg-4 mb-4">' ;
                   echo     '<div class="card">' ;
                   echo         '<a href="login wisata.html" class="destination-link">' ;
                   echo             '<img src="Aek Sijorni.jpg" class="card-img grayscale-on-hover" alt="Destinasi 3">' ;
                   echo             '<div class="card-img-overlay">' ;
                   echo                 '<h5 class="card-title fade-on-hover">Aek Sijorni</h5>' ;
                   echo             '</div>';
                   echo         '</a>';
                   echo     '</div>';
                   echo '</div>';
                
                   echo '<div class="col-lg-4 mb-4">' ;
                   echo     '<div class="card">' ;
                   echo         '<a href="login wisata.html" class="destination-link">' ;
                   echo             '<img src="Aek Sabaon.jpg" class="card-img grayscale-on-hover" alt="Destinasi 4">' ;
                   echo             '<div class="card-img-overlay">' ;
                   echo                 '<h5 class="card-title fade-on-hover">Aek Sabaon</h5>' ;
                   echo            '</div>' ;
                   echo         '</a>' ;
                   echo     '</div>' ;
                   echo '</div>' ;
                
                       
                
                   echo '<div class="col-lg-4 mb-4">' ;
                   echo     '<div class="card">' ;
                   echo         '<a href="login wisata.html" class="destination-link">' ;
                   echo             '<img src="danau siais.jpg" class="card-img grayscale-on-hover" alt="Destinasi 5">' ;
                   echo             '<div class="card-img-overlay">' ;
                   echo                 '<h5 class="card-title fade-on-hover">Danau Siais</h5>' ;
                   echo             '</div>' ;
                   echo         '</a>' ;
                   echo     '</div>' ;
                   echo '</div>' ;
                
                   echo '<div class="col-lg-4 mb-4">' ;
                   echo     '<div class="card">' ;
                   echo         '<a href="login wisata.html" class="destination-link">' ;
                   echo             '<img src="Pemandian Air Soda Parbubu.jpg" class="card-img grayscale-on-hover" alt="Destinasi 6">' ;
                   echo             '<div class="card-img-overlay">' ;
                   echo                 '<h5 class="card-title fade-on-hover">Pemandian Air Soda Parbubu</h5>' ;
                   echo             '</div>' ;
                   echo         '</a>' ;
                   echo         '</div>' ;
                   echo '</div>' ;
                
            echo    '</div>' ;
    echo      '</div>' ;
    
             }
         ?>
    </div>
</div>

            <?php
}
            

// Tampilkan bagian navbar
tampilkanNavbar();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <style>
        .destination-description {
        text-align: justify;
        text-justify: inter-word;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    @media (max-width: 550px) {
        .destination-description {
            font-size: 0.5em; /* Atur ukuran font sesuai kebutuhan */
        }
    }
     

    @media (max-width: 550px) {
    .btn.btn-primary.btn-lg.mt-3 {
        font-size: 0.7em; /* Atur ukuran font sesuai kebutuhan */
    }
}

/* Gaya untuk tampilan handphone (lebar maksimum 767px) */
@media (max-width: 767px) {
    .carousel-control-prev,
    .carousel-control-next {
        top: 20%; /* Posisi vertical setengah dari tinggi gambar */
        transform: translateY(-50%); /* Menyesuaikan posisi tombol secara tepat di tengah vertikal gambar */
    }
}


      </style>



      
   
    <title>Tapanuli Explorer</title>
</head>
<body>
    
    <main>
    
    <?php
    // Tampilkan bagian Carousel
    tampilkanCarousel();
    ?>

                <!-- Navigasi Carousel -->
            
            <button class="carousel-control-prev custom-arrow" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </button>
        
            <button class="carousel-control-next custom-arrow" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </button>
        </div>
        

        <?php
        // Tampilkan wisata
        tampilkanwisata();
        ?>
            
            
    
    
        <div class="background">
            <!-- Isi konten destinasi wisata -->
        </div>
    </main>


    <!-- Bootstrap JS dan Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

   

    <script>
        window.addEventListener('scroll', function () {
            var navbar = document.querySelector('.navbar');
            navbar.classList.toggle('scrolled', window.scrollY > 0);
        });
    </script>

<script>
    // JavaScript untuk tombol panah
    document.addEventListener('DOMContentLoaded', function () {
        const carousel = new bootstrap.Carousel(document.getElementById('myCarousel'));

        document.addEventListener('keydown', function (event) {
            if (event.code === 'ArrowLeft') {
                carousel.prev();
            } else if (event.code === 'ArrowRight') {
                carousel.next();
            }
        });
    });
</script>

<?php
// Tampilkan bagian footer
tampilkanFooter();
?>

</body>
</html>


