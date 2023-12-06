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
            <p>Pemandian Air Panas Aek Nabara, berlokasi di Desa Aek Nabara, Kecamatan Marancar, Kabupaten Tapanuli Selatan, telah menjadi destinasi unggulan bagi para wisatawan domestik. Daya tariknya melibatkan semua kalangan, dari yang muda hingga yang tua, bahkan keluarga-keluarga setempat berduyun-duyun menuju pemandian ini.</p>
            <p>Perjalanan menuju Aek Nabara sangat nyaman dengan jalan yang mulus, dan udara segar pegunungan menjadi penyemangat bagi para pengunjung. Pemandian air panasnya tidak hanya memberikan kesegaran, tetapi juga menawarkan pemandangan alam yang indah, memanjakan mata setiap pengunjung.</p>
            <p>Meskipun belum dikelola secara profesional, daya tarik pemandian ini tidak pernah surut, selalu ramai dengan pengunjung yang datang untuk menikmati kehangatan air panas. Keunikan tempat ini semakin diperkaya oleh pemandangan alam yang memesona di sekitarnya.</p>
            <p>Sebagian besar pengunjung datang dengan tujuan terapi dan pengobatan. Air panas di Aek Nabara dipercaya memiliki kemampuan menyembuhkan berbagai masalah kulit, karena kandungan fosfor dalam air diyakini dapat memberikan efek penyembuhan dan meningkatkan peredaran darah.</p>
            <p>Walau belum mendapat sentuhan profesional dalam pengelolaannya, daya tarik alamiah dan khasiat terapeutik pemandian Air Panas Aek Nabara tetap memikat hati para pengunjung. Suasana yang tenang dan kesejukan udara pegunungan semakin melengkapi pengalaman wisata yang dihadirkan di tempat ini.</p>
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
