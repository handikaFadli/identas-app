<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('consultation_requests', function (Blueprint $table) {
            $table->id();
            $table->string('paket');
            $table->string('nama_lengkap');
            $table->string('jabatan');
            $table->string('nama_sekolah');
            $table->unsignedInteger('jumlah_siswa');
            $table->unsignedInteger('jumlah_guru');
            $table->json('kebutuhan_fitur');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('consultation_requests');
    }
};
