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
        Schema::create('bloodreq', function (Blueprint $table) {
            $table->id();
            $table->string('hbid', 100);
            $table->string('bloodbank');
            $table->string('btype');
            $table->string('component');
            $table->integer('amount');
            $table->string('status')->default('sent');
            $table->string('remark')->default('no any updates.');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bloodreq');
    }
};
