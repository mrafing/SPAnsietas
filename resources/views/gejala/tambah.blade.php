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
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-notes-medical"></i> Tambah Data Gejala</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('gejala.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="kode">Kode Gejala</label>
                    <input type="text" class="form-control" id="kode" name="kode" value=""
                        placeholder="Contoh: G01" required>
                </div>
                <div class="form-group">
                    <label for="kode">Kategori Gejala</label>
                    <select class="form-control" name="kode_kategori_gejala" id="kode_kategori_gejala" required>
                        <option value="">-Pilih-</option>
                        @foreach ($list_kategori as $kategori)
                            <option value="{{ $kategori->kode }}">
                                {{ $kategori->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama_gejala">Nama Gejala</label>
                    <input type="text" class="form-control" id="nama_gejala" name="nama_gejala" value=""
                        placeholder="Contoh: Jantung Berdebar-debar" required>
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">
                    <i class="fas fa-plus"></i> Tambah Gejala
                </button>
            </form>
        </div>

    </div>
@endsection
