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
        Schema::create('municipalities', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name', 255);
            $table->integer('state_id');
            $table->string('slug')->unique();
            $table->text('note')->nullable();
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('state_id')->references('id')->on('states')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('municipalities');
    }
};
