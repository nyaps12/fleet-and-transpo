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
        Schema::create('cc_qualification', function (Blueprint $table) {
            $table->id();
            $table->foreignId('carrier_id')->constrained('cc_registration');
            $table->string('evaluator_name');
            $table->date('evaluation_date');
            $table->text('evaluation_result');
            $table->enum('approval_status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->date('approval_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cc_qualification');
    }
};
