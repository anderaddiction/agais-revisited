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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name');
            $table->string('last_name');
            $table->char('type_id', 5);
            $table->string('identification');
            $table->string('tax_residence');
            $table->string('phone');
            $table->string('phone_alt')->nullable();
            $table->string('email')->nullable();
            $table->string('control_number')->unique();
            $table->string('invoice_number')->unique();
            $table->date('date_of_issue');
            $table->date('date_of_assignment')->nullable();
            $table->integer('quantity')->nullable();
            $table->float('price');
            $table->float('subtotal');
            $table->integer('tax_id')->unsigned();
            $table->float('total');
            $table->text('note');
            $table->integer('payment_method_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
