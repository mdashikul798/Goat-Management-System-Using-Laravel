<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGoatInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goat_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('goatId', 50);
            $table->string('breedName', 150);
            $table->string('goatType', 150);
            $table->date('birthDate');
            $table->date('collectionDate');
            $table->string('collectionAddress');
            $table->string('collectionPhone', 15);
            $table->longText('note');
            $table->tinyInteger('action', 1);
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
        Schema::dropIfExists('goat_infos');
    }
}
