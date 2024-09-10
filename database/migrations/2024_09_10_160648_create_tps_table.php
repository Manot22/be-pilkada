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
        Schema::create('tps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('paslon_id');
            $table->string('suara');
            $table->timestamps();
            
            $table->foreign('paslon_id')->references('id')->on('paslon')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tps');
    }
};
