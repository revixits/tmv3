<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices_payments', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_payment_code', 20)->unique();
            $table->string('invoice_code', 20);
            $table->string('payment_method_code', 20);
            $table->float('total_amount');
            $table->string('currency')->default('IDR');
            $table->timestamp('payment_date')->default(now());
            $table->text('transaction_receipt');
            $table->boolean('status')->default(true);
            $table->string('created_by', 100)->nullable();
            $table->string('updated_by', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices_payments');
    }
};
