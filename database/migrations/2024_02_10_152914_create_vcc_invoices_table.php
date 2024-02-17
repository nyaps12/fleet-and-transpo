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
        Schema::create('vcc_invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('acknowledgement_id')->constrained('vcc_purchase_order_acknowledgements');
            $table->decimal('total_amount', 10, 2);
            $table->integer('invoiced_quantity');
            $table->dateTime('invoice_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vcc_invoices');
    }
};
