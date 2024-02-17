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
        Schema::create('svm_bids', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vendor_id')->constrained('svm_vendors');
            $table->foreignId('project_id')->constrained('svm_request_for_proposals')->onDelete('cascade');
            $table->decimal('bid_amount', 10, 2);
            $table->dateTime('bid_submission_date');
            $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending');
            $table->text('comments')->nullable();
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('svm_bids');
    }
};
