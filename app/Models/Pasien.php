<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'tbl_pasien';
    protected $guarded = ['id'];

    public function user() {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    public function riwayatPasien() {
        return $this->hasMany(RiwayatPasien::class, 'id_pasien', 'id');
    }
}
