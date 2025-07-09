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
        Schema::create('figures_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('figure_id');
            $table->foreign('figure_id')->references('id')->on('figures')->onDelete('cascade');
            $table->string('src')->default('images/Figure/binzo/bz2.jpeg');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('figures_images');
    }
};
