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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('preview');
            $table->string('preview_admin');
            $table->string('lead');
            $table->text('content');
            $table->string('author')->nullable();
            $table->string('img_first')->nullable();
            $table->string('img_first_admin')->nullable();
            $table->string('img_second')->nullable();
            $table->string('img_second_admin')->nullable();
            $table->string('img_third')->nullable();
            $table->string('img_third_admin')->nullable();
            $table->string('img_fourth')->nullable();
            $table->string('img_fourth_admin')->nullable();
            $table->string('img_fifth')->nullable();
            $table->string('img_fifth_admin')->nullable();

            $table->softDeletes();
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
