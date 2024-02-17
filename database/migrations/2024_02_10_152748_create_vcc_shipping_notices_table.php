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
        Schema::create('vcc_shipping_notices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('acknowledgement_id')->constrained('vcc_purchase_order_acknowledgements');
            $table->dateTime('shipping_date');
            $table->dateTime('estimated_delivery_date');
            $table->integer('shipped_quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vcc_shipping_notices');
    }
};
