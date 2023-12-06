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
    <p>Tor Simago-mago, terletak di daerah Sipirok, Kabupaten Tapanuli Selatan, adalah destinasi wisata yang hampir tenggelam namun kini mengalami transformasi positif melalui upaya pembangunan oleh pemerintah setempat.</p>
    <p>Dengan arti 'Bukit Si Hilang-Hilang' dalam bahasa Batak, Tor Simago-mago memiliki kisah menarik yang melekat pada namanya. Legenda lokal menceritakan tentang sepasang muda-mudi yang menghilang secara misterius saat sedang bercinta di bukit ini, dan tak pernah terlihat lagi.</p>
    <p>Wisata ini telah dikenal selama puluhan tahun, dan kini mengalami perbaikan yang signifikan oleh pemerintah daerah. Upaya tersebut mencakup perbaikan jalan masuk, penambahan lampu penerangan jalan, penyediaan air bersih, serta fasilitas MCK. Gazebo dan gapura masuk turut dibangun untuk meningkatkan kenyamanan pengunjung.</p>
    <p>Tor Simago-mago menjadi tempat yang ideal untuk menikmati udara segar sambil menatap hijaunya hamparan rumput, menciptakan suasana yang menenangkan bagi keluarga. Wahana hiburan juga tersedia di tempat ini, memberikan keseruan khususnya bagi anak-anak yang berkunjung.</p>
    <p>Melalui pembangunan ini, Tor Simago-mago bukan hanya menjadi saksi bisu legenda lokal, tetapi juga destinasi yang mengundang pengunjung untuk menikmati keindahan alam sambil merasakan kenyamanan fasilitas modern. Sebuah tempat di mana cerita mistis bergabung dengan keindahan alam yang direvitalisasi, menciptakan pengalaman wisata yang unik dan tak terlupakan.</p>
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
