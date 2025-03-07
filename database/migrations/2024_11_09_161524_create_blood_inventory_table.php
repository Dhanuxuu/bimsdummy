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
            $table->id('blood_id');
            $table->string('blood_type');
            $table->string('blood_category');
            $table->integer('volume');
            $table->date('donation_date');
            $table->string('storage_location');
            $table->date('expiration_date');
            $table->string('status');
            $table->timestamp('last_updated')->useCurrent();
        //    $table->unsignedBigInteger('BloodBankID');
        //  $table->unsignedBigInteger('DonationID');
            $table->timestamps();

          //  $table->foreign('BloodBankID')->references('BloodBankID')->on('blood_banks')->onDelete('cascade');
        //    $table->foreign('DonationID')->references('DonationID')->on('donations')->onDelete('cascade');
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
