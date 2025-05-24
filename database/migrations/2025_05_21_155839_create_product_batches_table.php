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
        Schema::create('product_batches', function (Blueprint $table) {
            $table->string('batch_id', 15)->primary();
            $table->string('product_id', 10);
            $table->integer('quantity');
            $table->decimal('purchase_price', 10, 2);
            $table->date('date_received');
            $table->date('expiry_date')->nullable();
            $table->integer('remaining_quantity');
            $table->timestamp('created_at')->useCurrent();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_batches');
    }
};
