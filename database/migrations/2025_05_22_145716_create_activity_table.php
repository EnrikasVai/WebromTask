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
        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 6, 2);
            $table->double('latitude', 10, 6);
            $table->double('longitude', 10, 6);
            $table->string('street');
            $table->string('city');
            $table->string('category');
            $table->enum('type', ['grupe', 'individualiai']);
            $table->float('rating', 2, 1)->nullable();
            $table->integer('rating_count')->default(0);
            $table->string('photo_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity');
    }
};
