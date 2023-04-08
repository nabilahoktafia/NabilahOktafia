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
        Schema::create('spm', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('nama_puskesmas', 100)->unique();
            $table->string('pelayanan_kesehatan_ibu_hamil');
            $table->string('pelayanan_kesehatan_ibu_bersalin');
            $table->string('pelayanan_kesehatan_Bayi_baru_lahir');
            $table->string('pelayanan_kesehatan_balita');
            $table->string('pelayanan_kesehatan_pada_usia_pendidikan_dasar');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spm');
    }
};
