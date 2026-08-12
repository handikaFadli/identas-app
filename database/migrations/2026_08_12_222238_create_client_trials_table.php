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
        Schema::create('client_trials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained()->cascadeOnDelete();

            $table->foreignId('trial_request_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            $table->timestamp('starts_at');
            $table->timestamp('ends_at');

            $table->enum('status', [
                'active',
                'expired',
                'converted',
                'cancelled'
            ])->default('active');

            $table->foreignId('approved_by')
                ->nullable()
                ->constrained('users')
                ->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_trials');
    }
};
