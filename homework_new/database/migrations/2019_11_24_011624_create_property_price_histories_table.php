<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyPriceHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_price_histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('property_id');
            $table->float('rent_price');
            $table->float('sale_price');
            $table->float('list_price');
            $table->float('sold_price');
            $table->string('created_by');
            $table->string('updated_by');
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
        Schema::dropIfExists('property_price_histories');
    }
}
