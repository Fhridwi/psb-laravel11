<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Santri;
use App\Models\TahunAjaran;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Dashboard Admin';
        $name = session('name');
        $email = session('email');
        $santris = Santri::paginate(10);
        $tahunAjaran1 = TahunAjaran::latest()->first();
        $slast = Santri::latest()->take(5)->get();
        
        // Ambil semua tahun ajaran  model Santri
        $tahunAjaran = cache::remember('tahun_ajaran', 60, function () {
            return Santri::selectRaw('YEAR(created_at) as tahun')
                        ->distinct()
                        ->get()
                        ->pluck('tahun');
        });
        
        
        // Ambil data santri  tahun ajaran
        $dataChart = [];
        foreach ($tahunAjaran as $year) {
            $santrisPerMonth = Santri::whereYear('created_at', $year)
                                    ->selectRaw('MONTH(created_at) as month, COUNT(*) as count')
                                    ->groupBy('month')
                                    ->get();
            
            $chartData = [];
            foreach ($santrisPerMonth as $data) {
                $chartData[] = [
                    'date' => Carbon::createFromFormat('m', $data->month)->format('F'),
                    'count' => $data->count,
                ];
            }
            $dataChart[$year] = $chartData;
        }

        

        return view('admin.dashboard', compact('title', 'name', 'email', 'dataChart', 'tahunAjaran', 'santris', 'tahunAjaran1','slast'));
    }
}
