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
        Schema::create('svm_bidder_response', function (Blueprint $table) {
            $table->id();
            $table->foreignId('rfp_id')->constrained('svm_request_for_proposals')->onDelete('cascade');
            $table->foreignId('vendor_id')->constrained('svm_vendors');
            $table->text('proposal');
            $table->dateTime('submission_date');
            $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('svm_bidder_response');
    }
};
