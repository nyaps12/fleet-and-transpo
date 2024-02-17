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
        Schema::create('lmd_feedback_collection', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('or_customers');
            $table->integer('rating');
            $table->text('comments')->nullable();
            $table->date('date_provided');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lmd_feedback_collection');
    }
};
