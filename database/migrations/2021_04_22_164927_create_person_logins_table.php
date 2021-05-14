<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonLoginsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_logins', function (Blueprint $table) {
            $table->increments('person_login_id');
            $table->integer('personnel_type_id');
            $table->integer('personnel_id');
            $table->integer('Username');
            $table->integer('Password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person_logins');
    }
}
