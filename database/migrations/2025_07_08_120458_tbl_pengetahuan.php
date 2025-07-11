<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pengetahuan', function (Blueprint $table) {
            $table->id();
            $table->char('kode_penyakit', 3);
            $table->char('kode_gejala', 3);
            $table->integer('nilai_bobot');
            $table->timestamps();

            $table->foreign('kode_penyakit')->references('kode')->on('tbl_penyakit')->onDelete('cascade');
            $table->foreign('kode_gejala')->references('kode')->on('tbl_gejala')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_pengetahuan');
    }
};
