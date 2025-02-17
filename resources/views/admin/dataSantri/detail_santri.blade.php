@extends('master_admin')

@section('title')
    {{ $title }}
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->    
    <div class="row">
      <div class="col-md-6">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DATA DIRI</h6>
          </div>
          <div class="card-body">
            <div class="card-body">
              <div class="col-auto mt-3 text-center">
                <div class="">
                    @if($santri->pas_foto)
                    <img src="{{ Storage::url($santri->pas_foto) }}" alt="Foto Tahun Ajaran" class="img-fluid rounded-circle">
                @else
                    <h6 class="text-muted mb-0 text-sm">Tidak ada foto tersedia.</h6>
                @endif
                </div>
              </div>
              <br>
              <h5 class="card-title mb-3 text-center">
                {{ $santri->nama_santri }}         
            </h5>
              <ul class="list-group">
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">Tempat, Tanggal Lahir</h6>
                  <small class="text-muted">{{ $santri->ttl }}</small>
                </li>
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">Jenis Kelamin</h6>
                  <small class="text-muted">{{ $santri->jenis_kelamin == 'L' ? 'Laki-Laki' : 'Perempuan' }}</small>
                </li>
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">Anak Ke</h6>
                  <small class="text-muted">{{ $santri->anak_ke }}</small>
                </li>
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">Asal Sekolah</h6>
                  <small class="text-muted">{{ $santri->asal_sekolah }}</small>
                </li>
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">Alamat</h6>
                  <small class="text-muted">{{ $santri->alamat }}</small>
                </li>
              </ul>
            </div>
            <div class="alert alert-info">
              Data pendaftar Dinyatakan <b>LOLOS</b>
          </div>
          </div>
        </div>
      </div>
  
      <div class="col-md-6">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DATA ORANG TUA</h6>
          </div>
          <div class="card-body">
            <div class="card-body">
  
              
                           
              <ul class="list-group">
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">Nama Ayah</h6>
                  <small class="text-muted">80</small>
                </li>
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">Nama Ibu</h6>
                  <small class="text-muted">80</small>
                </li>
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">Pekerjaan Ayah</h6>
                  <small class="text-muted">80</small>
                </li>
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">Pekerjaan Ibu</h6>
                  <small class="text-muted">80.00</small>
                </li>
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">Status Ayah</h6>
                  <small class="text-muted">80.00</small>
                </li>
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">Status ibu</h6>
                  <small class="text-muted">80.00</small>
                </li>
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">Alamat Orang Tua</h6>
                  <small class="text-muted">80.00</small>
                </li>
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">No Hp Orang Tua</h6>
                  <small class="text-muted">80.00</small>
                </li>
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">Email Orang Tua</h6>
                  <small class="text-muted">80.00</small>
                </li>
              </ul>
  
              <button type="button" class="btn btn-primary mt-3 btn-block" data-toggle="modal" data-target="#modalvalidasi">
                  Validasi Data Pendaftar
              </button>
  
              <!-- Modal -->
              <div class="modal fade" id="modalvalidasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <form action="http://localhost/pendaftaran/admin/detailpendaftar.php?id=1" method="POST">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Penilaian data pendaftar</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                              </button>
                          </div>
                          <div class="modal-body">
                            <label for="nilai">Beri Penilaian</label>
                            <select name="nilai" id="nilai" class="form-control" required="">
                              <option value="">--Pilih --</option>
                              <option value="1">Lolos</option>
                              <option value="2">Tidak Lolos</option>
                            </select>
                          </div>
                          <div class="modal-footer">
                              <button name="simpan" value="simpan_nilai" class="btn btn-primary">Simpan</button>
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          </div>
                        </form>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
  
        <a href="pendaftaran.php" class="btn btn-danger">Kembali</a>
      </div>
      
    </div>
    
  </div>
@endsection
