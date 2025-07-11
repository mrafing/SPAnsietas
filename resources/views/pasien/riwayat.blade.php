{{-- @dd($list_riwayat_pasien) --}}
@extends('layouts.main')
@section('container')
    <div class="accordion" id="accordionExample">
        @forelse ($list_riwayat_pasien as $data)
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-block text-left" type="button" data-toggle="collapse"
                            data-target="#collapse{{ $data->id }}" aria-expanded="true"
                            aria-controls="collapse{{ $data->id }}">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="my-0">{{ $data->created_at }}</p>
                                <i class="fas fa-calendar-alt"></i>
                            </div>
                        </button>
                    </h2>
                </div>

                <div id="collapse{{ $data->id }}" class="collapse" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>Nama Penyakit : {{ $data->penyakit->nama_penyakit }}</p>
                        <p>Presentase : {{ $data->presentase }}%</p>
                        <hr>
                        <p>Gejala:</p>
                        <ul>
                            @foreach ($data->gejala_dipilih as $data)
                                <li>{{ $data }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>


        @empty
            <div class="alert alert-warning" role="alert">
                Tidak ada riwayat!
            </div>
        @endforelse

    </div>
@endsection
