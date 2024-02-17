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
        Schema::create('lmd_proof_of_delivery', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('order_id')->constrained('or_orders');
            $table->string('image_path');
            $table->date('delivery_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lmd_proof_of_delivery');
    }
};
