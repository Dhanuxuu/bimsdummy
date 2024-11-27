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
    if (!Schema::hasTable('blood_inventory')) {
        Schema::create('blood_inventory', function (Blueprint $table) {
            $table->id('BloodID');
            $table->string('BloodType');
            $table->string('BloodCategory');
            $table->integer('Volume');
            $table->date('DonationDate');
            $table->string('StorageLocation');
            $table->date('ExpirationDate');
            $table->string('Status');
            $table->timestamp('LastUpdated')->useCurrent();
            $table->unsignedBigInteger('BloodBankID');
            $table->unsignedBigInteger('DonationID');
            $table->timestamps();

            $table->foreign('BloodBankID')->references('BloodBankID')->on('blood_banks')->onDelete('cascade');
            $table->foreign('DonationID')->references('DonationID')->on('donations')->onDelete('cascade');
        });
    }
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blood_inventory');
    }
};
