<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    if (!Schema::hasTable('donations')) {
        Schema::create('donations', function (Blueprint $table) {
            $table->id('DonationID');
            $table->string('BloodType');
            $table->string('BloodCategory');
            $table->integer('Volume');
            $table->date('DonationDate');
            $table->date('LastDonation')->nullable();
            $table->unsignedBigInteger('CampID')->nullable();
            $table->unsignedBigInteger('BloodBankID');
            $table->unsignedBigInteger('DonorID');
            $table->timestamps();

            // Foreign Key Constraints
            $table->foreign('DonorID')->references('DonorID')->on('donors')->onDelete('cascade');
            $table->foreign('CampID')->references('CampID')->on('donation_camps')->onDelete('set null');
            $table->foreign('BloodBankID')->references('BloodBankID')->on('blood_banks')->onDelete('cascade');
        });
    }
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
