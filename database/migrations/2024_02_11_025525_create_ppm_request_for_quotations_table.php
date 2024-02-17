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
        Schema::create('ppm_request_for_quotations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vendor_id')->constrained('svm_vendors');
            $table->foreignId('product_id')->constrained('svm_products');
            $table->integer('requested_quantity');
            $table->date('date_sent');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppm_request_for_quotations');
    }
};
