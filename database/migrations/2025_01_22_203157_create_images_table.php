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
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('main_img_path')->nullable();
            $table->string('second_img_path')->nullable();
            $table->string('third_img_path')->nullable();
            $table->string('fourth_img_path')->nullable();
            $table->string('model_img_path')->nullable();
            $table->string('main_img')->nullable();
            $table->string('second_img')->nullable();
            $table->string('third_img')->nullable();
            $table->string('fourth_img')->nullable();
            $table->string('model_img')->nullable();

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
        Schema::dropIfExists('images');
    }
};
