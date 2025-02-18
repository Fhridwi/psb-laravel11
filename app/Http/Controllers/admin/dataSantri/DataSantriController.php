<?php

namespace App\Http\Controllers\Admin\dataSantri;

use App\Http\Controllers\Controller;
use App\Models\Santri;
use Illuminate\Http\Request;

class DataSantriController extends Controller
{
    public function index() {

        $title = "Data Santri";
        $santris = Santri::paginate(10);

        return view("admin.dataSantri.data_santri", compact('title', 'santris'));
    }

    public function show($id) {
        $title = "Detail Santri";
        $santri = Santri::find($id);

        return view("admin.dataSantri.detail_santri", compact('santri', 'title'));
    }

    public function edit($id) {
        $title = "Edit Santri";
        $santri = Santri::find($id);

        return view("admin.dataSantri.edit_santri", compact('santri', 'title'));
    }

    public function update(Request $request, $id) {
        $santri = Santri::find($id);

        $santri->update($request->all());

        return redirect()->route('admin.data_santri')->with('success', 'Data santri berhasil diubah');
    }

    public function updateStatus(Request $request, $id)
{
    $santri = Santri::findOrFail($id);
    $santri->status_pendaftaran = $request->status_pendaftaran;
    $santri->save();

    return response()->json(['message' => 'Status berhasil diperbarui']);
}

    public function destroy($id) {
        $santri = Santri::find($id);
        $santri->delete();

        return redirect()->route('admin.data_santri')->with('success', 'Data santri berhasil dihapus');
    }
}
