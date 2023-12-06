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
    <p>Aek Sabaon, destinasi wisata yang terletak di dekat kaki Gunung Lubuk Raya, Kecamatan Marancar, Kabupaten Tapanuli Selatan, Sumut, menjadi magnet bagi para pengunjung, terutama wisatawan internasional, meski masih tergolong baru.</p>
    <p>Keelokan panorama alam yang terbebas dari kebisingan menjadi daya tarik utama bagi para pelancong yang ingin menikmati ketenangan dan keindahan alam. Tempat ini juga menawarkan bangunan yang memukau, dengan kebanyakan struktur yang terbuat dari kaca. Pengunjung setempat sering menggambarkan bangunan-bangunan ini sebagai pemandangan desa yang seperti di luar negeri.</p>
    <p>Keunikan tempat ini semakin terpancar karena bangunan-bangunan ini menghadap ke danau buatan. Suasananya yang sejuk, terutama di pagi hari ketika kabut turun, menambah daya tarik tersendiri.</p>
    <p>Para wisatawan dapat mengabadikan momen di sekitar danau yang dihuni oleh ikan-ikan berwarna-warni. Tidak hanya itu, beberapa rumah kecil khas Tapanuli Selatan juga turut memperkaya suasana, menciptakan atmosfer yang semakin autentik dan memikat. Selain itu, panorama hutan hijau yang lebat hingga ke kejauhan memberikan latar belakang yang menakjubkan. Semua ini menciptakan suasana yang mendukung untuk bersantai dan menikmati keindahan alam.</p>
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
