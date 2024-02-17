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
        Schema::create('lmd_deliveries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('delivery_id')->constrained('tm_delivery_schedulings');
            $table->foreignId('route_id')->constrained('tm_route_plannings');
            $table->date('delivery_date');
            $table->string('delivery_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lmd_deliveries');
    }
};
