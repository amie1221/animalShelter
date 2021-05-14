<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdoptLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adopt_lines', function (Blueprint $table) {
            $table->increments('adopt_line_id');
            $table->date('adoptLdate');
            $table->integer('adopter_id');
            $table->integer('personnel_id');
            $table->integer('animal_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adopt_lines');
    }
}
