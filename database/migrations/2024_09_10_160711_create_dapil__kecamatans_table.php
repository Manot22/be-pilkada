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
        Schema::create('dapil_kecamatan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dapil_id');
            $table->unsignedBigInteger('kecamatan_id');
            $table->timestamps();

            $table->foreign('dapil_id')->references('id')->on('dapil')->onDelete('cascade');
            $table->foreign('kecamatan_id')->references('id')->on('kecamatan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dapil_kecamatan');
    }
};
