<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_pasien = User::with('pasien')->where('is_admin', false)->has('pasien')->get();
        return view('pasien.index', compact('list_pasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasien.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_depan' => 'required|string|max:50',
            'nama_belakang' => 'required|string|max:50',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tanggal_lahir' => 'required|date',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|same:repeat_password',
        ]);

        // Simpan ke tabel users
        $user = User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'is_admin' => false, // atau sesuai struktur kolom kamu
        ]);

        // Simpan ke tabel pasien
        Pasien::create([
            'id_user' => $user->id,
            'nama_lengkap' => $request->nama_depan . ' ' . $request->nama_belakang,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
        ]);

        return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil ditambahkan.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(Pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit(Pasien $pasien)
    {
        return view('pasien.edit', compact('pasien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pasien $pasien)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:100',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'tanggal_lahir' => 'required|date',
        ]);

        $pasien->update($request->only('nama_lengkap', 'jenis_kelamin', 'tanggal_lahir'));
        
        return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pasien $pasien)
    {
        $pasien->user->delete();
        return redirect()->route('pasien.index')->with('success', 'Data pasien berhasil dihapus.');
    }
}
