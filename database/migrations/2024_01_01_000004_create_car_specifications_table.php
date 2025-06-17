<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('car_specifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->constrained()->onDelete('cascade');
            $table->string('engine');
            $table->string('power');
            $table->string('color');
            $table->integer('doors');
            $table->integer('seats');
            $table->string('body_type')->nullable();
            $table->enum('drive_type', ['fwd', 'rwd', 'awd', '4wd'])->nullable();
            $table->timestamps();

            $table->index(['car_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('car_specifications');
    }
};
