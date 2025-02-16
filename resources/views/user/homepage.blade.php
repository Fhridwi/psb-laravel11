@extends('master_user')

@if(session('success'))
    <script>
        window.addEventListener('load', function () {
            Swal.fire({
                title: 'Pendaftaran Berhasil!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonText: 'Got it!',
                width: '300px', height: '150px',
                padding: '17px',
            });
        });
    </script>
@endif



@section('content')
<section class="bg-section">
    <div class="bg-opacity px-4 mx-auto flex flex-col items-center lg:gap-8 xl:gap-0 lg:py-16 lg:flex-row lg:justify-between min-h-screen">
        <!-- Left Column: Text Content -->
        <div class="lg:flex lg:flex-col lg:col-span-7 lg:mb-1 text-center lg:text-left lg:pl-0 lg:pr-0 lg:mx-20" data-aos="fade-right">
            <img src="assets/logo.png" alt="Logo Pesantren" class="w-20 lg:w-28 mb-4 mx-auto lg:mx-0 mt-20  sm:mt-28 ">
            <h1 class="text-2xl font-bold lg:text-4xl text-gray-900 sm:text-3xl">Pondok Pesantren</h1>
            <h2 class="text-2xl font-bold lg:text-5xl sm:4xl">Cemerlang An-Najach Putra</h2>
            <p class="text-xl italic sm:text-md mb-4 md:text-sm lg:text-lg lg:mt-2">Bahrul Ulum Tambakberas, Jombang</p>
            <h2 class="text-md font-semibold mb-4">Pendaftaran Santri Baru An-Najach 2025 - 2026</h2>
            <div class="flex flex-col sm:flex-row gap-2 mt-4 justify-center lg:justify-start">
                <a href="{{ route('user.create') }}" class="px-3 py-3 text-white bg-green-600 hover:bg-green-700 rounded-lg transition w-full sm:w-auto text-center lg:px-10 sm:px-9">Daftar</a>
                <a href="#" class="px-3 py-3 text-white bg-green-600 hover:bg-green-700 rounded-lg transition w-full sm:w-auto text-center lg:px-9 sm:px-9">Panduan</a>
            </div>
        </div>
    </div>
</section>

<section class="py-16 fade-in visible" style="background: linear-gradient(to right, #4caf50, #81c784);" >
    <div class="container mx-auto text-center px-7" data-aos="zoom-in">
        <h2 class="text-xl font-bold text-white mb-8">Download Brosur dan Rincian Pembayaran</h2>
        <div class="flex flex-col md:flex-row justify-center space-y-4 md:space-y-0 md:space-x-4">
            <a href="#" id="downloadBtn1" class="bg-white text-green-600 rounded-lg shadow-lg p-4 flex items-center justify-center transition hover:bg-green-100">
                <i class="fas fa-file-download mr-2"></i>
                Download Brosur
            </a>
            <a href="#" id="downloadBtn2" class="bg-white text-green-600 rounded-lg shadow-lg p-4 flex items-center justify-center transition hover:bg-green-100">
                <i class="fas fa-file-download mr-2 "></i>
                Rincian Pendaftaran
            </a>
        </div>
    </div>
</section>

<section class="bg-white py-12 p-2" data-aos="fade-up">
    <div class="container mx-auto px-4">
        <h2 class="text-xl font-bold text-center mb-8">Alur Pendaftaran Santri Baru</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 text-center">

            <!-- Step 1 -->
            <div class="flex flex-col items-center" data-aos="fade-up">
                <div class="w-16 h-16 bg-white text-green-600 border-4 border-green-600 rounded-full flex items-center justify-center text-2xl font-bold mb-4">
                    1
                </div>
                <h3 class="text-xl font-semibold mb-2">Isi Form Pendaftaran</h3>
                <p>Calon santri mengisi seluruh form pendaftaran online dengan lengkap, termasuk data pribadi dan informasi pendidikan.</p>
            </div>

            <!-- Step 2 -->
            <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 bg-white text-green-600 border-4 border-green-600 rounded-full flex items-center justify-center text-2xl font-bold mb-4">
                    2
                </div>
                <h3 class="text-xl font-semibold mb-2"> screenshot Bukti Pendaftaran </h3>
                <p>Setelah form terisi, screenshot bukti pendaftaran melalui WhatsApp.</p>
            </div>

            <!-- Step 3 -->
            <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 bg-white text-green-600 border-4 border-green-600 rounded-full flex items-center justify-center text-2xl font-bold mb-4">
                    3
                </div>
                <h3 class="text-xl font-semibold mb-2">Konfirmasi Pembayaran</h3>
                <p>Lakukan konfirmasi pembayaran melalui transfer bank atau datang langsung ke pondok dengan membawa bukti pendaftaran.</p>
            </div>

            <!-- Step 4 -->
            <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 bg-white text-green-600 border-4 border-green-600 rounded-full flex items-center justify-center text-2xl font-bold mb-4">
                    4
                </div>
                <h3 class="text-xl font-semibold mb-2">Pelunasan Pembayaran</h3>
                <p>Pelunasan biaya harus dilakukan sesuai jadwal yang ditentukan, baik melalui transfer bank atau di pondok.</p>
            </div>

            <!-- Step 5 -->
            <div class="flex flex-col items-center" data-aos="fade-up" data-aos-delay="400">
                <div class="w-16 h-16 bg-white text-green-600 border-4 border-green-600 rounded-full flex items-center justify-center text-2xl font-bold mb-4">
                    5
                </div>
                <h3 class="text-xl font-semibold mb-2">Pertemuan Wali dan Penyerahan Santri</h3>
                <p>Wali santri menghadiri pertemuan di pondok dan santri secara resmi diserahkan untuk memulai pendidikan.</p>
            </div>

        </div>
    </div>
</section>

<!-- Section untuk WhatsApp -->
<section class="bg-green-600 py-8 p-3" >
    <div class="container mx-auto text-center" data-aos="fade-up">
        <h2 class="text-2xl font-bold text-white mb-4">Butuh Bantuan Lebih Lanjut?</h2>
        <p class="text-white mb-4">Jika Anda memiliki pertanyaan lebih lanjut, jangan ragu untuk menghubungi kami melalui WhatsApp.</p>
        <a href="https://wa.me/6285792336956" target="_blank" class="bg-white text-green-600 rounded-lg px-6 py-3 text-lg font-semibold transition duration-300 hover:bg-green-100">
            Hubungi Kami di WhatsApp
        </a>
    </div>
</section>

<section class="bg-white py-12 p-5" data-aos="fade-up">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-8">FAQ Pendaftaran Santri Baru</h2>

        <!-- FAQ Container -->
        <div class="space-y-4">

            <!-- FAQ 1 -->
            <div class="faq-item border-b-2 border-gray-300 pb-4">
                <button class="faq-question w-full text-left text-lg font-semibold text-green-600 focus:outline-none" onclick="toggleFAQ(1)">
                    1. Apa saja syarat pendaftaran?
                </button>
                <div id="faq-1" class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                    <p class="text-gray-700 mt-2">Syarat pendaftaran meliputi fotokopi akta kelahiran, fotokopi kartu keluarga, dan fotokopi ktp Orang Tua.</p>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="faq-item border-b-2 border-gray-300 pb-4">
                <button class="faq-question w-full text-left text-lg font-semibold text-green-600 focus:outline-none" onclick="toggleFAQ(2)">
                    2. Bagaimana cara melakukan pembayaran?
                </button>
                <div id="faq-2" class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                    <p class="text-gray-700 mt-2">Pembayaran dapat dilakukan melalui transfer bank ke rekening yang ditentukan atau datang langsung ke pondok.</p>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="faq-item border-b-2 border-gray-300 pb-4">
                <button class="faq-question w-full text-left text-lg font-semibold text-green-600 focus:outline-none" onclick="toggleFAQ(3)">
                    3. Apakah ada batas waktu pendaftaran?
                </button>
                <div id="faq-3" class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                    <p class="text-gray-700 mt-2">Pendaftaran dibuka dari Januari hingga Maret setiap tahunnya. Harap segera mendaftar sebelum kuota penuh.</p>
                </div>
            </div>

            <!-- FAQ 4 -->
            <div class="faq-item border-b-2 border-gray-300 pb-4">
                <button class="faq-question w-full text-left text-lg font-semibold text-green-600 focus:outline-none" onclick="toggleFAQ(4)">
                    4. Bagaimana cara mengkonfirmasi pembayaran?
                </button>
                <div id="faq-4" class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                    <p class="text-gray-700 mt-2">Setelah pembayaran, kirimkan bukti pembayaran ke admin melalui WhatsApp atau datang langsung ke pondok untuk konfirmasi.</p>
                </div>
            </div>

            <!-- FAQ 5 -->
            <div class="faq-item border-b-2 border-gray-300 pb-4">
                <button class="faq-question w-full text-left text-lg font-semibold text-green-600 focus:outline-none" onclick="toggleFAQ(5)">
                    5. Kapan waktu pertemuan wali santri?
                </button>
                <div id="faq-5" class="faq-answer max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                    <p class="text-gray-700 mt-2">Pertemuan wali santri diadakan sebelum santri resmi masuk ke pondok, detail waktu akan diberitahukan lebih lanjut.</p>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection