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
        //
        Schema::create('donors', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('nic');
            $table->string('address');
            $table->string('city');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('gender');
            $table->string('dob');
            $table->string('btype');
            $table->string('weight');
            $table->string('diseases');
            // $table->string('caddress');
            // $table->string('fname');
            // $table->string('lname');
            $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
