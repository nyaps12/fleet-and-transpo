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
        Schema::create('edi_electronic_invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invoice_id')->constrained('vcc_invoices');
            $table->date('verification_date')->nullable();
            $table->enum('status', ['pending', 'verified', 'completed'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('edi_electronic_invoices');
    }
};
