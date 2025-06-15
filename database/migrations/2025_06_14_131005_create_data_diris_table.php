<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('data_diris', function (Blueprint $table) {
        $table->id();
        $table->string('sudah_vaksin');
        $table->date('tanggal_vaksin')->nullable();
        $table->string('jenis_vaksin')->nullable();
        $table->string('gejala_serius')->nullable();
        $table->string('pernah_covid');
        $table->string('gejala_ispa');
        $table->string('hipertensi');
        $table->string('penyakit_kronis')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_diris');
    }
};
