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
        Schema::create('rrl_return_authorizations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('or_customers');
            $table->foreignId('product_id')->constrained('svm_products');
            $table->string('request_id');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rrl_return_authorizations');
    }
};
