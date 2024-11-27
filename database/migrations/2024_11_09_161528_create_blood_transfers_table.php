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
        Schema::create('blood_transfers', function (Blueprint $table) {
            $table->id('TransferID');
            $table->unsignedBigInteger('BloodID');
            $table->unsignedBigInteger('FromBloodBankID');
            $table->unsignedBigInteger('ToBloodBankID')->nullable();
            $table->unsignedBigInteger('ToHospitalID')->nullable();
            $table->date('TransferDate');
            $table->string('Status');
            $table->timestamp('LastUpdated')->useCurrent();
            $table->foreign('BloodID')->references('BloodID')->on('blood_inventory')->onDelete('cascade');
            $table->foreign('FromBloodBankID')->references('BloodBankID')->on('blood_banks')->onDelete('cascade');
            $table->foreign('ToBloodBankID')->references('BloodBankID')->on('blood_banks')->onDelete('set null');
            $table->foreign('ToHospitalID')->references('HospitalID')->on('hospitals')->onDelete('set null');
    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blood_transfers');
    }
};
