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
        Schema::create('edi_shipping_notices', function (Blueprint $table) {
            $table->id();
            //$table->foreignId('shipping_notice_id')->constrained('ppm_shipping_notices');
            $table->date('transmission_date');
            $table->enum('status', ['pending', 'transmitted', 'completed'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('edi_shipping_notices');
    }
};
