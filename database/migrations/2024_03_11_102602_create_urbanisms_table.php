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
        Schema::create('urbanisms', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->string('phone_one');
            $table->string('phone_alt')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('email_alt')->unique()->nullable();
            $table->string('address');
            $table->integer('country_id')->unsigned();
            $table->integer('state_id')->unsigned();
            $table->integer('municipality_id')->unsigned();
            $table->integer('parish_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->string('type');
            $table->integer('status')->unsigned();
            $table->string('social_media')->nullable();
            $table->string('slug')->unique();
            $table->text('note')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('country_id')->references('id')->on('countries')->cascadeOnDelete();
            $table->foreign('state_id')->references('id')->on('states')->cascadeOnDelete();
            $table->foreign('municipality_id')->references('id')->on('municipalities')->cascadeOnDelete();
            $table->foreign('parish_id')->references('id')->on('parishes')->cascadeOnDelete();
            $table->foreign('city_id')->references('id')->on('cities')->cascadeOnDelete();
            $table->foreign('category_id')->references('id')->on('categories')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('urbanisms');
    }
};
