<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengetahuan extends Model
{
    use HasFactory;
    protected $table = 'tbl_pengetahuan';
    protected $guarded = ['id'];

    public function penyakit() {
        return $this->belongsTo(Penyakit::class, 'kode_penyakit', 'kode');
    }

    public function gejala() {
        return $this->belongsTo(Gejala::class, 'kode_gejala', 'kode');
    }
}
