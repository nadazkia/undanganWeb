<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mempelai', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pria')->nullable();
            $table->string('panggil_pria')->nullable();
            $table->string('bapak_pria')->nullable();
            $table->string('ibu_pria')->nullable();
            $table->integer('anakke_pria')->nullable();
            $table->string('nama_wanita')->nullable();
            $table->string('panggil_wanita')->nullable();
            $table->string('bapak_wanita')->nullable();
            $table->string('ibu_wanita')->nullable();
            $table->integer('anakke_wanita')->nullable();

            $table->string('tanggal_akad')->nullable();
            $table->string('mulai_akad')->nullable();
            $table->string('selesai_akad')->nullable();
            $table->string('tempat_akad')->nullable();
            $table->string('link_akad')->nullable();
            $table->string('tanggal_resepsi')->nullable();
            $table->string('mulai_resepsi')->nullable();
            $table->string('selesai_resepsi')->nullable();
            $table->string('tempat_resepsi')->nullable();
            $table->string('link_resepsi')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mempelai');
    }
};
