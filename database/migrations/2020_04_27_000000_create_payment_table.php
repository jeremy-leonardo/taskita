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
