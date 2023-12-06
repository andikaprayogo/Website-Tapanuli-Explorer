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
    <p>Air Terjun Sisundung Parsalakan, terletak di Desa Sisundung, Kecamatan Angkola Barat, Kabupaten Tapanuli Selatan, menjadi sebuah surga tersembunyi yang dapat diakses sekitar 2 km dari jalan lintas Sidimpuan Sibolga. Meskipun dapat dijangkau dengan kendaraan roda dua hingga tempat parkir, pengalaman sejati dimulai dengan berjalan kaki melalui jalan setapak, melewati pesona persawahan dan kebun salak milik warga.</p>
    <p>Air Terjun Sisundung Parsalakan, juga dikenal sebagai Air Terjun Ganda, menghadirkan dua aliran air yang mengalir berdampingan, menciptakan keindahan alam yang memukau di Desa Sisundung. Kedua air terjun ini menjatuhkan air bersih dan jernih dari bebatuan tinggi dan besar, menciptakan kolam kecil yang sama. Meskipun belum mendapatkan pengelolaan resmi, keindahan alamnya tetap terjaga dalam kesejukan dan ketenangan alamiahnya.</p>
    <p>Karena belum resmi dikelola, keberadaan Air Terjun Sisundung Parsalakan tetap memancarkan keaslian yang memikat. Tanpa campur tangan manusia yang berlebihan, pengunjung dapat menikmati keindahan alam yang masih murni. Meski akses yang cukup menantang membuatnya jarang dikunjungi, hal ini justru mempertahankan keaslian alam dan ketenangan di sekitar air terjun.</p>
    <p>Panorama alami dan mempesona yang ditawarkan oleh Air Terjun Sisundung Parsalakan menciptakan pengalaman yang tak terlupakan. Udara pegunungan yang sejuk dan segar menjadi penyegar bagi pikiran yang lelah dari kesibukan kota. Kolam air terjun yang bersih dan jernih juga menawarkan tempat yang ideal untuk mandi dan berenang, memberikan kesempatan untuk merasakan kelezatan alam dalam ketenangan dan keindahan yang masih alami.</p>
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
