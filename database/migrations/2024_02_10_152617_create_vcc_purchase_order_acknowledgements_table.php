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
        Schema::create('vcc_purchase_order_acknowledgements', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('po_id')->constrained('vcc_purchase_orders');
            $table->foreignId('vendor_id')->constrained('svm_vendors');
            $table->foreignId('product_id')->constrained('svm_products');
            //$table->foreignId('buyer_id')->constrained('users');
            $table->decimal('agreed_price', 10, 2);
            $table->integer('agreed_quantity');
            $table->dateTime('acknowledgement_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vcc_purchase_order_acknowledgements');
    }
};
