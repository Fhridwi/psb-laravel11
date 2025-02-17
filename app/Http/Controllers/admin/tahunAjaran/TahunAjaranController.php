<?php

namespace App\Http\Controllers\admin\tahunAjaran;

use App\Http\Controllers\Controller;
use App\Models\TahunAjaran;
use Illuminate\Http\Request;

class TahunAjaranController extends Controller
{
    public function index() {

        $title = 'Tahun Ajaran';
        $tahunAjarans = TahunAjaran::all();  

        return view('admin.tahunAjaran.tahunAjaran', compact('title', 'tahunAjarans')  );
    }

    public function create() {
            $title = 'Tambah Tahun Ajaran';
        return view('admin.tahunAjaran.create_tahunAjaran', compact('title')  );
    }

    public function store(Request $request) {
         $request->validate([
             'tahun_ajaran' => 'required|unique:tahun_ajarans,tahun_ajaran',  
             'kouta_santri' => 'required|integer|min:1',  
             'status_pendaftaran' => 'required|in:DIBUKA,TUTUP',  
         ]);
    
        TahunAjaran::create([
            'tahun_ajaran' => $request->tahun_ajaran,  
            'kouta_santri' => $request->kouta_santri,
            'status_pendaftaran' => $request->status_pendaftaran,
        ]);
    
        // Redirect dengan pesan sukses
        return redirect()->route('admin.tahunAjaran')->with('success', 'Data tahun ajaran berhasil ditambahkan');
    }

    public function edit($id) {
        $title = 'Edit Tahun Ajaran';
        $tahunAjaran = TahunAjaran::find($id);

        if (!$tahunAjaran) {
            return redirect()->route('admin.tahunAjaran')->with('error', 'Data tahun ajaran tidak ditemukan');
        }

        return view('admin.tahunAjaran.edit_tahunAjaran', compact('title', 'tahunAjaran')  );
    }

    public function update(Request $request, $id)
{
    // Validate the input
    $request->validate([
        'tahun_ajaran' => 'required',
        'kouta_santri' => 'required|integer|min:1',
        'status_pendaftaran' => 'required',
    ]);

    // Find the record by ID
    $tahunAjaran = TahunAjaran::findOrFail($id);

    $tahunAjaran->update([
        'tahun_ajaran' => $request->tahun_ajaran,
        'kouta_santri' => $request->kouta_santri,
        'status_pendaftaran' => $request->status_pendaftaran,
    ]);

    // Redirect with success message
    return redirect()->route('admin.tahunAjaran')->with('success', 'Tahun Ajaran berhasil diperbarui');
}


    public function destroy($id)
{
    $tahunAjaran = TahunAjaran::find($id);

    if ($tahunAjaran) {
        $tahunAjaran->delete();

        return redirect()->route('admin.tahunAjaran')->with('success', 'Data tahun ajaran berhasil dihapus');
    } else {
        return redirect()->route('admin.tahunAjaran')->with('error', 'Data tahun ajaran tidak ditemukan');
    }
}

    
}
