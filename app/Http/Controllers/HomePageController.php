<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;
use App\Models\TahunAjaran;
use App\Models\PendidikanLanjutan;

class HomePageController extends Controller
{
    public function index() {
        return view('user.homepage');
    }

    public function create() {

        $tahunAjarans = TahunAjaran::all(); 
        $pendidikans = PendidikanLanjutan::all();

        return view('user.pendaftaran', compact('tahunAjarans', 'pendidikans'));
    }

    public function store(Request $request) {
        // Validasi request
        // $request->validate([
        //     'nama_santri' => 'required',
        //     'ttl' => 'required',
        //     'jenis_kelamin' => 'required',
        //     'anak_ke' => 'required',
        //     'asal_sekolah' => 'required',
        //     'alamat' => 'required',
        //     'nama_ayah' => 'required',
        //     'nama_ibu' => 'required',
        //     'pekerjaan_ayah' => 'required',
        //     'pekerjaan_ibu' => 'required',
        //     'status_ayah' => 'required',
        //     'status_ibu' => 'required',
        //     'alamat_orang_tua' => 'required',
        //     'no_hp_orang_tua' => 'required',
        //     'email_ortu' => 'required|email',
        //     'nama_wali' => 'required',
        //     'pekerjaan_wali' => 'required',
        //     'penghasilan_wali' => 'required',
        //     'no_hp_wali' => 'required',
        //     'email_wali' => 'required|email',
        //     'tahun_masuk' => 'required',
        //     'pendidikan_lanjutan' => 'required',
        //     // prestasi tidak wajib diisi
        //     'pas_foto' => 'required|max:10240|mimes:png,jpeg,jpg',
        //     'akte_kelahiran' => 'required|max:10240|mimes:pdf',
        //     'scan_kk' => 'required|max:10240|mimes:pdf',
        //     'ktp_ayah' => 'required|max:10240|mimes:pdf',
        //     'ktp_ibu' => 'required|max:10240|mimes:pdf',
        // ]);
        
        // Menyimpan file dan mendapatkan pathnya
        $pasFotoPath = $request->file('pas_foto')->storeAs('uploads', $request->file('pas_foto')->getClientOriginalName(), 'public');
        $akteKelahiranPath = $request->file('akte_kelahiran')->storeAs('uploads', $request->file('akte_kelahiran')->getClientOriginalName(), 'public');
        $scanKkPath = $request->file('scan_kk')->storeAs('uploads', $request->file('scan_kk')->getClientOriginalName(), 'public');
        $ktpAyahPath = $request->file('ktp_ayah')->storeAs('uploads', $request->file('ktp_ayah')->getClientOriginalName(), 'public');
        $ktpIbuPath = $request->file('ktp_ibu')->storeAs('uploads', $request->file('ktp_ibu')->getClientOriginalName(), 'public');
    
        // Menyimpan data santri ke database
        $santri = Santri::create([
            'nama_santri' => $request->nama_santri,
            'ttl' => $request->ttl,
            'jenis_kelamin' => $request->jenis_kelamin,
            'anak_ke' => $request->anak_ke,
            'asal_sekolah' => $request->asal_sekolah,
            'alamat' => $request->alamat,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'pekerjaan_ayah' => $request->pekerjaan_ayah,
            'pekerjaan_ibu' => $request->pekerjaan_ibu,
            'status_ayah' => $request->status_ayah,
            'status_ibu' => $request->status_ibu,
            'alamat_orang_tua' => $request->alamat_orang_tua,
            'no_hp_orang_tua' => $request->no_hp_orang_tua,
            'email_ortu' => $request->email_ortu,
            'wali' => $request->wali,
            'nama_wali' => $request->nama_wali,
            'pekerjaan_wali' => $request->pekerjaan_wali,
            'penghasilan_wali' => $request->penghasilan_wali,
            'no_hp_wali' => $request->no_hp_wali,
            'email_wali' => $request->email_wali,
            'tahun_ajaran'   => $request->tahun_ajaran,
            'pendidikan_lanjutan' => $request->pendidikan_lanjutan,
            'prestasi'  => $request->prestasi,
            'pas_foto' => $pasFotoPath,
            'akte_kelahiran' => $akteKelahiranPath,
            'scan_kk' => $scanKkPath,
            'ktp_ayah' => $ktpAyahPath,
            'ktp_ibu' => $ktpIbuPath,

            
        ]);
    
        return redirect()->route('user.dashboard')->with('success', 'Data santri berhasil disimpan.');
    }
}
