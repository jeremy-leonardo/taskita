<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment', function (Blueprint $table) {

            $table->bigIncrements('payment_id');
            $table->bigInteger('transaction_id')->unsigned();
            $table->bigInteger('payment_type_id')->unsigned();
            $table->timestampTz('payment_timestamp');
            $table->string('payment_ref')->default('');
            $table->timestamps();
            
            $table->foreign('transaction_id')->references('transaction_id')->on('transaction')->onDelete('cascade');
            $table->foreign('payment_type_id')->references('payment_type_id')->on('payment_type')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payment');
    }
}
