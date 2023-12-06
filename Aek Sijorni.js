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
            <p>Aek Sijorni, destinasi alam yang terletak di Desa Aek Libung, Kecamatan Sayurmatingi, Kabupaten Tapanuli Selatan, mengundang para pengunjung untuk menikmati keindahan air terjun bertingkat di tengah hamparan pohon kelapa yang rapat. Terletak sekitar 30 km dari Kota Padang Sidempuan menuju Mandailing Natal, tempat ini menawarkan pesona alam yang memesona.</p>
            <p>Air terjun bertingkat di Aek Sijorni menawarkan kejernihan air yang konstan, berkat aliran sungai yang melintasi batu codas tanpa mengandung lumpur. Lingkungan sekitarnya dipenuhi dengan rimbunan pohon kelapa yang menambahkan kesan alami dan segar. Untuk mencapai tempat ini, pengunjung harus melintasi jembatan gantung di atas Sungai Sayur Matinggi dengan membayar tiket masuk sebesar Rp. 2.000,-.</p>
            <p>Keunikan Aek Sijorni terletak pada perjalanan menuju lokasi pemandian, yang melibatkan melewati beberapa kebun masyarakat. Setiap melewati kebun tersebut, pengunjung diharuskan membayar Rp. 2.000,-, dan proses ini terulang sekitar 4 kali. Meskipun terdengar unik, pengalaman ini menjadi bagian dari petualangan menuju keindahan alam Aek Sijorni.</p>
            <p>Tempat ini sangat ramai, terutama pada hari libur, dan mencapai puncak kunjungan saat hari lebaran. Asal nama "Aek Sijorni" berasal dari bahasa Batak, di mana "aek" berarti air, dan "sijorni" berarti bersih. Sesuai dengan namanya, aliran air di tempat ini selalu mempertahankan kejernihan, bahkan saat debit air sedang tinggi. Sehingga, pengunjung dapat menikmati keindahan alam yang menyegarkan di Aek Sijorni, membuat setiap kunjungan menjadi pengalaman yang tak terlupakan.</p>
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
