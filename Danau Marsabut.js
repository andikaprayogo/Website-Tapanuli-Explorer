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
           <p>Danau Marsabut, terletak di Kabupaten Tapanuli Selatan, menjadi destinasi kunjungan yang populer di kawasan tersebut. Lokasinya berada di Desa Bungo Bondar, Kecamatan Sipirok, tersembunyi di pedalaman dan dikelilingi oleh hutan Sipirok. Nama "Marsabut" berasal dari kata "markabut," menggambarkan keadaan danau yang selalu diselimuti oleh kabut.</p>
           <p>Meskipun Danau Marsabut memiliki daya tarik alami yang kuat, fasilitas di lokasi ini masih terbatas. Perlu perawatan dan pengembangan lebih lanjut agar dapat memberikan pengalaman yang memuaskan bagi para wisatawan.</p>
           <p>Akses menuju danau tidaklah mudah, dengan jalur yang cukup berliku dan minim fasilitas transportasi umum. Dari pusat pasar Sipirok, wisatawan dapat naik angkutan umum menuju simpang Bunga Bondar dengan ongkos sekitar Rp. 5.000. Dari sana, perjalanan dilanjutkan dengan berjalan kaki menanjak selama sekitar 2,5 jam atau menggunakan kendaraan pribadi.</p>
           <p>Selama perjalanan menuju Danau Marsabut, pengunjung akan melewati Pesantren Terpadu al-Aqsa dengan bangunan-bangunan yang indah. Sekitar 15 menit setelah meninggalkan pesantren, akan ada simpang ke kanan yang mengarah ke danau. Dari sini, perjalanan berlanjut dengan berjalan kaki selama sekitar 30 menit untuk mencapai Danau Marsabut. Meskipun aksesnya memerlukan usaha ekstra, keindahan alam danau yang diselimuti kabut membuat perjalanan ini sebanding dengan upaya yang dikeluarkan.</p>
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
