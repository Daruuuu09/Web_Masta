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
    Schema::create('price_history', function (Blueprint $table) {
        $table->id('history_id');
        $table->string('product_id', 10);
        $table->decimal('old_price', 10, 2);
        $table->decimal('new_price', 10, 2);
        $table->timestamp('changed_at')->useCurrent();
        $table->string('changed_by', 50)->nullable();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('price_history');
    }
};
