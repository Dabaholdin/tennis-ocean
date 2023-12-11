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
        Schema::create('treining_activitis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('treining_id')->constrained();
            $table->string('treining_title')->nullable();
            $table->string('treining_method')->nullable();

            $table->foreignId('user_id')->constrained();

            $table->foreignId('cort_id')->constrained()->nullable();
            $table->string('cort_name')->nullable();

            $table->unsignedInteger('price');
            $table->date('date_start');
            $table->string('day_period');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treining_activitis');
    }
};
