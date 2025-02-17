@extends('master_admin')

@section('title')
    {{ $title }}
@endsection

<!-- resources/views/home.blade.php -->
@extends('master_admin')

@section('title', 'Halaman Utama')

@section('content')
    <h1>Selamat datang di halaman utama!</h1>
    
    <!-- Menampilkan SweetAlert2 Toast jika ada pesan di session -->
    @if(session('toast_message'))
        @push('scripts')
        <script>
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'success',
                title: '{{ session('toast_message') }}',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            });
        </script>
        @endpush
    @endif
@endsection


@section('content')
    
@endsection