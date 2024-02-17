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
        Schema::create('svm_performance_feedback', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vendor_id')->constrained('svm_vendors');
            $table->text('feedback');
            $table->unsignedTinyInteger('rating');
            $table->string('reviewer_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('svm_performance_feedback');
    }
};
