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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('kode')->unique();
            $table->string('nama');
            $table->string('email');
            $table->string('nomor_handphone');

            $table->string('nama_lembaga');
            $table->foreignId('client_type_id')
                ->constrained('client_types')
                ->cascadeOnDelete();
            $table->string('jenjang');
            $table->unsignedInteger('jumlah_murid');
            $table->text('alamat')->nullable();

            $table->enum('status', [
                'active',
                'suspended',
                'inactive'
            ])->default('active');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
