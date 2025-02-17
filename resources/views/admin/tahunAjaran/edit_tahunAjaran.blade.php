@extends('master_admin')

@section('title')
    Edit Tahun Ajaran
@endsection

@section('content')
<section class="section">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Tahun Ajaran</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form action="{{ route('admin.tahunAjaran.update', $tahunAjaran->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="tahunAjaran">Tahun Ajaran</label>
                                <input type="text" name="tahun_ajaran" id="tahun_ajaran" class="form-control" value="{{ old('tahun_ajaran', $tahunAjaran->tahun_ajaran) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="kouta_santri">Jumlah Kouta Santri</label>
                                <input type="number" name="kouta_santri" id="kouta_santri" class="form-control" value="{{ old('kouta_santri', $tahunAjaran->kouta_santri) }}" required>
                            </div>

                            <div class="form-group">
                                <label for="status_pendaftaran">Status Pendaftaran</label>
                                <select name="status_pendaftaran" id="status_pendaftaran" class="form-control" required>
                                    <option value="DIBUKA" {{ $tahunAjaran->status_pendaftaran == 'DIBUKA' ? 'selected' : '' }}>DIBUKA</option>
                                    <option value="TUTUP" {{ $tahunAjaran->status_pendaftaran == 'TUTUP' ? 'selected' : '' }}>TUTUP</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
