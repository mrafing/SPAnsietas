<?php

namespace App\Http\Controllers;

use App\Models\Penyakit;
use App\Http\Requests\StorePenyakitRequest;
use App\Http\Requests\UpdatePenyakitRequest;

class PenyakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePenyakitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePenyakitRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function show(Penyakit $penyakit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function edit(Penyakit $penyakit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePenyakitRequest  $request
     * @param  \App\Models\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePenyakitRequest $request, Penyakit $penyakit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penyakit  $penyakit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penyakit $penyakit)
    {
        //
    }
}
