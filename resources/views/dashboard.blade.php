@extends('layouts.main')

@section('container')
    <div class="jumbotron">
        <h1 class="display-4">Selamat Datang {{ Auth::user()->pasien->nama_lengkap }} <i
                class="fas fa-hand-peace text-primary"></i></h1>
        <p class="lead">Anda Login sebegai {{ Auth::user()->is_admin ? 'Admin' : 'Pasien' }}</p>
        <hr class="my-4">
        <p>Perasaan takut yang tidak pasti dan tidak didukung oleh situasi merupakan gejala gangguan kecemasan (ansietas).
            Kecemasan yang berlebihan dapat membuat orang merasa tidak nyaman dan takut, tetapi karena gangguan kecemasan
            tidak memiliki pemicu yang dapat diidentifikasi, mereka yang mengalaminya biasanya tidak mempertanyakan mengapa
            mereka mengalami gejala-gejala ini. Banyak orang tidak menyadari bahwa mereka menderita masalah kecemasan,
            karena gejala yang muncul sering kali menyerupai penyakit fisik serius seperti serangan jantung atau stroke,
            gejala-gejala tersebut antara lain berupa jantung berdebar, keringat dingin, pusing, sesak napas, serta
            munculnya perasaan cemas yang intens, bahkan hingga merasa seolah akan meninggal. Kemiripan gejala ini sering
            menyebabkan kesalahpahaman dalam penanganan awal, sehingga penting untuk meningkatkan pemahaman mengenai
            gangguan kecemasan sebagai salah satu bentuk gangguan psikologis yang memiliki manifestasi fisik</p>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-table"></i> Data Penyakit</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Penyakit</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_penyakit as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $data->nama_penyakit }}</td>
                                <td>{{ $data->deskripsi }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-table"></i> Data Gejala</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable2" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Nama Gejala</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_gejala as $data)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
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
            $('#dataTable2').DataTable();
        });
    </script>
@endsection
