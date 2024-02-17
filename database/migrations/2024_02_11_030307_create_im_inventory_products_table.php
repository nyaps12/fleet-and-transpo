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
        Schema::create('im_inventory_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('svm_products');
            $table->integer('current_stock');
            $table->string('warehouse_location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('im_inventory_products');
    }
};
