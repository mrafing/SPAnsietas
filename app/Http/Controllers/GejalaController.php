<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Http\Requests\StoreGejalaRequest;
use App\Http\Requests\UpdateGejalaRequest;
use App\Models\KategoriGejala;
use Illuminate\Http\Request;

class GejalaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_gejala = Gejala::all();
        return view('gejala.index', compact('list_gejala'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $list_kategori = KategoriGejala::all();
        return view('gejala.tambah', compact('list_kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGejalaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'kode' => 'required|string|max:10|unique:tbl_gejala,kode',
            'kode_kategori_gejala' => 'required|string',
            'nama_gejala' => 'required|string|max:255',
        ]);

        // Simpan ke database
        Gejala::create([
            'kode' => $request->kode,
            'kode_kategori_gejala' => $request->kode_kategori_gejala,
            'nama_gejala' => $request->nama_gejala,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('gejala.index')->with('success', 'Data gejala berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function show(Gejala $gejala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function edit(Gejala $gejala)
    {
        $list_kategori = KategoriGejala::all();
        return view('gejala.edit', compact('gejala', 'list_kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGejalaRequest  $request
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gejala $gejala)
    {
        // Validasi input
        $request->validate([
            'kode_kategori_gejala' => 'required|string',
            'nama_gejala' => 'required|string|max:255'
        ]);
        
        $gejala->update($request->only('kode_kategori_gejala', 'nama_gejala'));
        return redirect()->route('gejala.index')->with('success', 'Data Gejala berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gejala  $gejala
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gejala $gejala)
    {
        $gejala->delete();
        return redirect()->route('gejala.index')->with('success', 'Data gejala berhasil dihapus.');
    }
}
