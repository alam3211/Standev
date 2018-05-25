<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_login');
            $table->string('e_name');
            $table->string('e_location');
            $table->string('e_city');
            $table->string('e_telp');
            $table->string('e_email');
            $table->date('e_startdate');
            $table->date('e_enddate');
            $table->time('e_time');
            $table->text('e_description');
            $table->binary('e_poster')
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
        Schema::dropIfExists('event');
    }
}
