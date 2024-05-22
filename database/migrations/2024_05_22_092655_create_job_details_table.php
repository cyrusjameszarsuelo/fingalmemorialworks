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
        Schema::create('job_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('order_id')->constrained();
            $table->string('details_of_work')->nullable();
            $table->integer('net');
            $table->foreignId('vat_code_id')->constrained();
            $table->foreignId('analysis_id')->constrained();
            $table->integer('gross');
            $table->integer('vat');
            $table->integer('discount');
            $table->integer('balance');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_details');
    }
};
