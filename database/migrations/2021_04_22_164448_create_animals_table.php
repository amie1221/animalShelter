<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('aniName');
            $table->string('aniGender');
            $table->text('aniBreed');
            $table->integer('aniAge');
            $table->string('aniColor');
            $table->string('aniSize');
            $table->string('aniType_id');
            $table->integer('employee_id');
            $table->integer('rescue_id');
            // $table->integer('rescues_id')->unsigned();
            // $table->foreign('rescues_id')->references('rescue_id')->on('rescues')->onUpdate('cascade')->onDelete('cascade');
            $table->date('date_added');
            $table->string('aniImage');
            $table->string('aniHtatus');
            $table->string('aniStatus');



         });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
