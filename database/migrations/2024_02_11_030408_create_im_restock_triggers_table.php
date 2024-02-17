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
        Schema::create('im_restock_triggers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('svm_products');
            $table->foreignId('stock_id')->constrained('im_inventory_products');
            $table->integer('restock_point');
            $table->integer('restock_quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('im_restock_triggers');
    }
};
