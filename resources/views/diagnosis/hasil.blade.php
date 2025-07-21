@extends('layouts.main')

@section('container')
    @if (!empty($hasil) && $hasil[0]['similarity'] > 0)
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-notes-medical"></i> Hasil Diagnosis</h6>
            </div>
            <div class="card-body">
                <div class="chart-pie pt-4">
                    <canvas id="pieChart"></canvas>
                </div>

                <hr>

                <div class="text-center py-5">
                    <h5>{{ $hasil[0]['similarity'] * 100 }}%</h5>
                    <h6>{{ $hasil[0]['penyakit']->nama_penyakit }}</h6>
                </div>

                <hr>
                <p class="py-3"><strong>Solusi</strong>: {{ $hasil[0]['penyakit']->solusi }}</p>

                <hr>
                <p class="pt-3"><strong>Gejala yang dipilih:</strong></p>
                <ul>
                    @foreach ($list_gejala as $gejala)
                        <li>{{ $gejala->nama_gejala }}</li>
                    @endforeach
                </ul>
                <form action="{{ route('riwayatpasien.tambah') }}" method="post">
                    @csrf
                    <input type="hidden" name="id_pasien" value="{{ Auth::user()->pasien->id }}">
                    <input type="hidden" name="kode_penyakit" value="{{ $hasil[0]['penyakit']['kode'] }}">
                    <input type="hidden" name="presentase" value="{{ $hasil[0]['similarity'] * 100 }}">
                    @foreach ($list_gejala as $gejala)
                        <input type="hidden" name="gejala_dipilih[]" value="{{ $gejala->nama_gejala }}">
                    @endforeach

                    <div class="row">
                        <button type="submit" class="col btn btn-primary mr-3">Simpan</button>
                        <a href="{{ URL::to('diagnosis') }}" class="col btn btn-danger">Diagnosis Ulang</a>

                    </div>
                </form>
            </div>
        </div>
    @else
        <div class="alert alert-warning">Tidak ada penyakit yang cocok dengan gejala yang dipilih.</div>
    @endif
@endsection

@section('script')
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

    <script>
        const ctx = document.getElementById('pieChart');
        const myPieChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: {!! json_encode(array_map(fn($item) => $item['penyakit']->nama_penyakit, $hasil)) !!},
                datasets: [{
                    data: {!! json_encode(array_map(fn($item) => round($item['similarity'] * 100, 2), $hasil)) !!},
                    backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', '#f6c23e', '#e74a3b', '#858796'],
                    hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf', '#dda20a', '#be2617',
                        '#5a5c69'
                    ],
                    hoverBorderColor: 'rgba(234, 236, 244, 1)',
                }],
            },
            options: {
                maintainAspectRatio: false,
                tooltips: {
                    backgroundColor: 'rgb(255,255,255)',
                    bodyFontColor: '#858796',
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    caretPadding: 10,
                },
                legend: {
                    display: true,
                },
                cutoutPercentage: 80,
            },
        });
    </script>
@endsection
