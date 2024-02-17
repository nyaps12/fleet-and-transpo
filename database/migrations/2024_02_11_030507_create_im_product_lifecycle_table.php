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
        Schema::create('im_product_lifecycle', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('svm_products');
            $table->foreignId('stock_id')->constrained('im_inventory_products');
            $table->date('production_date');
            $table->date('expiry_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('im_product_lifecycle');
    }
};
