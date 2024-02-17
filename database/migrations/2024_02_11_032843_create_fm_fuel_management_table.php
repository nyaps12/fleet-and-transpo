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
        Schema::create('fm_fuel_management', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicle_id')->constrained('fm_vehicle_information');
            $table->date('fuel_date');
            $table->decimal('amount', 8, 2);
            $table->decimal('cost', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fm_fuel_management');
    }
};
