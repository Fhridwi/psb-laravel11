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
                    <h4 class="card-title">Striped rows</h4>
                </div>
                <div class="card-content">
                    <!-- table striped -->
                    <div class="table-responsive">
                        <table id="santriTable" class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NAME</th>
                                    <th>TEMPAT TANGGAL LAHIR</th>
                                    <th>JENIS KELAMIN</th>
                                    <th>NO HP ORTU</th>
                                    <th>PENDIDIKAN</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($santris as $santri)
                                    <tr>
                                        <td class="text-bold-500">{{ $loop->iteration }}</td>
                                        <td class="text-bold-500">{{ $santri->nama_santri }}</td>
                                        <td>{{ $santri->ttl }}</td>
                                        <td class="text-bold-500">{{ $santri->jenis_kelamin == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                                        <td>{{ $santri->no_hp_orang_tua }}</td>
                                        <td>{{ $santri->pendidikan_lanjutan }}</td>
                                        <td>
                                            <a href="{{ route('admin.detail.santri', $santri->id) }}" class="btn btn-info btn-sm" title="Lihat">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.edit.santri', $santri->id) }}" class="btn btn-warning btn-sm" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.delete.santri', $santri->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE') 
                                                <button type="submit" class="btn btn-danger btn-sm" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                    <i class="fas fa-trash-alt"></i>
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



<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script>
    $(document).ready(function() {
        $('#santriTable').DataTable({
            "paging": true, // Enable pagination
            "searching": true, // Enable search
            "lengthChange": true, // Enable changing number of records per page
            "pageLength": 10, // Default number of records per page
        });
    });
</script>
<script>
    @if(session('success'))
        toastr.success("{{ session('success') }}", 'Success', { positionClass: 'toast-top-right' });
    @endif
</script>

@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/datatables.net/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#table1').DataTable({
            "paging": true, 
            "searching": true, 
            "lengthChange": true, 
            "info": true, 
            "autoWidth": false, 
            "responsive": true 
        });
    });
</script>
@endpush
