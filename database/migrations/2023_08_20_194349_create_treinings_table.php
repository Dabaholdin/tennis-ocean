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
        Schema::create('treinings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('trening_categories');
            $table->string('title');
            $table->string('title_description');
            $table->text('description');
            $table->string('trening_method');
            $table->string('trening_type');
            $table->text('traning_img');
            $table->integer('price');
            $table->string('price_prefix')->default('от');
            $table->string('free_type')->default('img');
            $table->text('free_description');
            $table->text('free_video_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainings');
    }
};
