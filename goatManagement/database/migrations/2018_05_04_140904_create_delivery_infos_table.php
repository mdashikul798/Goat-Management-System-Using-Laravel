<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeliveryInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('goatId');
            $table->date('deleveryDate');
            $table->tinyInteger('kidsNumber');
            $table->tinyInteger('totalMale');
            $table->tinyInteger('totalFemail');
            $table->longText('note');
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
        Schema::dropIfExists('delivery_infos');
    }
}
