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
        Schema::create('vcc_quote_creations', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('rfq_id')->constrained();
            //$table->foreignId('customer_id')->constrained('users');
            $table->foreignId('product_id')->constrained('svm_products');
            //$table->foreignId('requested_quantity')->constrained('vcc_requested_quantities');
            $table->decimal('quoted_price', 10, 2);
            $table->dateTime('quote_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vcc_quote_creations');
    }
};
