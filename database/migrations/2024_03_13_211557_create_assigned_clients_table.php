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
        Schema::create('assigned_clients', function (Blueprint $table) {
            $table->id();
            $table->integer('client_id')->unsigned();
            $table->integer('role_id')->unsigned();
            $table->timestamps();

            //$table->foreign('client_id')->references('id')->on('clients')->cascadeOnDelete();
            $table->foreign('role_id')->references('id')->on('roles')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assigned_clients');
    }
};
