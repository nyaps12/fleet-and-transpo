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
        Schema::create('fm_vehicles_availability', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->constrained('fm_drivers');
            $table->foreignId('plate_number')->constrained('fm_vehicle_information');
            $table->foreignId('capacity')->constrained('fm_vehicle_information');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fm_vehicles_availability');
    }
};
