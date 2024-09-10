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
        Schema::create('paslon_dapil', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paslon_id');
            $table->unsignedBigInteger('dapil_id');
            $table->timestamps();

            $table->foreign('paslon_id')->references('id')->on('paslon')->onDelete('cascade');
            $table->foreign('dapil_id')->references('id')->on('dapil')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paslon_dapil');
    }
};
