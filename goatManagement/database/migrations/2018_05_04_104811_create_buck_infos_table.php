<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuckInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buck_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('buckId');
            $table->string('breedName');
            $table->date('birthDate');
            $table->date('collectionDate');
            $table->string('collectionAddress');
            $table->string('collectionPhone');
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
        Schema::dropIfExists('buck_infos');
    }
}
