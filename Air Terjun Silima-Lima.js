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
    <p>Keindahan Air Terjun Silima-Lima sangat memikat dan menghipnotis pengunjung yang datang kesana.  Air Terjun Silima-Lima ini menyuguhkan potret alam yang luar biasa menakjubkan, sebuah air terjun yang dibentengi oleh dua pegunungan yang sangat terkenal di Tapanuli Selatan, yaitu Gunung Lubuk Raya dan Gunung Sibual-Buali.</p>
    <p>Kehebatan Air Terjun Silima-Lima terungkap ketika dilihat dari kejauhan, sebuah pancaran air setinggi 80 meter yang menjadikannya air terjun tertinggi di wilayah ini. Gemuruh air jatuhnya sudah terdengar dengan nyaring, menambahkan kesan dramatis pada pengalaman menyaksikan keindahan alam ini. Berlokasi di ketinggian sekitar 1.000 meter di atas permukaan laut, air terjun ini bukan hanya destinasi, melainkan sebuah karya seni alam yang memukau.</p>
    <p>Perjalanan menuju lokasi air terjun menuntut usaha dan semangat tinggi, karena akses melewati "tangga seribu" sepanjang sekitar 1 kilometer. Meskipun tantangan, tangga seribu menjadi lebih dari sekadar perjalanan, namun juga tempat untuk berfoto dan berselfie. Keamanan dan kenyamanan pengunjung dijamin dengan adanya pegangan besi di sisi tangga.</p>
    <p>Meski menuruni tangga seribu, perjalanan ini menawarkan keindahan yang luar biasa. Pemandangan pegunungan yang memukau dan udara segar mendampingi setiap langkah trekking. Seiring perjalanan, batu besar dengan narasi modern yang disebut "batu jodoh" menjadi daya tarik sendiri, menjadi spot selfie yang populer.</p>
    <p>Spot-spot menakjubkan untuk mengabadikan momen tersedia di sepanjang perjalanan, termasuk di jembatan kayu yang panjang dan eksotis. Jembatan ini, dengan latar belakang air terjun, menjadi lokasi fotografi yang sangat menarik dan menandakan kedekatan dengan destinasi utama.</p>
    <p>Untuk mencapai Air Terjun Silima-Lima dari Padang Sidempuan memerlukan waktu sekitar satu hingga 1,5 jam, dengan pemandangan yang memanjakan mata sepanjang perjalanan. Fasilitas di lokasi, mulai dari fasilitas trekking, wahana, hingga informasi bagi pengunjung, sudah tersedia dengan baik. Lokasi yang teratur ini menawarkan pengalaman wisata yang tak terlupakan bagi setiap pengunjung.</p>
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
