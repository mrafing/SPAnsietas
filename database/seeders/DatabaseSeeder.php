<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\KategoriGejala;
use App\Models\Pengetahuan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([PenyakitSeeder::class, GejalaSeeder::class, PengetahuanSeeder::class, KategoriGejalaSeeder::class]);
    }
}
