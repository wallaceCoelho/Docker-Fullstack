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
        Schema::create('url', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('short_url');
            $table->timestamps();
            $table->foreignId('user_id')->constrained(
                table: 'users'
            );
        });
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('qr_code')->constrained(
                table: 'qr_code'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('url');
    }
};
