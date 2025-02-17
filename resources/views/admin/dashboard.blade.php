@extends('master_admin')

@section('title')
    {{ $title }}
@endsection

@php
    $total = 0;
    $laki_laki = 0;
    $perempuan = 0;
@endphp

@foreach ($santris as $santri)
    @php
        $total++; 

        if ($santri->jenis_kelamin == 'L') {
            $laki_laki++;
        } elseif ($santri->jenis_kelamin == 'P') {
            $perempuan++;
        }
    @endphp
@endforeach

@section('content')
<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div>
                        <div class="card">
                            <div class="card-body">
                                <marquee behavior="scroll" direction="left"> STATUS PENDAFTARAN PESANTREN CEMERLANG ANNAJACH TAHUN AJARAN 2025/2026 TELAH DIBUKA</marquee>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                    <div class="stats-icon purple mb-2">
                                        <i class="bi bi-person-lines-fill"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Total Pendaftar</h6>
                                    <h6 class="font-extrabold mb-0"> {{ $total }} </h6>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                    <div class="stats-icon blue mb-2">
                                        <i class="bi bi-person-circle"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Santri Putra</h6>
                                    <h6 class="font-extrabold mb-0"> {{ $laki_laki }} </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                    <div class="stats-icon green mb-2">
                                        <i class="bi bi-person-plus-fill"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Santri Putri</h6>
                                    <h6 class="font-extrabold mb-0"> {{ $perempuan }} </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-6 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                    <div class="stats-icon blue mb-2">
                                        <i class="bi bi-person-circle"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Santri DP</h6>
                                    <h6 class="font-extrabold mb-0">183.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                    <div class="stats-icon blue mb-2">
                                        <i class="bi bi-person-circle"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Santri Lunas</h6>
                                    <h6 class="font-extrabold mb-0">183.000</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            @if (count($dataChart) > 0)
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h4>Data Pendaftaran</h4>
                            <div class="form-group mb-0">
                                <label for="tahunAjaran" class="mr-2">Pilih Tahun Ajaran</label>
                                <select id="tahunAjaran" class="form-control form-control-sm">
                                    @foreach($tahunAjaran as $year)
                                        <option value="{{ $year }}" 
                                            {{ $year == date('Y') ? 'selected' : '' }}>
                                            {{ $year }}
                                         </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="card-body">
                            <canvas id="chart-profile-visit" style="min-height: 315px;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Data Pendaftaran</h4>
                        </div>
                        <div class="card-body">
                            <p class="text-muted text-center">Data Pendaftaran Belum Tersedia</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        
        </div>
        
        

        
        {{-- Samping --}}
        <div class="col-12 col-lg-3">
            <div class="card">
                <div class="card-body py-4 px-4">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl">
                            <img src="{{ asset('./assets/compiled/jpg/1.jpg') }}" alt="Face 1">
                        </div>
                        <div class="ms-3 name">
                            <h5 class="font-bold">{{ $name }}</h5>
                            <h6 class="text-muted mb-0 text-sm">{{ $email }}</h6>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card">
                <div class="card-body py-4 px-4">
                    <div class="d-flex align-items-center">
                        <div class="ms-3 name">
                            <h5 class="font-bold">STATUS PENDAFTARAN</h5>
                            <h6 class="text-muted mb-0 text-sm">Setting: Administrator</h6>
                            <h6 class="text-muted mb-0 text-sm">Tahun Ajaran: {{ $tahunAjaran1->tahun_ajaran }}</h6>
                            <h6 class="text-muted mb-0 text-sm">Status: <span class="btn btn-sm {{ $tahunAjaran1->status_pendaftaran == 'DIBUKA' ? 'btn-success' : 'btn-danger' }} m-3">{{ $tahunAjaran1->status_pendaftaran }}</span></h6>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-sm btn-primary m-3">Setting</a>
            </div>

            <div class="card">
                <div class="card-header">
                    <h4>Pendaftar Baru </h4>
                </div>

                <div class="card-content pb-4">
                        @foreach ($slast as $new)
                        <div class="recent-message d-flex px-4 py-3">
                            <div class="avatar avatar-lg ">
                                @if($new->pas_foto)
                                         <img src="{{ Storage::url($new->pas_foto) }}" alt="Foto Tahun Ajaran" class="img-fluid">
                                 @else
                                      <h6 class="text-muted mb-0 text-sm">Tidak ada foto tersedia.</h6>
                                 @endif
                            </div>
                            <div class="name ms-4">
                                <h5 class="mb-1"> {{ $new->nama_santri }} </h5>
                                <h6 class="text-muted mb-0">{{ $new->no_hp_orang_tua }}</h6>
                            </div>
                            
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
    </section>
   
</div>
@endsection

@section('chart')
    <script>
            const dataChart = @json($dataChart);
            const selectTahun = document.getElementById('tahunAjaran');
            const ctx = document.getElementById('chart-profile-visit').getContext('2d');
            
            let chart;
    
            function renderChart(year) {
                const chartData = dataChart[year] || [];
                const dates = chartData.map(item => item.date);
                const counts = chartData.map(item => item.count);
    
                if (chart) {
                    chart.destroy();
                }
    
                chart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: dates,
                        datasets: [{
                            label: 'Jumlah Santri',
                            data: counts,
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgb(75, 192, 192)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            }
    
            renderChart(selectTahun.value);
    
            selectTahun.addEventListener('change', function() {
                renderChart(this.value);
            });
        </script>
        
@endsection
