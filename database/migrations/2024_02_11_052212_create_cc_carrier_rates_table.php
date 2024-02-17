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
        Schema::create('cc_carrier_rates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('carrier_id')->constrained('cc_registration');
            $table->string('service_type');
            $table->string('origin');
            $table->string('destination');
            $table->decimal('rate', 10, 2);
            $table->string('currency');
            $table->date('effective_date');
            $table->date('expiration_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cc_carrier_rates');
    }
};
