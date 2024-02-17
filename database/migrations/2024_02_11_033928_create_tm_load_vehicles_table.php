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
        Schema::create('tm_load_vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicle_id')->constrained('fm_vehicle_information');
            $table->foreignId('shipment_id')->constrained('wm_outbound_shipments');
            $table->foreignId('product_id')->constrained('svm_products');
            $table->enum('product_location_section', ['front', 'middle', 'back']);
            $table->enum('product_location_side', ['left', 'right']);
            $table->enum('product_location_level', ['floor', 'shelf']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tm_load_vehicles');
    }
};
