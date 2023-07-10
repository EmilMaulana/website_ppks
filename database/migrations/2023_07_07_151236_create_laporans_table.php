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
        Schema::create('laporans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->boolean('status_id')->default(false);
            $table->string('nama');
            $table->string('usia')->nullable();
            $table->string('npm')->nullable();
            $table->string('jenis_kelamin');
            $table->string('tempat');
            $table->string('tanggal');
            $table->string('waktu')->nullable();
            $table->string('jenis_kasus');
            $table->string('ciri_pelaku');
            $table->text('kronologi');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};
