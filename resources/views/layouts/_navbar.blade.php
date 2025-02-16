<nav class="container mx-auto flex items-center justify-between py-4 ">
    <a class="block md:hidden text-2xl font-bold" href="#">
        <img src="assets/logo-j.png" alt="logo" class="w-36 ml-4">
    </a>
    <a class="hidden md:block text-2xl font-bold" href="#">
        <img src="assets/logo-j.png" alt="logo" class="w-64">
    </a>
    <div class="flex items-center space-x-6">
        <div class="hidden lg:flex space-x-6 font-bold text-[14px]">
            <a class="text-gray-600 hover:text-green-600 transition" href="{{ route('user.dashboard') }}"><i class="fas fa-home"></i> Home</a>
            <a class="text-gray-600 hover:text-green-600 transition" href="informasi.html"><i class="fas fa-info-circle"></i> Informasi</a>
        </div>
        <a href="{{ route('user.create') }}" class="hidden lg:block px-4 py-2 text-white bg-green-600 hover:bg-green-700 rounded-lg transition">Daftar</a>
    </div>
    <div class="lg:hidden relative">
        <button class="block focus:outline-none mr-5" id="menu-btn" aria-label="Toggle Menu">
            <i class="fas fa-bars text-xl"></i>
        </button>
        <div id="mobile-menu" class="absolute right-0 w-[150px] mr-2 bg-white shadow-lg rounded-lg mt-3 hidden z-50 ">
            <div class="flex flex-col">
                <a class="block px-4 py-2 text-gray-600 hover:bg-green-100" href="index.html"><i class="fas fa-home"></i> Home</a>
                <a class="block px-4 py-2 text-gray-600 hover:bg-green-100" href="informasi.html"><i class="fas fa-info-circle"></i> Informasi</a>
                <a href="{{ route('user.create') }}"  class="mt-2 block px-4 py-1 mx-1 my-1 text-white bg-green-600 hover:bg-green-700 rounded-lg transition">Daftar</a>
            </div>
        </div>
    </div>
</nav>