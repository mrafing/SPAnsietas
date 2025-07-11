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
        Schema::create('tbl_penyakit', function (Blueprint $table) {
            $table->id();
            $table->char('kode', 3)->unique();
            $table->string('nama_penyakit');
            $table->text('deskripsi');
            $table->text('solusi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_penyakit');
    }
};
