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
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug')->unique();
            $table->string('kategori')->nullable();
            $table->date('tanggal');
            $table->string('author');
            $table->string('thumbnail')->nullable();
            $table->longText('konten');
            $table->unsignedBigInteger('views')->default(0);
            $table->timestamps();

            // Index untuk optimasi query
            $table->index('slug');
            $table->index('kategori');
            $table->index('tanggal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};
