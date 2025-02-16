@extends('master_user')

@section('content')


     <!-- MAIN CONTENT -->
     
     <main class="mt-20">
        <section>
             <!-- Form Pendaftaran Santri -->
<div class="container mx-auto my-8 p-6 bg-white rounded-lg shadow-lg">
    <h2 class="text-2xl font-bold text-center mb-6">Form Pendaftaran Santri Baru</h2>

    <!-- Form Santri -->
    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Data Santri -->
        <div class="mb-6">
            <h3 class="text-xl font-semibold mb-4">
                <i class="fas fa-user text-green-500 mr-2"></i>Data Santri
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="flex flex-col">
                    <label for="nama_santri" class="mb-2">
                        <i class="fas fa-user text-gray-600 mr-2"></i>Nama Lengkap
                    </label>
                    <input value="{{ old('nama_santri') }}"  value="{{ old('nama_santri') }}" type="text" id="nama_santri" name="nama_santri" class="p-2 border border-gray-300 rounded outline-none" placeholder="Nama Lengkap" required>
                </div>
                <div class="flex flex-col">
                    <label for="ttl" class="mb-2">
                        <i class="fas fa-calendar-day text-gray-600 mr-2"></i>Tempat, Tanggal Lahir
                    </label>
                    <input value="{{ old('nama_santri') }}"  value="{{ old('nama_santri') }}" type="text" id="ttl" name="ttl" class="outline-none p-2 border border-gray-300 rounded" placeholder="Tempat, Tanggal Lahir" required>
                </div>
                <div class="flex flex-col">
                    <label for="jenis_kelamin" class="mb-2">
                        <i class="fas fa-genderless text-gray-600 mr-2"></i>Jenis Kelamin
                    </label>
                    <select value="{{ old('nama_santri') }}" id="jenis_kelamin" name="jenis_kelamin" class="p-2 border border-gray-300 rounded outline-none">
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="flex flex-col">
                    <label for="anak_ke" class="mb-2">
                        <i class="fas fa-baby-carriage text-gray-600 mr-2"></i>Anak Ke
                    </label>
                    <input value="{{ old('nama_santri') }}" type="number" id="anak_ke" name="anak_ke" class="p-2 border border-gray-300 rounded outline-none" placeholder="Anak Ke" required>
                </div>
                <div class="flex flex-col">
                    <label for="asal_sekolah" class="mb-2">
                        <i class="fas fa-school text-gray-600 mr-2"></i>Asal Sekolah
                    </label>
                    <input value="{{ old('nama_santri') }}" type="text" id="asal_sekolah" name="asal_sekolah" class="p-2 border border-gray-300 rounded outline-none" placeholder="Asal Sekolah" required>
                </div>
                <div class="flex flex-col">
                    <label for="alamat" class="mb-2">
                        <i class="fas fa-home text-gray-600 mr-2"></i>Alamat
                    </label>
                    <textarea id="alamat" name="alamat" class="p-2 border border-gray-300 rounded outline-none" rows="3" placeholder="Alamat Lengkap" required></textarea>
                </div>
            </div>
        </div>
    
        <!-- Data Orang Tua -->
        <div class="mb-6">
            <h3 class="text-xl font-semibold mb-4">
                <i class="fas fa-users text-green-500 mr-2"></i>Data Orang Tua
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="flex flex-col">
                    <label for="nama_ayah" class="mb-2">
                        <i class="fas fa-male text-gray-600 mr-2"></i>Nama Ayah
                    </label>
                    <input value="{{ old('nama_santri') }}" type="text" id="nama_ayah" name="nama_ayah" class="p-2 border border-gray-300 rounded outline-none" placeholder="Nama Ayah" required>
                </div>
                <div class="flex flex-col">
                    <label for="nama_ibu" class="mb-2">
                        <i class="fas fa-female text-gray-600 mr-2"></i>Nama Ibu
                    </label>
                    <input value="{{ old('nama_santri') }}" type="text" id="nama_ibu" name="nama_ibu" class="p-2 border border-gray-300 rounded outline-none" placeholder="Nama Ibu" required>
                </div>
                <div class="flex flex-col">
                    <label for="pekerjaan_ayah" class="mb-2">
                        <i class="fas fa-briefcase text-gray-600 mr-2"></i>Pekerjaan Ayah
                    </label>
                    <input value="{{ old('nama_santri') }}" type="text" id="pekerjaan_ayah" name="pekerjaan_ayah" class="p-2 border border-gray-300 rounded outline-none" placeholder="Pekerjaan Ayah" required>
                </div>
                <div class="flex flex-col">
                    <label for="pekerjaan_ibu" class="mb-2">
                        <i class="fas fa-briefcase text-gray-600 mr-2"></i>Pekerjaan Ibu
                    </label>
                    <input value="{{ old('nama_santri') }}" type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" class="p-2 border border-gray-300 rounded outline-none" placeholder="Pekerjaan Ibu" required>
                </div>
                <div class="flex flex-col">
                    <label for="status_ayah" class="mb-2">
                       Status Ayah
                    </label>
                    <input value="{{ old('nama_santri') }}" type="text" id="status_ayah" name="status_ayah" class="p-2 border border-gray-300 rounded outline-none" placeholder="Hidup / Meninggal" required>
                </div>
                <div class="flex flex-col">
                    <label for="status_ibu" class="mb-2">
                       Status Ibu
                    </label>
                    <input value="{{ old('nama_santri') }}" type="text" id="status_ibu" name="status_ibu" class="p-2 border border-gray-300 rounded outline-none" placeholder="Hidup/Meninggal" required>
                </div>
                <div class="flex flex-col">
                    <label for="alamat_orang_tua" class="mb-2">
                        <i class="fas fa-home text-gray-600 mr-2"></i>Alamat Orang Tua
                    </label>
                    <textarea id="alamat_orang_tua" name="alamat_orang_tua" class="p-2 border border-gray-300 rounded outline-none" placeholder="Alamat" rows="3" required></textarea>
                </div>
                <div class="flex flex-col">
                    <label for="no_hp_orang_tua" class="mb-2">
                        <i class="fas fa-phone-alt text-gray-600 mr-2"></i>Nomor HP Orang Tua
                    </label>
                    <input value="{{ old('nama_santri') }}" type="text" id="no_hp_orang_tua" name="no_hp_orang_tua" class="p-2 border border-gray-300 rounded outline-none" placeholder="Nomor Hp/Wa Aktif" required>
                </div>
                <div class="flex flex-col">
                    <label for="email" class="mb-2">
                        <i class="fas fa-phone-alt text-gray-600 mr-2"></i>Email Valid
                    </label>
                    <input value="{{ old('nama_santri') }}" type="text" id="email" name="email_ortu" class="p-2 border border-gray-300 rounded outline-none" placeholder="Email Aktif" required>
                </div>
            </div>
        </div>
    
        <!-- Data Wali -->
        <div class="mb-6">
            <h3 class="text-xl font-semibold mb-4">
                <i class="fas fa-user-tie text-green-500 mr-2"></i>Data Wali
            </h3>
            <div class="flex flex-col">
                <label for="wali" class="mb-2">
                    <i class="fas fa-user-circle text-gray-600 mr-2"></i>Wali
                </label>
                <select id="wali" name="wali" class="p-2 border border-gray-300 rounded outline-none" onchange="toggleWaliForm()">
                    <option value="ayah">Ayah</option>
                    <option value="ibu">Ibu</option>
                    <option value="lainnya">Lainnya</option>
                </select>
            </div>
            <div id="form_wali" class="hidden mt-4">
                <div class="flex flex-col">
                    <label for="nama_wali" class="mb-2">
                        <i class="fas fa-user text-gray-600 mr-2"></i>Nama Wali
                    </label>
                    <input value="{{ old('nama_santri') }}" type="text" id="nama_wali" name="nama_wali" class="p-2 border border-gray-300 rounded outline-none">
                </div>
                <div class="flex flex-col">
                    <label for="pekerjaan_wali" class="mb-2">
                        <i class="fas fa-briefcase text-gray-600 mr-2"></i>Pekerjaan Wali
                    </label>
                    <input value="{{ old('nama_santri') }}" type="text" id="pekerjaan_wali" name="pekerjaan_wali" class="p-2 border border-gray-300 rounded outline-none">
                </div>
                <div class="flex flex-col">
                    <label for="penghasilan_wali" class="mb-2">
                        <i class="fas fa-wallet text-gray-600 mr-2"></i>Penghasilan Wali
                    </label>
                    <input value="{{ old('nama_santri') }}" type="text" id="penghasilan_wali" name="penghasilan_wali" class="p-2 border border-gray-300 rounded outline-none">
                </div>
                <div class="flex flex-col">
                    <label for="no_hp_wali" class="mb-2">
                        <i class="fas fa-phone-alt text-gray-600 mr-2"></i>No HP Wali
                    </label>
                    <input value="{{ old('nama_santri') }}" type="text" id="no_hp_wali" name="no_hp_wali" class="p-2 border border-gray-300 rounded outline-none">
                </div>
                <div class="flex flex-col">
                    <label for="email Wali" class="mb-2">
                        <i class="fas fa-phone-alt text-gray-600 mr-2"></i>Email Wali Valid
                    </label>
                    <input value="{{ old('nama_santri') }}" type="text" id="email Wali" name="email_wali" class="p-2 border border-gray-300 rounded outline-none" placeholder="Email Wali Aktif">
                </div>
            </div>
        </div>

        {{-- Data tambahan --}}

        <div class="mb-6">
            <h3 class="text-xl font-semibold mb-4">
                <i class="fas fa-user-tie text-green-500 mr-2"></i>Data Tambahan
            </h3>
            <div>
                <div class="flex flex-col">
                    <label for="tahun_masuk" class="mb-2">
                        <i class="fas fa-calendar-alt text-gray-600 mr-2"></i>Tahun Masuk
                    </label>
                    <select id="tahun_masuk" name="tahun_ajaran" class="p-2 border border-gray-300 rounded outline-none" required>
                        <option value="" disabled selected>Pilih Tahun Ajaran</option>
                        @foreach ($tahunAjarans as $tahunAjaran)
                            <option value="{{ $tahunAjaran->tahun_ajaran }}">{{ $tahunAjaran->tahun_ajaran }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            
            <div>
                <div class="flex flex-col mt-4 ">
                    <label for="pendidikan_lanjutan" class="mb-2">
                        <i class="fas fa-calendar-alt text-gray-600 mr-2"></i>Pendidikan Lanjutan
                    </label>
                    <select id="pendidikan_lanjutan" name="pendidikan_lanjutan" class="p-2 border border-gray-300 rounded outline-none" required>
                        <option value="" disabled selected>Pilih Pendidikan Lanjutan</option>
                        @foreach ($pendidikans as $pendidikan)
                            <option value="{{ $pendidikan->unit_pendidikan }}">{{ $pendidikan->unit_pendidikan }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="flex flex-col mt-4">
                <label for="prestasi" class="mb-2">
                    <i class="fas fa-trophy text-gray-600 mr-2"></i>Prestasi
                </label>
                <textarea id="prestasi" name="prestasi" class="p-2 border border-gray-300 rounded outline-none" rows="4" placeholder="Tuliskan prestasi yang pernah diraih" > {{ old('prestasi') }} </textarea>
            </div>
        </div>
        
    
        <!-- Dokumen Pendukung -->
        <div class="mb-6">
            <h3 class="text-xl font-semibold mb-4">
                <i class="fas fa-file-upload text-green-500 mr-2"></i>Dokumen Pendukung
            </h3>
            <div class="flex flex-col mb-4">
                <label for="pas_foto" class="mb-2">
                    <i class="fas fa-image text-gray-600 mr-2"></i>Pas Foto Santri
                </label>
                <input value="{{ old('pas_foto') }}" type="file" id="pas_foto" name="pas_foto" class="p-2 border border-gray-300 rounded outline-none">
            </div>
            <div class="flex flex-col mb-4">
                <label for="akte_kelahiran" class="mb-2">
                    <i class="fas fa-id-card text-gray-600 mr-2"></i>Akte Kelahiran Santri
                </label>
                <input value="{{ old('akte_kelahiran') }}" type="file" id="akte_kelahiran" name="akte_kelahiran" class="p-2 border border-gray-300 rounded outline-none">
            </div>
            <div class="flex flex-col mb-4">
                <label for="scan_kk" class="mb-2">
                    <i class="fas fa-id-card-alt text-gray-600 mr-2"></i>Scan KK
                </label>
                <input value="{{ old('scan_kk') }}" type="file" id="scan_kk" name="scan_kk" class="p-2 border border-gray-300 rounded outline-none">
            </div>
            <div class="flex flex-col mb-4">
                <label for="ktp_ayah" class="mb-2">
                    <i class="fas fa-credit-card text-gray-600 mr-2"></i>KTP Ayah
                </label>
                <input value="{{ old('ktp_ayah') }}" type="file" id="ktp_ayah" name="ktp_ayah" class="p-2 border border-gray-300 rounded outline-none">
            </div>
            <div class="flex flex-col mb-4">
                <label for="ktp_ibu" class="mb-2">
                    <i class="fas fa-credit-card text-gray-600 mr-2"></i>KTP Ibu
                </label>
                <input value="{{ old('ktp_ibu') }}" type="file" id="ktp_ibu" name="ktp_ibu" class="p-2 border border-gray-300 rounded outline-none">
            </div>
        </div>
    
        <div class="flex justify-center">
            <a href="{{ route('user.store') }}"><button type="submit" class="bg-green-500 text-white py-2 px-9 rounded-md font-semibold hover:bg-green-600 transition">
                Daftar
            </button></a>
        </div>
    </form>
    
</div>
        </section>
     </main>
    <!-- MAIN CONTENT END -->
@endsection