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
        Schema::create('banner_bottoms', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('name');
            $table->string('image');
            $table->decimal('sale',10,2);
            $table->string('link');
            $table->string('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banner_bottoms');
    }
};
