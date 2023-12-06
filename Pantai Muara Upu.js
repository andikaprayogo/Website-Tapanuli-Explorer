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
    <p>Pantai Muara Upu, yang terletak di Desa Muara Upu, Kecamatan Muara Batang Toru, Kabupaten Tapanuli Selatan, Sumatera Utara, mengundang para pengunjung dengan keindahan alamnya. Pantai ini juga dikenal sebagai Pantai Barat Muara Batangtoru, mengingat lokasinya di sebelah barat Kabupaten Muara Batang Toru.</p>
    <p>Pantai Muara Upu memamerkan pemandangan pasir putih yang agak berwarna kecokelatan, dikelilingi oleh pepohonan hijau yang memberikan rasa teduh dan sejuk. Keunikan pantai ini tidak hanya terletak pada pesona alamnya, tetapi juga pada suasana yang tenang dan damai. Pengunjung dapat mengunjungi pantai ini kapan pun, karena buka 24 jam setiap hari, memberikan fleksibilitas bagi mereka yang ingin menikmati keindahan pantai ini tanpa batasan waktu.</p>
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
