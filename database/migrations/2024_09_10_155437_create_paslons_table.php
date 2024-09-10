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
        Schema::create('paslon', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nomor_urut');
            $table->string('image');
            $table->string('slogan');
            $table->unsignedBigInteger('partai_id');
            $table->timestamps();

            $table->foreign('partai_id')->references('id')->on('partai')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paslon');
    }
};
