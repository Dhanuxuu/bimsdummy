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
        Schema::create('donors', function (Blueprint $table) {
            $table->id('donor_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->integer('weight');
            $table->string('blood_type');
            $table->text('diseases')->nullable();
            $table->string('nic')->unique();
            $table->string('contact_no');
            $table->string('location');
            //$table->string('Email')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donors');
    }
};
