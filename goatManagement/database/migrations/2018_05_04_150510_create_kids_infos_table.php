<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKidsInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kids_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('goatId', 30);
            $table->string('rearingNumber', 10);
            $table->string('saleNumber', 10);
            $table->string('deathNumber', 10);
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
        Schema::dropIfExists('kids_infos');
    }
}
