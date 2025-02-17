@extends('master_admin')

@section('title')
    {{ $title }}
@endsection

@section('content')
<section class="section">
    <div class="row" id="table-striped">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.create.tahunAjaran') }}" class="btn btn-primary">Tambah Tahun Ajaran</a>
                </div>
                <div class="card-content">
                    <!-- Success and Error messages -->
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <!-- table striped -->
                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Kouta Santri</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tahunAjarans as $index => $tahunAjaran)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $tahunAjaran->tahun_ajaran }}</td>
                                        <td>{{ $tahunAjaran->kouta_santri }}</td>
                                        <td>
                                            <span class="btn  
                                                @if($tahunAjaran->status_pendaftaran == 'DIBUKA') 
                                                    btn-success btn-sm
                                                @elseif($tahunAjaran->status_pendaftaran == 'TUTUP')
                                                    btn-danger btn-sm
                                                @endif">
                                                {{ $tahunAjaran->status_pendaftaran }}
                                            </span>
                                        </td>
                                        
                                        <td>
                                            <a href="{{ route('admin.edit.tahunAjaran', $tahunAjaran->id) }}" class="btn btn-sm btn-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 font-medium-1">
                                                    <path d="M17 3l4 4-10 10H7v-4L17 3z"></path>
                                                </svg>
                                            </a>
                                           <!-- Button Delete -->
                                            <form action="{{ route('admin.tahunAjaran.destroy', $tahunAjaran->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" class="btn btn-sm btn-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 font-medium-1">
                                                        <path d="M3 6h18M9 6V4a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2M4 6v14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6H4z"></path>
                                                    </svg>
                                                </button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">


<script>
    @if(session('success'))
        toastr.success("{{ session('success') }}", 'Success', { positionClass: 'toast-top-right' });
    @endif
</script>
@endsection


