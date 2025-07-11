<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class DiagnosisController extends Controller
{
    public function index()
    {
        $param = [
            'list_gejala_psikologi' => Gejala::where('kode_kategori_gejala', 'K01')->get(),
            'list_gejala_kognitif' => Gejala::where('kode_kategori_gejala', 'K02')->get(),
            'list_gejala_fisik' => Gejala::where('kode_kategori_gejala', 'K03')->get(),
            'list_gejala_tidur' => Gejala::where('kode_kategori_gejala', 'K04')->get(),
            'list_gejala_prilaku' => Gejala::where('kode_kategori_gejala', 'K05')->get(),
            'list_gejala_trauma' => Gejala::where('kode_kategori_gejala', 'K06')->get(),
        ];

        return view('diagnosis.index', $param);
    }

    public function proses(Request $request)
    {
        $selectedGejala = $request->input('gejala', []);
        $list_gejala = Gejala::whereIn('kode', $selectedGejala)->get();
        $penyakits = Penyakit::with('gejala')->get();

        $hasil = [];

        foreach ($penyakits as $penyakit) {
            $totalBobot = $penyakit->gejala->sum('pivot.nilai_bobot');
            $bobotCocok = $penyakit->gejala
                ->whereIn('kode', $selectedGejala)
                ->sum('pivot.nilai_bobot');

            $similarity = $totalBobot > 0 ? round($bobotCocok / $totalBobot, 3) : 0;

            $hasil[] = [
                'penyakit' => $penyakit,
                'similarity' => $similarity,
            ];
        }

        usort($hasil, fn($a, $b) => $b['similarity'] <=> $a['similarity']);

        return view('diagnosis.hasil', compact('hasil', 'list_gejala'));
    }


}
