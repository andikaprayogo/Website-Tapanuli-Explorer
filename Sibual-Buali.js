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
            <p>Sibual-buali, gunung stratovolcano yang menjulang di Tapanuli Selatan, Sumatera Utara, merupakan destinasi yang menarik dengan ciri khas sebagai gunung berapi kerucut atau gunung berapi komposit.</p>
            <p>Terletak di ujung selatan Bukit Barisan Sumatera Utara, kawasan sekitar Gunung Sibual-buali menawarkan keunikan dan keindahan yang dapat dinikmati oleh para pendaki selama perjalanan mendaki. Daerah ini dipenuhi dengan pesona alam yang memukau, menambah daya tarik bagi para pengunjung yang mencari petualangan.</p>
            <p>Dengan ketinggian mencapai sekitar 1.819 mdpl (meter di atas permukaan air laut), Gunung Sibual-buali bukan hanya sebuah tantangan bagi para pendaki, tetapi juga rumah bagi berbagai jenis flora dan fauna. Sebagian dari mereka bahkan termasuk dalam kategori endemik, menjadi penanda kekayaan biodiversitas yang dimiliki oleh gunung ini.</p>
            <p>Melalui pendakian ke puncaknya, pengunjung dapat merasakan keunikan ekosistem gunung ini serta menyaksikan keindahan alam yang tersebar di sekitar Gunung Sibual-buali. Sebuah pengalaman mendaki yang tidak hanya menantang fisik, tetapi juga membawa penemuan terhadap keanekaragaman hayati yang unik dan langka di kawasan tersebut.</p>
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
