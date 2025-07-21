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
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-notes-medical"></i> Tambah Data Penyakit</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('penyakit.store') }}" method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="kode">Kode Penyakit</label>
                        <input type="text" class="form-control" id="kode" name="kode" placeholder="Contoh: P01"
                            required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nama_penyakit">Nama Penyakit</label>
                        <input type="text" class="form-control" id="nama_penyakit" name="nama_penyakit"
                            placeholder="Contoh: Gangguan Kecemasan" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"
                        placeholder="Tuliskan deskripsi lengkap penyakit..." required></textarea>
                </div>
                <div class="form-group">
                    <label for="solusi">Solusi</label>
                    <textarea class="form-control" id="solusi" name="solusi" rows="3"
                        placeholder="Tuliskan solusi atau penanganan penyakit..." required></textarea>
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">
                    <i class="fas fa-plus"></i> Tambah Penyakit
                </button>
            </form>
        </div>

    </div>
@endsection
