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
            <div class="alert alert-{{ $santri->status_pendaftaran == 'Pending' ? 'warning' : ($santri->status_pendaftaran == 'Diverifikasi' ? 'success' : 'warning') }}">

              Data pendaftar Dinyatakan <b>{{ $santri->status_pendaftaran }}</b>
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
                  <small class="text-muted"> {{ $santri->nama_ayah }} </small>
                </li>
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">Nama Ibu</h6>
                  <small class="text-muted">{{ $santri->nama_ibu }}</small>
                </li>
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">Pekerjaan Ayah</h6>
                  <small class="text-muted">{{ $santri->pekerjaan_ayah }}</small>
                </li>
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">Pekerjaan Ibu</h6>
                  <small class="text-muted">{{ $santri->pekerjaan_ibu }}</small>
                </li>
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">Status Ayah</h6>
                  <small class="text-muted">{{ $santri->status_ayah }}</small>
                </li>
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">Status ibu</h6>
                  <small class="text-muted">{{ $santri->status_ibu }}</small>
                </li>
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">Alamat Orang Tua</h6>
                  <small class="text-muted">{{ $santri->alamat_orang_tua }}</small>
                </li>
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">No Hp Orang Tua</h6>
                  <small class="text-muted">{{ $santri->nama_ayah }}</small>
                </li>
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">Email Orang Tua</h6>
                  <small class="text-muted">{{ $santri->email_ortu }}</small>
                </li>
              </ul>
            </div>
          </div>
        </div>
        
      </div>
      
      <div class="col-md-6 ">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DATA WALI</h6>
          </div>
          <div class="card-body">
            <div class="card-body">     
                           
              <ul class="list-group">
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">Wali</h6>
                  <small class="text-muted"> {{ $santri->wali }} </small>
                </li>
                @if ($santri->wali == 'ayah' || $santri->wali == 'ibu')
                    <small class="mt-3 text-center font-bold text-danger">Tidak Ada Data Wali</small>
                @else
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">Nama Wali</h6>
                  <small class="text-muted">{{ $santri->nama_wali }}</small>
                </li>
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">Pekerjaan Wali</h6>
                  <small class="text-muted">{{ $santri->pekerjaan_wali }}</small>
                </li>
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">Penghasilan Wali</h6>
                  <small class="text-muted">{{ $santri->penghasilan_wali }}</small>
                </li>
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">No Hp Wali</h6>
                  <small class="text-muted">{{ $santri->no_hp_wali }}</small>
                </li>
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">Email Wali</h6>
                  <small class="text-muted">{{ $santri->email_wali }}</small>
                </li>
                @endif
              </ul>
            </div>
          </div>
        </div>
  
      </div>

      <div class="col-md-6 ">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DATA TAMBAHAN</h6>
          </div>
          <div class="card-body">
            <div class="card-body">     
                           
              <ul class="list-group">
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">Tahun Ajaran</h6>
                  <small class="text-muted"> {{ $santri->tahun_ajaran }} </small>
                </li>
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">Pendidikan Lanjutan</h6>
                  <small class="text-muted">{{ $santri->pendidikan_lanjutan }}</small>
                </li>
                <li class="list-group-item">
                  <h6 class="mb-0" style="color: black;">Prestasi</h6>
                  <small class="text-muted">
                    @if ($santri->prestasi == null)
                      Tidak Ada Data Prestasi
                    @else
                       {{ $santri->prestasi }}
                    @endif
                  </small>
                </li>
              </ul>
            </div>
          </div>
        </div>
    </div>

    {{-- DOKUMEN PENDUKUNG --}}

    <div class="col-md-6 col-lg-12">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">DOKUMEN PENDUKUNG</h6>
        </div>
        <div class="card-body">
          <div class="row">
            {{-- Pas Foto --}}
            <div class="col-md-4 mb-3">
              <h6>Pas Foto</h6>
              @if($santri->pas_foto)
                <a href="{{ asset('storage/'.$santri->pas_foto) }}" target="_blank" class="btn btn-primary btn-sm">Lihat</a>
                <a href="{{ asset('storage/'.$santri->pas_foto) }}" download class="btn btn-success btn-sm">Download</a>
              @else
                <p>File tidak tersedia</p>
              @endif
            </div>
    
            {{-- Akta Kelahiran --}}
            <div class="col-md-4 mb-3">
              <h6>Akta Kelahiran</h6>
              @if($santri->akte_kelahiran)
                <a href="{{ asset('storage/'.$santri->akte_kelahiran) }}" target="_blank" class="btn btn-primary btn-sm">Lihat</a>
                <a href="{{ asset('storage/'.$santri->akte_kelahiran) }}" download class="btn btn-success btn-sm">Download</a>
              @else
                <p>File tidak tersedia</p>
              @endif
            </div>
    
            {{-- Kartu Keluarga --}}
            <div class="col-md-4 mb-3">
              <h6>Kartu Keluarga</h6>
              @if($santri->scan_kk)
                <a href="{{ asset('storage/'.$santri->scan_kk) }}" target="_blank" class="btn btn-primary btn-sm">Lihat</a>
                <a href="{{ asset('storage/'.$santri->scan_kk) }}" download class="btn btn-success btn-sm">Download</a>
              @else
                <p>File tidak tersedia</p>
              @endif
            </div>
    
            {{-- KTP Ayah --}}
            <div class="col-md-4 mb-3">
              <h6>KTP Ayah</h6>
              @if($santri->ktp_ayah)
                <a href="{{ asset('storage/'.$santri->ktp_ayah) }}" target="_blank" class="btn btn-primary btn-sm">Lihat</a>
                <a href="{{ asset('storage/'.$santri->ktp_ayah) }}" download class="btn btn-success btn-sm">Download</a>
              @else
                <p>File tidak tersedia</p>
              @endif
            </div>
    
            {{-- KTP Ibu --}}
            <div class="col-md-4 mb-3">
              <h6>KTP Ibu</h6>
              @if($santri->ktp_ibu)
                <a href="{{ asset('storage/'.$santri->ktp_ibu) }}" target="_blank" class="btn btn-primary btn-sm">Lihat</a>
                <a href="{{ asset('storage/'.$santri->ktp_ibu) }}" download class="btn btn-success btn-sm">Download</a>
              @else
                <p>File tidak tersedia</p>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
       {{-- Tombol untuk mengubah status --}}
  <button type="button" class="btn btn-warning btn-sm mt-2 mb-4" data-toggle="modal" data-target="#statusModal">
    Ubah Status
  </button>
    
  <!-- Modal -->
<div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="statusModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="statusModalLabel">Konfirmasi Perubahan Status</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Apakah Anda yakin ingin mengubah status pendaftaran?</p>
        <div class="form-group">
          <label for="status_pendaftaran">Pilih Status:</label>
          <select id="status_pendaftaran" class="form-control">
            <option value="Pending">Pending</option>
            <option value="Data Kurang Lengkap">Data Kurang Lengkap</option>
            <option value="Diverifikasi">Diverifikasi</option>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" id="confirmStatusChange" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>




@endsection
