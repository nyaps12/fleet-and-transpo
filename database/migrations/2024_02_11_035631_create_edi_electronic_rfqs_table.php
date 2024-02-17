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
        Schema::create('edi_electronic_rfqs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rfq_id')->constrained('svm_request_for_proposals');
            $table->timestamp('transmission_date')->nullable();
            $table->enum('status', ['pending', 'transmitted', 'completed'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('edi_electronic_rfqs');
    }
};
