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
        Schema::create('rtv_tracking_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('location_id')->constrained('rtv_locations');
            $table->foreignId('vehicle_id')->constrained('fm_vehicle_information');
            $table->double('longitude', 10, 6);
            $table->double('latitude', 10, 6);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rtv_tracking_histories');
    }
};
