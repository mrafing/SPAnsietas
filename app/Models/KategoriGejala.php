<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriGejala extends Model
{
    use HasFactory;
    protected $table = 'tbl_kategori_gejala';
    protected $guarded = ['id'];

    public function gejala()
    {
        return $this->hasMany(Gejala::class, 'kode_kategori_gejala', 'kode');
    }
}
