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
        Schema::create('blood_transactions', function (Blueprint $table) {
            $table->id('transaction_id');
            $table->string('blood_type');
            $table->integer('volume');
            $table->date('requested_date');
            $table->date('delivered_date')->nullable();
            $table->string('status');
            $table->timestamp('last_updated')->useCurrent();
            //$table->unsignedBigInteger('HospitalID');
           // $table->foreign('HospitalID')->references('HospitalID')->on('hospitals')->onDelete('cascade');
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
