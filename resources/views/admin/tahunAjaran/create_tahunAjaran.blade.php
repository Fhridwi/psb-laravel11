@extends('master_admin')


@section('title')
    {{ $title }}
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Tambah Kouta Santri</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form action="{{ route('admin.store.tahunAjaran') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="tahunAjaran">Tahun Ajaran</label>
                            <input type="text" name="tahun_ajaran" id="tahun_ajaran" class="form-control" placeholder="Masukkan tahun ajaran" required>
                        </div>
                        @error('status_pendaftaran')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="kouta">Jumlah Kouta</label>
                            <input type="number" id="kouta" name="kouta_santri" class="form-control" 
                                   placeholder="Masukkan jumlah kouta santri" required>
                        </div>
                        @error('status_pendaftaran')
                                <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="status">Status</label>
                            <select id="status_pendaftaran" name="status_pendaftaran" class="form-control" required>
                                <option value="">Pilih Status</option>
                                <option value="DIBUKA">Aktif</option>
                                <option value="TUTUP">Non-Aktif</option>
                            </select>
                        </div>
                        

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

