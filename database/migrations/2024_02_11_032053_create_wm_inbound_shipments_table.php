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
        Schema::create('wm_inbound_shipments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('warehouse_id')->constrained('wm_warehouses');
            $table->foreignId('product_id')->constrained('svm_products');
            $table->foreignId('vendor_id')->constrained('svm_vendors');
            $table->integer('quantity');
            $table->date('received_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wm_inbound_shipments');
    }
};
