<?php

namespace Database\Seeders;

use App\Models\KategoriGejala;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriGejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KategoriGejala::create([
            'kode' => 'K01',
            'nama_kategori' => 'Gejala Emosional',
        ]);
        KategoriGejala::create([
            'kode' => 'K02',
            'nama_kategori' => 'Gejala Kognitif & Pikiran',
        ]);
        KategoriGejala::create([
            'kode' => 'K03',
            'nama_kategori' => 'Gejala Fisik',
        ]);
        KategoriGejala::create([
            'kode' => 'K04',
            'nama_kategori' => 'Tidur & Konsentrasi',
        ]);
        KategoriGejala::create([
            'kode' => 'K05',
            'nama_kategori' => 'Prilaku sosial',
        ]);
        KategoriGejala::create([
            'kode' => 'K06',
            'nama_kategori' => 'Riwayat Trauma',
        ]);
    }
}
