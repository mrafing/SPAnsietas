<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;
    protected $table = 'tbl_gejala';
    protected $guarded = ['id'];

    public function penyakit()
    {
        return $this->belongsToMany(Penyakit::class, 'tbl_pengetahuan', 'kode_gejala', 'kode_penyakit', 'kode', 'kode')->withPivot('nilai_bobot');;
    }

    public function kategoriGejala()
    {
        return $this->belongsTo(KategoriGejala::class, 'kode_kategori_gejala', 'kode');
    }
}
