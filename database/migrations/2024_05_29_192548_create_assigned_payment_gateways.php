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
        Schema::create('assigned_payment_gateways', function (Blueprint $table) {
            $table->id();
            $table->integer('payment_gateway_id')->unsigned();
            $table->integer('country_id')->unsigned();
            $table->timestamps();

            $table->foreign('payment_gateway_id')->references('id')->on('payment_gateways')->cascadeOnDelete();
            $table->foreign('country_id')->references('id')->on('countries')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assigned_payment_gateways');
    }
};
