<?php


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