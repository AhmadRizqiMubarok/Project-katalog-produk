<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi: hapus kolom 'price' dari tabel products.
     */
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('price');
        });
    }

    /**
     * Kembalikan migrasi (rollback): tambahkan kembali kolom 'price'.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('price')->nullable(); // sesuaikan tipe data jika sebelumnya berbeda
        });
    }
};
