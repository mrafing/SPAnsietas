<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPasien extends Model
{
    use HasFactory;
    protected $table = 'tbl_riwayat_pasien';
    protected $guarded = ['id'];

    protected $casts = [
        'gejala_dipilih' => 'array',
    ];

    public function pasien () {
        return $this->belongsTo(Pasien::class, 'id_pasien', 'id');
    }

    public function penyakit () {
        return $this->belongsTo(Penyakit::class, 'kode_penyakit', 'kode');
    }
}
