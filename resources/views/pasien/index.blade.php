@php
    use Carbon\Carbon;
@endphp
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
            <h6 class="m-0 font-weight-bold text-primary">Data Pasien</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Aksi</th>
                            <th>Nama Lengkap</th>
                            <th>Umur</th>
                            <th>Tanggal Lahir</th>
                            <th>Jenis Kelamin</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_pasien as $data)
                            <tr>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ route('pasien.edit', $data->id) }}"
                                            class="btn btn-primary btn-circle btn-sm mr-2">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <form action="{{ route('pasien.destroy', $data->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-circle btn-sm mr-2"
                                                onclick="return confirm('Yakin ingin menghapus data ini?')"><i
                                                    class="fas fa-trash-alt"></i></button>
                                        </form>
                                        <a href="{{ route('riwayatpasien', $data->id) }}"
                                            class="btn btn-info btn-circle btn-sm">
                                            <i class="fas fa-history"></i>
                                        </a>
                                    </div>
                                </td>
                                <td>{{ $data->pasien->nama_lengkap }}</td>
                                <td>{{ Carbon::parse($data->pasien->tanggal_lahir)->age }} tahun</td>
                                <td>{{ $data->pasien->tanggal_lahir }}</td>
                                <td>{{ $data->pasien->jenis_kelamin }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
@endsection
