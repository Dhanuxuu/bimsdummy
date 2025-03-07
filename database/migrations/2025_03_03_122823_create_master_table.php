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
        Schema::create('master', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_email')->nullable();
            $table->unsignedBigInteger('blood_id')->nullable();
            $table->unsignedBigInteger('hbb_id')->nullable();
            $table->unsignedBigInteger('donation_camp_id')->nullable();
            $table->unsignedBigInteger('donation_id')->nullable();
            $table->unsignedBigInteger('donor_id')->nullable();
            $table->unsignedBigInteger('blood_transfer_id')->nullable();
            
            // Defining Foreign Key Constraints
            $table->foreign('user_email')->references('email')->on('users')->onDelete('set null');
            $table->foreign('blood_id')->references('id')->on('blood_inventory')->onDelete('set null');
            $table->foreign('hbb_id')->references('id')->on('hospital_bb')->onDelete('set null');
          //  $table->foreign('HospitalID')->references('id')->on('hospitals')->onDelete('set null');
            $table->foreign('camp_id')->references('id')->on('donation_camps')->onDelete('set null');
            $table->foreign('donation_id')->references('id')->on('donations')->onDelete('set null');
            $table->foreign('donor_id')->references('id')->on('donors')->onDelete('set null');
           // $table->foreign('RequestID')->references('id')->on('blood_requests')->onDelete('set null');
          //  $table->foreign('TransferID')->references('id')->on('blood_transfers')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master');
    }
};
