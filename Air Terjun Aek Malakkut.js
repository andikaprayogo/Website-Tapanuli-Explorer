window.addEventListener('scroll', function () {
    var navbar = document.querySelector('.navbar');
    navbar.classList.toggle('scrolled', window.scrollY > 0);
});

document.getElementById('findButton').addEventListener('click', function() {
    // Implementasikan fungsionalitas pencarian di sini
    cariDestinasi();
});

function cariDestinasi() {
    // Dapatkan nilai input
    var inputCari = document.querySelector('.form-control').value.toLowerCase();

    // Dapatkan semua item destinasi
    var itemDestinasi = document.querySelectorAll('.col-md-4');

    // Flag untuk mengecek apakah ada destinasi yang ditemukan
    var destinasiDitemukan = false;

    // Loop melalui setiap item destinasi
    itemDestinasi.forEach(function(item) {
        // Dapatkan nama destinasi
        var namaDestinasi = item.querySelector('h5').innerText.toLowerCase();
        var lokasiDestinasi = item.querySelector('.card-text').innerText.toLowerCase();

        // Periksa apakah nama destinasi atau lokasi mengandung input pencarian
        if (namaDestinasi.includes(inputCari) || lokasiDestinasi.includes(inputCari)) {
            // Jika iya, tampilkan destinasi
            item.style.display = 'block';
            destinasiDitemukan = true;
        } else {
            // Jika tidak, sembunyikan destinasi
            item.style.display = 'none';
        }
    });

   
}



function showDetails() {
    document.querySelector('.about-us-content').innerHTML = `
    <p>Salah satu air terjun yang mengundang kagum di Tapanuli Selatan adalah Aek Malakkut. Destinasi wisata ini memang menuntut perjuangan ekstra untuk mencapainya. Tersembunyi di Desa Marancar Gondang, Kecamatan Marancar, Kabupaten Tapanuli Selatan, Sumatera Utara, Aek Malakkut mempersembahkan keaslian alam yang jarang tersentuh.</p>
    <p>Tempat ini memamerkan kealamian yang masih terjaga, memaksa para wisatawan untuk menembus hutan dan berjalan kaki selama sekitar 2 jam. Meskipun perjalanan membutuhkan usaha, semua akan tergantikan oleh keajaiban dinding batu yang kokoh dan tanaman hijau yang mempesona, menggambarkan keindahan yang memanjakan mata.</p>
    <p>Melangkah ke tempat ini, setiap langkah dihargai dengan keaslian alam yang masih murni. Dinding batu yang berdiri tegap menciptakan pemandangan yang megah, sementara tanaman hijau merambat memberikan sentuhan hijau yang menyejukkan. Keunikan Aek Malakkut terletak pada kesulitan aksesnya, yang menjadikannya tempat yang hampir belum tersentuh oleh tangan manusia, menghadirkan pengalaman wisata yang autentik dan mengesankan.</p>
    `;
}

function showPhotos() {
    document.querySelector('.about-us-content').innerHTML = `
        <img src="pulaukalimantung1.jpg" alt=" Pulau Kalimantung">
        <img src="photo2.jpg" alt="Wisata Pulau Kalimantung"></img>
        <!-- ... (more photo content) ... -->
    `;
}

function showLocation() {
    document.querySelector('.about-us-content').innerHTML = `
        <iframe src="https://maps.app.goo.gl/ZNKJPz7HPks1fH1y8" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <!-- ... (more location content) ... -->
    `;
}
