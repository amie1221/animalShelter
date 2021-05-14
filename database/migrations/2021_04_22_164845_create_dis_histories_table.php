<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dis_histories', function (Blueprint $table) {
            $table->increments('dis_history_id');
            $table->string('animal_id');
            $table->date('disDateadded');
            $table->integer('disease_id1');
            $table->integer('disease_id2');
            $table->integer('disease_id3');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dis_histories');
    }
}
