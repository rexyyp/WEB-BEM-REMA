<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('beritas', function (Blueprint $table) {
            // Add indexes for better query performance if they don't exist
            $indexes = DB::select("SELECT name FROM sqlite_master WHERE type='index' AND tbl_name='beritas'");
            $indexNames = array_column($indexes, 'name');

            if (!in_array('beritas_kategori_index', $indexNames)) {
                $table->index('kategori');
            }
            if (!in_array('beritas_tanggal_index', $indexNames)) {
                $table->index('tanggal');
            }
            if (!in_array('beritas_created_at_index', $indexNames)) {
                $table->index('created_at');
            }
            if (!in_array('beritas_kategori_tanggal_index', $indexNames)) {
                $table->index(['kategori', 'tanggal']);
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('beritas', function (Blueprint $table) {
            $table->dropIndex(['kategori']);
            $table->dropIndex(['tanggal']);
            $table->dropIndex(['created_at']);
            $table->dropIndex(['kategori', 'tanggal']);
        });
    }
};
