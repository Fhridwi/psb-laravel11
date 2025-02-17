<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Santri;
use App\Models\TahunAjaran;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $title = 'Dashboard Admin';
        $name = session('name');
        $email = session('email');
        $santris = Santri::all();
        $tahunAjaran1 = TahunAjaran::latest()->first();
        $slast = Santri::latest()->take(5)->get();
        
        // Ambil semua tahun ajaran  model Santri
        $tahunAjaran = Santri::selectRaw('YEAR(created_at) as tahun')
                             ->distinct()
                             ->get()
                             ->pluck('tahun');
        
        // Ambil data santri  tahun ajaran
        $dataChart = [];
        foreach ($tahunAjaran as $year) {
            $santris = Santri::whereYear('created_at', $year)->get();
            
            // Kelompokkan data berdasarkan bulan
            $months = $santris->groupBy(function($date) {
                return Carbon::parse($date->created_at)->format('m'); 
            });
            
            $chartData = [];
            foreach ($months as $month => $items) {
                $chartData[] = [
                    'date' => Carbon::createFromFormat('m', $month)->format('F'),   
                    'count' => count($items), 
                ];
            }
            $dataChart[$year] = $chartData;
        }

        

        return view('admin.dashboard', compact('title', 'name', 'email', 'dataChart', 'tahunAjaran', 'santris', 'tahunAjaran1','slast'));
    }
}
