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
        Schema::create('staff_users', function (Blueprint $table) {
            $table->id('staff_id');
            $table->string('userName')->unique();
            $table->string('password_hash');
            $table->string('user_type');
           // $table->unsignedBigInteger('BloodBankID')->nullable();
           // $table->unsignedBigInteger('HospitalID')->nullable();
            //$table->foreign('BloodBankID')->references('BloodBankID')->on('blood_banks')->onDelete('set null');
           // $table->foreign('HospitalID')->references('HospitalID')->on('hospitals')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
