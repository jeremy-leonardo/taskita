<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {

            $table->bigIncrements('transaction_id');
            $table->bigInteger('item_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('status_id')->unsigned()->default(1);
            $table->date('transaction_arrive_date');
            $table->integer('transaction_rent_duration');
            $table->timestamps();
            
            $table->foreign('item_id')->references('item_id')->on('item')->onDelete('cascade');
            $table->foreign('user_id')->references('user_id')->on('user')->onDelete('cascade');
            $table->foreign('status_id')->references('status_id')->on('status')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaction');
    }
}
