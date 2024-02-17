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
        Schema::create('vcc_notifications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vendor_id')->constrained('svm_vendors');
            $table->text('message');
            $table->enum('type', ['info', 'warning', 'error']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vcc_notifications');
    }
};
