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
        Schema::create('assigned_mails', function (Blueprint $table) {
            $table->id();
            $table->integer('sender_id')->unsigned();
            $table->integer('email_id')->unsigned();
            $table->integer('recipient_id')->unsigned();
            $table->timestamps();

            $table->foreign('sender_id')->references('id')->on('users')->cascadeOnDeletes();
            $table->foreign('email_id')->references('id')->on('mails')->cascadeOnDeletes();
            $table->foreign('recipient_id')->references('id')->on('users')->cascadeOnDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assigned_mails');
    }
};
