<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->decimal('price', 12, 2);
            $table->integer('year');
            $table->integer('mileage');
            $table->enum('fuel_type', ['gasoline', 'diesel', 'electric', 'hybrid', 'lpg']);
            $table->enum('transmission', ['manual', 'automatic', 'cvt', 'semi-automatic']);
            $table->string('location');
            $table->text('description');
            $table->foreignId('seller_id')->constrained('users')->onDelete('cascade');
            $table->boolean('featured')->default(false);
            $table->boolean('has_360_view')->default(false);
            $table->boolean('is_active')->default(true);
            $table->string('video_url')->nullable();
            $table->string('contact_phone')->nullable();
            $table->string('contact_email')->nullable();
            $table->integer('views')->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->index(['is_active', 'featured']);
            $table->index(['price', 'year']);
            $table->index(['location']);
            $table->index(['seller_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
