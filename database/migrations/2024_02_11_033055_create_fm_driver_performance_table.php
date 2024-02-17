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
        Schema::create('fm_driver_performance', function (Blueprint $table) {
            $table->id();
            $table->foreignId('driver_id')->constrained('fm_drivers');
            $table->date('evaluated_date');
            $table->integer('rating');
            $table->text('feedback')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fm_driver_performance');
    }
};
