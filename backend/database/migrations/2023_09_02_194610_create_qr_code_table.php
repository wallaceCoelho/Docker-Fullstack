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
        Schema::create('qr_code', function (Blueprint $table) {
            $table->id();
            $table->string('str_code');
            $table->string('img_code');
            $table->timestamps();
            $table->foreignId('url_id')->constrained(
                table: 'url'
            );
            $table->foreignId('user_id')->constrained(
                table: 'users'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qr_code');
    }
};
