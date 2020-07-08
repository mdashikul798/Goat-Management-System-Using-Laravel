<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBreadingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breadings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('doeId', 30);
            $table->string('buckId', 30);
            $table->date('heatDate');
            $table->date('breedingDate');
            $table->string('delevaryDateFrom', 100);
            $table->string('delevaryDateTo', 100);
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
        Schema::dropIfExists('breadings');
    }
}
