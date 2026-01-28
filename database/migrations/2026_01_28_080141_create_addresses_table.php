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

        Schema::create('addresses', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('store_id')
                ->nullable()
                ->constrained()
                ->nullOnDelete();

            // Wilayah (CHAR, SESUAI DATABASE WILAYAH)
            $table->char('province_id', 2);
            $table->char('regency_id', 4);
            $table->char('district_id', 7);
            $table->char('village_id', 10);

            // Foreign Key Wilayah
            $table->foreign('province_id')
                ->references('id')->on('provinces')
                ->restrictOnDelete();

            $table->foreign('regency_id')
                ->references('id')->on('regencies')
                ->restrictOnDelete();

            $table->foreign('district_id')
                ->references('id')->on('districts')
                ->restrictOnDelete();

            $table->foreign('village_id')
                ->references('id')->on('villages')
                ->restrictOnDelete();

            $table->json('drop_point')->nullable();
            // { "lat": -6.9175, "lng": 107.6191 }

            $table->enum('type', ['personal', 'store']);

            $table->text('address');

            $table->boolean('is_default')->default(false);

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
