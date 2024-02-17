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
        Schema::create('svm_contracts', function (Blueprint $table) {
            $table->id();
             $table->foreignId('vendor_id')->constrained('svm_vendors');
            $table->string('title');
            $table->text('details');
            $table->date('start_date');
            $table->date('end_date');
            $table->text('contract_terms');
            $table->decimal('contract_value', 10, 2);
            $table->enum('status', ['active', 'expired', 'terminated'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('svm__contracts');
    }
};
