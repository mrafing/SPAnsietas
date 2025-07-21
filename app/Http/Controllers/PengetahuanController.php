<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Pengetahuan;
use App\Models\Penyakit;
use Illuminate\Http\Request;

class PengetahuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_pengetahuan = Pengetahuan::all();
        return view('pengetahuan.index', compact('list_pengetahuan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_penyakit = Penyakit::all();
        $list_gejala = Gejala::all();
        return view('pengetahuan.tambah', compact('list_penyakit', 'list_gejala'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'kode_penyakit' => 'required',
            'kode_gejala' => 'required',
            'nilai_bobot' => 'required',
        ]);

        // Simpan ke database
        Pengetahuan::create([
            'kode_penyakit' => $request->kode_penyakit,
            'kode_gejala' => $request->kode_gejala,
            'nilai_bobot' => $request->nilai_bobot,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('pengetahuan.index')->with('success', 'Data pengetahuan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pengetahuan $pengetahuan)
    {
        $pengetahuan->delete();
        return redirect()->route('pengetahuan.index')->with('success', 'Data pengetahuan berhasil dihapus.');
    }
}
