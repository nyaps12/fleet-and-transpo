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
        Schema::create('cc_rating_feedback', function (Blueprint $table) {
            $table->id();
             $table->foreignId('carrier_id')->constrained('cc_registration');
            //$table->unsignedBigInteger('user_id')->nullable();
            $table->integer('rating');
            $table->text('feedback_text')->nullable();
            $table->date('feedback_date');
            $table->timestamps();
           // $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cc_rating_feedback');
    }
};
