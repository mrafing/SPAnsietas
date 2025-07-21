@extends('layouts.main')

@section('container')
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            @foreach ($errors->all() as $item)
                <span class="mb-0">{{ $item }}</span>
            @endforeach
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-notes-medical"></i> Tambah Data Pengetahuan</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('pengetahuan.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="kode_penyakit">Pilih Penyakit</label>
                    <select class="form-control" name="kode_penyakit" id="kode_penyakit" required>
                        <option value="">-Pilih-</option>
                        @foreach ($list_penyakit as $penyakit)
                            <option value="{{ $penyakit->kode }}">
                                {{ $penyakit->kode . ' - ' . $penyakit->nama_penyakit }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="kode_gejala">Pilih Gejala</label>
                    <select class="form-control" name="kode_gejala" id="kode_gejala" required>
                        <option value="">-Pilih-</option>
                        @foreach ($list_gejala as $gejala)
                            <option value="{{ $gejala->kode }}">
                                {{ $gejala->kode . ' - ' . $gejala->nama_gejala }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="nilai_bobot">Pembobotan</label>
                    <select class="form-control" name="nilai_bobot" id="nilai_bobot" required>
                        <option value="">-Pilih-</option>
                        <option value="1">1 - Mungkin Benar</option>
                        <option value="3">3 - Hampir Pasti</option>
                        <option value="5">5 - Pasti</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">
                    <i class="fas fa-plus"></i> Tambah Pengetahuan
                </button>
            </form>
        </div>

    </div>
@endsection
