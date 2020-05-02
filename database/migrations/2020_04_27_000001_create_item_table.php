<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {

            $table->bigIncrements('item_id');
            $table->bigInteger('item_type_id')->unsigned()->default(1);
            $table->bigInteger('brand_id')->unsigned()->default(1);
            $table->string('item_name');
            $table->string('item_description')->default('');
            $table->integer('item_stock');
            $table->bigInteger('item_price');
            $table->timestamps();
            
            $table->foreign('item_type_id')->references('item_type_id')->on('item_type')->onDelete('cascade');
            $table->foreign('brand_id')->references('brand_id')->on('brand')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item');
    }
}
