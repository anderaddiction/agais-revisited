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
            $table->integer('document_id')->unsigned();
            $table->string('id_number')->unique();
            $table->string('name');
            $table->string('second_name')->nullable();
            $table->string('last_name');
            $table->string('second_last_name')->nullable();
            $table->string('phone_one');
            $table->string('phone_alt')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('email_alt')->unique()->nullable();
            $table->char('gender');
            $table->string('address');
            $table->integer('country_id')->unsigned();
            $table->integer('state_id')->unsigned();
            $table->integer('municipality_id')->unsigned();
            $table->integer('parish_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->string('password');
            $table->integer('category_id')->unsigned();
            $table->integer('status')->unsigned();
            $table->string('social_media')->nullable();
            $table->string('avatar')->nullable();
            $table->string('slug')->unique();
            $table->text('note')->nullable();
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
