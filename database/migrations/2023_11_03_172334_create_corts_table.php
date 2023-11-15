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
        Schema::create('corts', function (Blueprint $table) {
            $table->id();
            $table->string('tile');
            $table->string('description')->nullable();
            $table->string('addreas')->nullable();
            $table->string('coating')->nullable();
            $table->string('additionally')->nullable();
            $table->string('raiting')->nullable();
            $table->string('img_cort_one')->nullable();
            $table->string('img_cort_two')->nullable();
            $table->string('img_cort_three')->nullable();
            $table->string('img_cort_four')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corts');
    }
};
