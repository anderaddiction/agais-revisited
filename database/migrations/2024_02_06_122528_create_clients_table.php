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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->integer('document_id')->nullable()->unsigned();
            $table->string('id_number')->unique();
            $table->string('name')->nullable();
            $table->string('second_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('second_last_name')->nullable();
            $table->string('phone_one')->nullable();
            $table->string('phone_alt')->nullable();
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('email_alt')->unique()->nullable();
            $table->string('address')->nullable();
            $table->integer('country_id')->nullable()->unsigned();
            $table->integer('state_id')->nullable()->unsigned();
            $table->integer('municipality_id')->nullable()->unsigned();
            $table->integer('parish_id')->nullable()->unsigned();
            $table->integer('city_id')->nullable()->unsigned();
            $table->string('password')->nullable();
            $table->integer('category_id')->nullable()->unsigned();
            $table->integer('status')->unsigned();
            $table->string('social_media')->nullable();
            $table->text('avatar')->nullable();
            $table->text('slug')->unique()->nullable();
            $table->rememberToken();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('document_id')->references('id')->on('documents')->cascadeOnDelete();
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
        Schema::dropIfExists('clients');
    }
};
