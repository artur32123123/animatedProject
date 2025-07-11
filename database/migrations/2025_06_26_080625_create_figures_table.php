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
        Schema::create('figures', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('weight', 5, 2)->default(0.0);
            $table->string('material')->default('пластик');
            $table->unsignedBigInteger('figure_category_id')->default(2);
            $table->foreign('figure_category_id')->references('id')->on('figure_categories')->onDelete('cascade');
            $table->string('size')->default('20x20x20');
            $table->integer('discount')->default(0);
            $table->integer('price')->default(0);
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('figures');
    }
};
