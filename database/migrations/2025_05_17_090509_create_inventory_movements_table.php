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
    Schema::create('inventory_movements', function (Blueprint $table) {
        $table->id('movement_id');
        $table->string('batch_id', 15);
        $table->string('product_id', 10);
        $table->integer('quantity');
        $table->enum('movement_type', ['in', 'out']);
        $table->timestamp('movement_date')->useCurrent();
        $table->string('reference', 100)->nullable();
        $table->text('notes')->nullable();
        $table->timestamps(); // created_at & updated_at
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory_movements');
    }
};
