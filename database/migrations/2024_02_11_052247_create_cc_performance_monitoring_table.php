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
        Schema::create('cc_performance_monitoring', function (Blueprint $table) {
            $table->id();
            $table->foreignId('carrier_id')->constrained('cc_registration');
            $table->foreignId('shipment_id')->constrained('tm_delivery_schedulings');
            $table->string('delivery_status');
            $table->date('delivery_date');
            $table->time('delivery_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cc_performance_monitoring');
    }
};
