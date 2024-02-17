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
        Schema::create('or_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('or_customers');
            $table->foreignId('product_id')->constrained('svm_products');
            $table->integer('quantity');
            $table->date('order_date');
            $table->enum('order_status', ['pending', 'processing', 'shipped', 'delivered', 'cancelled'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('or_orders');
    }
};
