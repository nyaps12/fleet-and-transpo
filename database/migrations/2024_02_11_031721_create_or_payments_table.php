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
        Schema::create('or_payments', function (Blueprint $table) {
            $table->id();
             $table->foreignId('order_id')->constrained('or_orders');
            $table->string('payment_method');
            $table->date('payment_date');
            $table->decimal('shipping_fee', 10, 2);
            $table->decimal('total_amount', 10, 2);
            $table->enum('payment_status', ['pending', 'paid', 'failed'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('or_payments');
    }
};
