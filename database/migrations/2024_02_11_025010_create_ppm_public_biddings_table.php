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
        Schema::create('ppm_public_biddings', function (Blueprint $table) {
            $table->id();
            $table->string('bid_document');
            $table->dateTime('bid_start');
            $table->dateTime('bid_end');
            $table->enum('bid_status', ['open', 'closed', 'cancelled'])->default('open');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppm_public_biddings');
    }
};
