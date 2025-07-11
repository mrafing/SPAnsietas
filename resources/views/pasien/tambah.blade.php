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
        <div class="card-header">Tambah Pasien</div>
        <div class="card-body">
            <form class="user" action="{{ route('pasien.store') }}" method="post">
                @csrf
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" class="form-control" id="nama_depan" name="nama_depan"
                            placeholder="Nama Depan" required>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="nama_belakang" name="nama_belakang"
                            placeholder="Nama Belakang" required>
                    </div>
                </div>
                <div class="form-group">
                    <select class="form-control" name="jenis_kelamin" id="jenis_kelamin" required>
                        <option value="" selected>-Pilih-</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggalLahir">Tanggal Lahir</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <i class="far fa-calendar-alt"></i>
                            </span>
                        </div>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                            placeholder="Tanggal lahir" required>
                    </div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Alamat Email"
                        required>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                            required>
                    </div>
                    <div class="col-sm-6">
                        <input type="password" class="form-control" id="repeat_password" name="repeat_password"
                            placeholder="Ulangi Password" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block"><i class="fas fa-plus"></i> Tambah
                    Pasien</button>
            </form>
        </div>
    </div>
@endsection
