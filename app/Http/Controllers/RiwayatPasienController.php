<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiwayatPasien;

class RiwayatPasienController extends Controller
{

    public function index (Request $request) {
        $list_riwayat_pasien = RiwayatPasien::where('id_pasien', $request->id_pasien)->latest()->get();
        return view('pasien.riwayat', compact('list_riwayat_pasien'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_pasien' => 'required|exists:tbl_pasien,id',
            'kode_penyakit' => 'required|string|max:5',
            'presentase' => 'required|numeric|min:0|max:100',
            'gejala_dipilih' => 'required|array|min:1',
        ]);

        RiwayatPasien::create([
            'id_pasien' => $request->id_pasien,
            'kode_penyakit' => $request->kode_penyakit,
            'presentase' => $request->presentase,
            'gejala_dipilih' => $request->gejala_dipilih,
        ]);

        return redirect()->route('diagnosis')->with('success', 'Hasil diagnosis berhasil disimpan ke riwayat.');
    }
}
