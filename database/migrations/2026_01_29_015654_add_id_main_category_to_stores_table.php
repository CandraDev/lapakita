<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('stores', function (Blueprint $table) {
            // Tambah kolom id_main_category
            $table->unsignedBigInteger('main_category_id')->nullable()->after('user_id');

            // Tambah foreign key ke categories.id
            $table->foreign('main_category_id')
                  ->references('id')
                  ->on('categories')
                  ->onUpdate('cascade')
                  ->onDelete('set null'); // jika category dihapus, set null
        });
    }

    public function down(): void
    {
        Schema::table('stores', function (Blueprint $table) {
            // Hapus foreign key dulu
            $table->dropForeign(['main_category_id']);
            // Hapus kolom
            $table->dropColumn('main_category_id');
        });
    }
};
