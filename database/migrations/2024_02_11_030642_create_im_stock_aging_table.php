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
        Schema::create('im_stock_aging', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained('svm_products');
            $table->foreignId('stock_id')->constrained('im_inventory_products');
            $table->date('entry_date');
            $table->integer('duration_in_stock');
            $table->string('action_suggested')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('im_stock_aging');
    }
};
