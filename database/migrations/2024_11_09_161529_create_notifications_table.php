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
    if (!Schema::hasTable('notifications')) {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id('NotificationID');
            $table->unsignedBigInteger('UserID')->nullable();
            $table->string('Type');
            $table->text('Message');
            $table->dateTime('DateTime');
            $table->string('Status');
            $table->timestamp('LastUpdated')->useCurrent();
            $table->timestamps();

            // Optionally add foreign key if UserID references users table
            $table->foreign('UserID')->references('UserID')->on('users')->onDelete('set null');
        });
    }
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
