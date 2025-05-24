<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->string('id', 10)->primary();
            $table->string('name', 100);
            $table->string('brand', 50);
            $table->string('category', 20);
            $table->decimal('price', 10, 2);
            $table->text('description')->nullable();
            $table->string('image_path', 255)->nullable();
            $table->string('status', 20)->default('active');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

