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
        Schema::create('cc_registration', function (Blueprint $table) {
            $table->id();
            $table->string('carrier_name');
            $table->string('contact_person');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('services');
            $table->date('registration_date');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cc_registration');
    }
};
