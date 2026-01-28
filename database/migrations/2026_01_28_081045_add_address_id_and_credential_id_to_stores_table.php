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
        Schema::table('stores', function (Blueprint $table) {
            $table->foreignId('address_id')
                ->nullable()
                ->after('user_id')
                ->constrained('addresses')
                ->nullOnDelete();

            $table->foreignId('credential_id')
                ->nullable()
                ->after('address_id')
                ->constrained('credentials')
                ->nullOnDelete();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('stores', function (Blueprint $table) {
            $table->dropForeign(['address_id']);
            $table->dropForeign(['credential_id']);

            $table->dropColumn(['address_id', 'credential_id']);
        });
    }
};
