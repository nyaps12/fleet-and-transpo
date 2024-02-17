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
        Schema::create('rrl_inspection_results', function (Blueprint $table) {
            $table->id();
             $table->foreignId('return_id')->constrained('rrl_return_authorizations');
            $table->string('inspection_result');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rrl_inspection_results');
    }
};
