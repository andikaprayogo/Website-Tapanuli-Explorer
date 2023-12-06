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
    <p>Parsariran, sebuah permandian alam yang menjadi andalan wisata Sumatera Utara, terutama di Tapanuli Selatan, memang patut masuk dalam daftar destinasi favorit. Terletak di Batangtoru, sekitar 30 kilometer atau setengah jam perjalanan dari Kota Padangsidimpuan, Parsariran menawarkan keindahan alam yang tak terlupakan.</p>
    <p>Air sungainya yang jernih, dikelilingi oleh batu-batu besar, menciptakan suasana mandi yang nyaman dan menyenangkan. Meski sungainya agak deras, namun tidak terlalu dalam, sehingga menjadi tempat yang ideal untuk anak-anak bermain dan mandi.</p>
    <p>Pada liburan panjang seperti Natal dan Tahun Baru, Parsariran selalu dipadati oleh warga masyarakat yang ingin menikmati momen bersama keluarga. Lokasinya yang strategis di pinggir jalan lintas Padangsidimpuan-Sibolga membuatnya menjadi tempat istirahat favorit bagi mereka yang sedang dalam perjalanan menuju pantai Sibolga atau kembali ke Sidimpuan. Bahkan, ada yang sengaja datang hanya untuk merasakan kesegaran mandi dan menghabiskan waktu bersama keluarga sepanjang hari. </p>
    <p>Aek Parsariran menjadi pilihan tepat bagi keluarga dengan anak kecil, karena selain mandi, tempat ini juga menyediakan tempat makan bersama di atas sungai. Suasana deburan air dan batu-batu besar di sekitar sungai menambah kenikmatan saat bersantai dan makan bersama. Wisata ini sangat direkomendasikan sebagai destinasi keluarga terbaik di Sumatera Utara. </p>
    <p>Fasilitas yang sudah tersedia sepanjang bibir sungai, seperti pondok, warung, ruang ganti pakaian, musholla, semakin melengkapi kenyamanan pengunjung. Biaya parkir yang terjangkau biasanya merupakan satu-satunya biaya yang dikenakan, sementara makanan dapat dipesan dari warung yang tersedia, mulai dari ikan mas bakar hingga udang goreng, sesuai dengan selera masing-masing. </p>
    <p>Selain kegiatan mandi, pengunjung juga dapat menyewa pelampung seperti bebek atau angsa dengan harga yang terjangkau, berkisar antara Rp.30 ribu hingga Rp.50 ribu per jenisnya. Jangan lupa membawa pakaian ganti jika berniat untuk bermain air di Parsariran, namun tak perlu khawatir, karena tempat ini telah dilengkapi dengan fasilitas lainnya seperti kamar mandi, musholla, dan lain sebagainya untuk menunjang kenyamanan pengunjung. </p>
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
