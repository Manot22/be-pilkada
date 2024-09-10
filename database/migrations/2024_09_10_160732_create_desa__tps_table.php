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
        Schema::create('desa_tps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('desa_id');
            $table->unsignedBigInteger('tps_id');
            $table->timestamps();
            $table->foreign('desa_id')->references('id')->on('desa')->onDelete('cascade');
            $table->foreign('tps_id')->references('id')->on('tps')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('desa_tps');
    }
};
