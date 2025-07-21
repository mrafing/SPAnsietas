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
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-table"></i> Data Gejala</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Aksi</th>
                            <th>Kode</th>
                            <th>Kategori</th>
                            <th>Nama Gejala</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_gejala as $data)
                            <tr>
                                <td class="d-flex">
                                    <a href="{{ route('gejala.edit', $data->id) }}"
                                        class="btn btn-primary btn-circle btn-sm mr-2">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <form action="{{ route('gejala.destroy', $data->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger btn-circle btn-sm mr-2"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')"><i
                                                class="fas fa-trash-alt"></i></button>
                                    </form>
                                </td>
                                <td>{{ $data->kode }}</td>
                                <td>{{ $data->kategoriGejala->nama_kategori }}</td>
                                <td>{{ $data->nama_gejala }}</td>
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
