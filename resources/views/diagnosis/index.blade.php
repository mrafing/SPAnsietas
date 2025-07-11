@extends('layouts.main')

@section('container')
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Tutup">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0">Pilih Gejala yang Anda Rasakan:</h6>
        </div>
        <div class="card-body">
            <form class="user" action="{{ route('diagnosis.proses') }}" method="POST">
                @csrf

                <div class="my-3">
                    <h5>Gejala Psikologis & Emosi</h5>
                    <hr>
                    @foreach ($list_gejala_psikologi as $gejala)
                        <div>
                            <label>
                                <input type="checkbox" name="gejala[]" value="{{ $gejala->kode }}">
                                {{ $gejala->nama_gejala }}
                            </label>
                        </div>
                    @endforeach
                </div>

                <div class="my-3">
                    <h5>Gejala Kognitif & Pikiran</h5>
                    <hr>
                    @foreach ($list_gejala_kognitif as $gejala)
                        <div>
                            <label>
                                <input type="checkbox" name="gejala[]" value="{{ $gejala->kode }}">
                                {{ $gejala->nama_gejala }}
                            </label>
                        </div>
                    @endforeach
                </div>

                <div class="my-3">
                    <h5>Gejala Fisik</h5>
                    <hr>
                    @foreach ($list_gejala_fisik as $gejala)
                        <div>
                            <label>
                                <input type="checkbox" name="gejala[]" value="{{ $gejala->kode }}">
                                {{ $gejala->nama_gejala }}
                            </label>
                        </div>
                    @endforeach
                </div>

                <div class="my-3">
                    <h5>Tidur & Konsentrasi</h5>
                    <hr>
                    @foreach ($list_gejala_tidur as $gejala)
                        <div>
                            <label>
                                <input type="checkbox" name="gejala[]" value="{{ $gejala->kode }}">
                                {{ $gejala->nama_gejala }}
                            </label>
                        </div>
                    @endforeach
                </div>

                <div class="my-3">
                    <h5>Prilaku Sosial</h5>
                    <hr>
                    @foreach ($list_gejala_prilaku as $gejala)
                        <div>
                            <label>
                                <input type="checkbox" name="gejala[]" value="{{ $gejala->kode }}">
                                {{ $gejala->nama_gejala }}
                            </label>
                        </div>
                    @endforeach
                </div>

                <div class="my-3">
                    <h5>Riwayat Trauma</h5>
                    <hr>
                    @foreach ($list_gejala_trauma as $gejala)
                        <div>
                            <label>
                                <input type="checkbox" name="gejala[]" value="{{ $gejala->kode }}">
                                {{ $gejala->nama_gejala }}
                            </label>
                        </div>
                    @endforeach
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block"><i class="fas fa-search"></i>
                    Deteksi</button>
            </form>

        </div>
    </div>
@endsection
