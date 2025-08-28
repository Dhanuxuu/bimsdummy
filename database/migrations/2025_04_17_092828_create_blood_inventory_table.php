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
        Schema::create('blood_inventory', function (Blueprint $table) {
            $table->id();
            $table->string('hbid');
            $table->string('ap');
            $table->string('an');
            $table->string('bp');
            $table->string('bn');
            $table->string('op');
            $table->string('on');
            $table->string('abp');
            $table->string('abn');
            $table->string('ohp');
            $table->string('ohn');
            // $table->string('hbid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blood_inventory');
    }
};
