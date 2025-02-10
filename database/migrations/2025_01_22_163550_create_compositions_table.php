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
        Schema::create('compositions', function (Blueprint $table) {
            $table->id();
            $table->integer('cotton')->default(0)->nullable();
            $table->integer('viscose')->default(0)->nullable();
            $table->integer('elastane')->default(0)->nullable();
            $table->integer('wool')->default(0)->nullable();
            $table->integer('polyester')->default(0)->nullable();

            $table->softDeletes();
            $table->timestamps();

            $table->foreignId('product_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compositions');
    }
};
