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
        Schema::create('svm_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vendor_id')->constrained('svm_vendors');
            $table->string('product_name');
            $table->text('product_description');
            $table->foreignId('product_category')->constrained('svm_product_categories');
            $table->decimal('unit_price', 10, 2);
            $table->string('manufacturer')->nullable();
            $table->string('weight')->nullable();
            $table->string('dimensions')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('svm_products');
    }
};
