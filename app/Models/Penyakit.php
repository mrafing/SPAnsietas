<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;
    protected $table = 'tbl_penyakit';
    protected $guarded = ['id'];

    public function gejala()
    {
        return $this->belongsToMany(Gejala::class, 'tbl_pengetahuan', 'kode_penyakit', 'kode_gejala', 'kode', 'kode')->withPivot('nilai_bobot');;
    }
}
