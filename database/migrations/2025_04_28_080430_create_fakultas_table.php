<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void //menambah kolom pd tabel dan mengubah pengaturan kolom
    {
        Schema::create('fakultas', function (Blueprint $table) {
            $table->id(); //primary key, auto-incrementing, bigint
            $table->string('nama', 50);
            $table->string('singkatan', 50);
            $table->string('dekan', 50);
            $table->string('wakil_dekan', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void //menghapus tabel atau kolom
    {
        Schema::dropIfExists('fakultas');
    }
};