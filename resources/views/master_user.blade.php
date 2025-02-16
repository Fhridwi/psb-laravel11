
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PPDB ONLINE || Pendaftaran Santri</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Montserrat:wght@600;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>

<style>
.navbar {
    transition: background-color 0.3s;
    background-color: rgba(255, 255, 255, 0.0); 
    position: fixed;
    width: 100%;
    z-index: 20;
}

.navbar-white {
    background-color: rgba(255, 255, 255, 1); 
}

    .bg-section {
    background-image: url('assets/background.jpg');
    background-size: cover;
    background-position: center;
    height: 100vh;
}

.bg-opacity {
    background-color: rgba(255, 255, 255, 0.7);
    position: relative;
    z-index: 10;
}
</style>

<body class="bg-gray-100" data-aos-easing="ease-in-out" data-aos-duration="600">

<header class="shadow fixed top-0 left-0 w-full z-50 navbar navbar-white">
    @include('layouts._navbar')
</header>

@yield('content')

@include('layouts._footer')

<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
<script>
    AOS.init();
</script>

<script src="{{ ('assets/main.js') }}"></script>

<script>
      document.addEventListener('DOMContentLoaded', function() {
        const navbar = document.querySelector('.navbar');

        
        function handleNavbarBackground() {
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-white'); 
            } else {
                navbar.classList.remove('navbar-white'); 
            }
        }

        handleNavbarBackground();

        window.addEventListener('scroll', handleNavbarBackground);
    });

    // Fungsi untuk mengunduh Brosur Pondok
    document.getElementById('downloadBtn1').addEventListener('click', function () {
            // URL file yang akan diunduh
            const fileUrl = 'assets/brosurRincian/BROSUR.pdf'; 
            const fileName = 'Brosur Pondok.pdf'; 

            // Membuat elemen <a> secara dinamis
            const link = document.createElement('a');
            link.href = fileUrl;
            link.download = fileName;

            // Menambahkan elemen ke DOM, lalu klik
            document.body.appendChild(link);
            link.click();

            // Menghapus elemen setelah selesai
            document.body.removeChild(link);
        });

        // Fungsi untuk mengunduh Rincian Pembayaran Pondok
    document.getElementById('downloadBtn2').addEventListener('click', function () {
            // URL file yang akan diunduh
            const fileUrl = 'assets/brosurRincian/RINCIAN PEMBAYARAN.pdf'; 
            const fileName = 'Rincian Pembayaran.pdf'; 

            // Membuat elemen <a> secara dinamis
            const link = document.createElement('a');
            link.href = fileUrl;
            link.download = fileName;

            // Menambahkan elemen ke DOM, lalu klik
            document.body.appendChild(link);
            link.click();

            // Menghapus elemen setelah selesai
            document.body.removeChild(link);
        });
</script>

</body>
</html>
