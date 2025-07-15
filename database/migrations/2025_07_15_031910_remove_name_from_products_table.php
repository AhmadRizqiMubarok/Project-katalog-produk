<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi: hapus kolom 'name' dari tabel products.
     */
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('name');
        });
    }

    /**
     * Kembalikan migrasi: tambahkan kembali kolom 'name' jika rollback.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('name')->nullable(); // atau sesuaikan dengan tipe sebelumnya
        });
    }
};
