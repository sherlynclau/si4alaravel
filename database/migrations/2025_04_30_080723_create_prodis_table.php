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
        Schema::create('prodi', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->string('singkatan', 2);
            $table->string('kaprodi', 30);
            $table->string('wakil_kaprodi', 30);
            $table->foreignId('fakultas_id')->constrained('fakultas')->onDelete('restrict')->onUpdate('restrict'); //menambahkan foreign key fakultas_id
            //restrict biar dk terhapus
            //onDelete('cascade') biar data di tabel prodi ikut terhapus
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prodi');
    }
};
