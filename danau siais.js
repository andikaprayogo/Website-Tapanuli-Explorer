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
    <p>Danau Siais, tersembunyi sekitar 40 kilometer dari pusat kehidupan di Tapanuli Selatan, menawarkan keindahan alam seperti permadani hijau yang memukau di balik rerimbunan hutan. Pesona mempesona danau ini menjadikannya destinasi yang patut dijelajahi.</p>
    <p>Dengan luas mencapai 4.500 hektare, danau ini menjulang di Kelurahan Rianiate, Kecamatan Angkola Sangkunur, Kabupaten Tapanuli Selatan. Dari kota Padang Sidempuan, perjalanan sekitar 60 kilometer akan membawa Anda ke Desa Rianiate di mana keindahan Danau Siais memukau. Jika berasal dari Sipirok, perjalanan lebih kurang 80 km akan membawa Anda ke destinasi ini. Akses menuju Danau Siais saat ini hanya dapat ditempuh melalui jalur darat yang menawarkan pemandangan menakjubkan sepanjang perjalanan.</p>
    <p>Dikelilingi oleh perbukitan dan hutan yang mempesona, Danau Siais telah diakui sebagai Bumi Perkemahan Pramuka Kabupaten Tapanuli Selatan. Air danau yang jernih memikat, sementara di tepiannya berdiri bangunan milik pemerintah daerah dan warga setempat yang menawarkan berbagai produk menarik. Jalan menuju Danau Siais sebagian besar dalam kondisi baik, meskipun beberapa kilometer masih dalam tahap pembangunan. Sebuah petualangan melintasi daerah ini menjanjikan pengalaman yang tak terlupakan.</p>
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
