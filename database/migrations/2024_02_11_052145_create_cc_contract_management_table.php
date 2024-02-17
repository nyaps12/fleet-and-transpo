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
        Schema::create('cc_contract_management', function (Blueprint $table) {
            $table->id();
            $table->foreignId('carrier_id')->constrained('cc_registration');
            $table->string('contact_number');
            $table->date('start_date');
            $table->date('end_date');
            $table->text('contract_terms');
            $table->enum('contract_status', ['active', 'inactive'])->default('active');
            $table->decimal('contract_amount', 10, 2);
            $table->enum('payment_status', ['pending', 'paid'])->default('pending');
            $table->date('payment_due_date');
            $table->decimal('payment_amount', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cc_contract_management');
    }
};
