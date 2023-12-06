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
    <p>Pulau ini sering dikenal sebagai Maldives-nya Sumatera Utara. Pulau Kalimantung menyediakan berbagai pilihan kegiatan wisata laut seperti snorkeling, scuba diving, renang, dan kegiatan menarik lainnya seperti memancing dan mendaki. Pulau ini terletak di wilayah Kecamatan Tapian Nauli, Kabupaten Tapanuli Tengah, Provinsi Sumatera Utara, Indonesia. Pulau Kalimantung Nagodang memiliki pantai berpasir putih dan sebagian pantai bertebing.</p>
    <p>Pulau ini saat ini dalam keadaan sangat bersih dan memberikan kenyamanan yang luar biasa bagi para pengunjung. Tidak ada biaya masuk yang dikenakan, satu-satunya pengeluaran yang perlu Anda pertimbangkan adalah biaya penyewaan kapal dan penyeberangan. Keindahan pulau ini terletak pada pantai berpasir putih yang mempesona, keindahan alam bawah laut yang menakjubkan, dan sifat eksotis pulau itu sendiri. Selain itu, pulau ini memberikan ketenangan yang luar biasa dan memberikan kesan seperti memiliki pulau pribadi. Pulau ini tidak tersedia rumah makan, makadari itu anda disarankan membawa makanan dan minuman sendiri.</p>
    <p>Untuk mencapai lokasi ini, pertama-tama Anda harus mencapai Sibolga. Dari Medan, perjalanan bisa dilakukan melalui udara atau darat. Perjalanan darat membutuhkan waktu sekitar 10 jam dari Medan ke Sibolga. Jika memilih perjalanan udara, Anda akan turun di Bandara Pinangsori, Sibolga atau bisa melalui bandara Silangit, Siborong-borong membutuhkan waktu sekitar 3 jam untuk bisa samapi di Kota Sibolga dan sekitar 4 jam untuk bisa sampai di Kota Pandan.</p>
    <p>Jika ingin berkunjung ke Pulau Kalimantung sebaiknya anda memilih waktu yang tepat. Dikarenakan pulau ini terletak di bagian barat pulau Sumatera yang menyebabkan adanya angin kencang dan gelombang besar. Anda juga disarankan berangkat pagi hari dri Pandan atau Sibolga dan kembali sebelum jam 3 sore unutk menghindari gelombang pasang.</p>
    <p>Anda bisa menggunakan jasa Tour Travel yang menyediakan paket liburan ke Pulau Kalimantung dan beberapa pulau sekaligus. Seperti Pulau Kalimantung, Pulau Mursala, Pulau Badalu, hingga Pulau Poncan. Biasanya mereka memiliki titik kumpul di daerah Pandan atau Sibolga. Atau anda juga bisa menyewa kapal wisata khusus untuk ke Pulau Kalimantung saja dengan biaya sekitar 1,5 juta- 2 juta. Untuk penyewaan Speed boat kisaran 2 juta – 2,5 juta dengan waktu tempuh 45 menit – 1 jam.</p>
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





