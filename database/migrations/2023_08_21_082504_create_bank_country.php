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
        Schema::create('bank_country_table', function (Blueprint $table) {
            $table->id();
            $table->integer('bank_id')->unsigned();
            $table->integer('country_id')->unsigned();
            $table->timestamps();
            $table->foreign('bank_id')->references('id')->on('banks')->cascadeOnDelete();
            $table->foreign('country_id')->references('id')->on('countries')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_country_table');
    }
};
