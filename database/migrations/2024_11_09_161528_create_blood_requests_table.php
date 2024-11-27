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
        Schema::create('blood_requests', function (Blueprint $table) {
            $table->id('RequestID');
            $table->string('BloodType');
            $table->integer('Volume');
            $table->date('RequestDate');
            $table->date('DeliveryDate')->nullable();
            $table->string('Status');
            $table->timestamp('LastUpdated')->useCurrent();
            $table->unsignedBigInteger('HospitalID');
            $table->foreign('HospitalID')->references('HospitalID')->on('hospitals')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blood_requests');
    }
};
