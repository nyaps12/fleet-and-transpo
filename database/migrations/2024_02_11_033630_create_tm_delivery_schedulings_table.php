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
        Schema::create('tm_delivery_schedulings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('shipment_id')->constrained('wm_outbound_shipments');
            $table->foreignId('route_id')->nullable()->constrained('tm_route_plannings');
            $table->date('delivery_date');
            $table->enum('delivery_status', ['scheduled', 'in_transit', 'delivered'])->default('scheduled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tm_delivery_schedulings');
    }
};
